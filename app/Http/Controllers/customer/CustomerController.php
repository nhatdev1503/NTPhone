<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Contact;
use App\Models\Discount;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\News;
use App\Models\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $banner = \App\Models\Banner::where('status', 'active')->first();
        $categories = \App\Models\Category::with(['products'])
            ->withSum('products as total_sold', 'sold')
            ->where('status', 'active')
            ->orderByDesc('total_sold')
            ->take(10)
            ->get();
        $latestNews = News::latest('published_at')->take(5)->get();
    
        $featuredProducts = Product::where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->with(['variants' => function ($query) {
                $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage', 'stock', 'status')
                    ->where('status', 'active')
                    ->orderBy('price', 'asc');
            }])
            ->with('ratings')
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($product) {
                $firstVariant = $product->variants->first();
    
                // Kiểm tra xem sản phẩm có biến thể nào còn hàng không
                $hasActiveStock = $product->variants->where('status', 'active')->where('stock', '>', 0)->count() > 0;
                $product->is_out_of_stock = !$hasActiveStock;
    
                // Xử lý giá và giảm giá
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;
    
                $product->sold_count = $product->orderItems()->sum('quantity');
    
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();
    
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();
    
                $ratings = $product->ratings;
                if ($ratings->isNotEmpty()) {
                    $product->average_rating = round($ratings->avg('rating'), 1);
                    $product->total_ratings = $ratings->count();
                } else {
                    $product->average_rating = 0;
                    $product->total_ratings = 0;
                }
    
                return $product;
            });
    
        $bestSellingProducts = Product::where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->with(['variants' => function ($query) {
                $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage', 'stock', 'status')
                    ->where('status', 'active')
                    ->orderBy('price', 'asc');
            }])
            ->with(['ratings' => function ($query) {
                $query->select('product_id', 'rating');
            }])
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($product) {
                $firstVariant = $product->variants->first();
    
                // Kiểm tra xem sản phẩm có biến thể nào còn hàng không
                $hasActiveStock = $product->variants->where('status', 'active')->where('stock', '>', 0)->count() > 0;
                $product->is_out_of_stock = !$hasActiveStock;
    
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;
    
                $product->sold_count = $product->orderItems()->sum('quantity');
    
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();
    
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();
    
                $ratings = $product->ratings;
                if ($ratings->isNotEmpty()) {
                    $product->average_rating = round($ratings->avg('rating'), 1);
                    $product->total_ratings = $ratings->count();
                } else {
                    $product->average_rating = 0;
                    $product->total_ratings = 0;
                }
    
                return $product;
            });
    
        return view('customer.index', compact('banner', 'categories', 'featuredProducts', 'bestSellingProducts', 'latestNews'));
    }


    public function categories(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $color = Color::all();
        $storage = Storage::all();

        // Lấy tham số lọc từ request
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);
        $colorId = $request->input('color');
        $storageId = $request->input('storage');

        // Query sản phẩm với điều kiện lọc
        $query = Product::where('category_id', $id)
            ->where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->with([
                'variants' => function ($query) {
                    $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
                        ->where('status', 'active')
                        ->orderBy('price', 'asc');
                },
                'ratings'
            ]);

        // Thêm điều kiện lọc theo khoảng giá
        if ($minPrice > 0 || $maxPrice < 50000000 || $colorId || $storageId) {
            $query->whereHas('variants', function ($q) use ($minPrice, $maxPrice, $colorId, $storageId) {
                $q->whereBetween('price', [$minPrice, $maxPrice]);

                if ($colorId) {
                    $q->where('color', $colorId);
                }
        
                if ($storageId) {
                    $q->where('storage', $storageId);
                }
            });
        }

        // Lấy danh sách sản phẩm đã lọc
        $products = $query->orderBy('priority', 'desc')
            ->paginate(12)
            ->through(function ($product) {
                $firstVariant = $product->variants->first();

                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;

                // Số lượng đã bán
                $product->sold_count = $product->orderItems()->sum('quantity');

                // Màu sắc
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();

                // Dung lượng
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();

                // Đánh giá
                $ratings = $product->ratings;
                if ($ratings->isNotEmpty()) {
                    $product->average_rating = round($ratings->avg('rating'), 1);
                    $product->total_ratings = $ratings->count();
                } else {
                    $product->average_rating = 0;
                    $product->total_ratings = 0;
                }

                return $product;
            });
        // if ($products->isEmpty()) {
        //     return redirect()->route('customer.index')->with('error', 'Không có sản phẩm nào trong danh mục này.');
        // }
        return view('customer.categories', compact('category', 'products', 'color', 'storage'));
    }

    public function filterByCategory(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $color = Color::all();
        $storage = Storage::all();

        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);
        $colorId = $request->input('color');
        $storageId = $request->input('storage');

        $products = Product::with([
            'variants' => function ($query) {
                $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
                    ->where('status', 'active')
                    ->orderBy('price', 'asc');
            },
            'ratings'
        ])
            ->where('category_id', $id)
            ->where('status', 'active')
            ->orderBy('priority', 'desc')
            ->paginate(15);

        $products->getCollection()->transform(function ($product) use ($minPrice, $maxPrice) {
            $firstVariant = $product->variants->first();

            if ($firstVariant && ($firstVariant->price < $minPrice || $firstVariant->price > $maxPrice)) {
                return null;
            }

            if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                $product->origin_price = $firstVariant->origin_price;
            } else {
                $product->discount_percentage = 0;
                $product->origin_price = $firstVariant ? $firstVariant->price : 0;
            }

            $product->sale_price = $firstVariant ? $firstVariant->price : 0;
            $product->sold_count = $product->orderItems()->sum('quantity');

            $product->available_colors = $product->variants->pluck('hax_code', 'color')->map(function ($hex, $color) {
                return ['color' => $color, 'hex_code' => $hex];
            })->values()->unique('color');

            $product->available_storages = $product->variants->pluck('storage')->unique()->values();

            return $product;
        });

        $products->setCollection($products->getCollection()->filter());

        return view('customer.filterByCategory', compact('category', 'products', 'color', 'storage'));
    }

    public function filter(Request $request)
    {
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);

        $query = Product::query();

        $query->whereBetween('sale_price', [$minPrice, $maxPrice]);

        $products = $query->paginate(15);

        return view('customer.filterByCategory', compact('products'));
    }

    public function warranty()
    {
        return view('customer.warranty');
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'product_variant_id' => 'required|integer|exists:product_variants,id',
            'action' => 'required|string',
        ]);
        $productVariant = ProductVariant::find($data['product_variant_id']);

        if ($data['action'] == 'buy_now') {
            return redirect()->route('checkout.page', ['product_variant_id' => $productVariant->id]);
        }
        if ($data['action'] == 'add_to_cart') {
            $user = Auth::user();
            $cartItem = Cart::where('user_id', $user->id)
                ->where('product_variant_id', $productVariant->id)
                ->first();

            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_variant_id' => $productVariant->id,
                    'quantity' => 1,
                ]);
            }
            return redirect()->route('cart');
        }
    }

    public function contact()
    {
        return view('customer.contact');
    }


    public function product_detail($id)
    {
        $product = Product::with('variants', 'images')->findOrFail($id);
        if ($product->status != 'active' || $product->category->status != 'active') {
            return redirect()->route('customer.index')->with('error', 'Sản phẩm không tồn tại hoặc đã ngừng kinh doanh.');
        }
        $product->increment('view');
        $categoryId = $product->category_id;
    
        $canRateProduct = false;
        if (auth()->check()) {
            $canRateProduct = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
                ->join('product_variants', 'order_items.product_variant_id', '=', 'product_variants.id')
            ->where('orders.user_id', auth()->id())
                ->where('product_variants.product_id', $product->id)
                ->where('orders.status', 'completed')
            ->exists();
        }
    
        $variantIds = $product->variants->pluck('id');
    
        $ratings = Rating::whereIn('product_variant_id', $variantIds)
            ->with('user:id,fullname')
            ->select('user_id', 'review', 'rating', 'created_at', 'color', 'storage')
            ->orderBy('created_at', 'desc')
            ->get();
    
        $comments = Comment::where('product_id', $product->id)
            ->with('user:id,fullname')
            ->orderBy('created_at', 'desc')
            ->get();
    
        $variants = $product->variants ?? collect();
    
        $colors = $variants->groupBy('color')->map(function ($group) {
            return [
                'color' => $group->first()->color,
                'variants' => $group,
                'prices' => $group->pluck('price')->unique()
            ];
        });
    
        $storages = $variants->unique('storage');
    
        // Lấy sản phẩm liên quan dựa trên tên sản phẩm
        $productName = $product->name;
        $searchKeywords = explode(' ', $productName); // Tách tên thành các từ
        $searchQuery = collect($searchKeywords)->map(function ($keyword) {
            return '%' . $keyword . '%'; // Thêm % để tìm kiếm gần đúng
        })->toArray();
    
        $relatedProducts = Product::where('status', 'active')
            ->where('id', '!=', $id) // Loại bỏ sản phẩm hiện tại
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->where(function ($query) use ($searchQuery) {
                foreach ($searchQuery as $keyword) {
                    $query->orWhere('name', 'LIKE', $keyword); // Tìm kiếm tên chứa từ khóa
                }
            })
            ->with([
                'images',
                'variants' => function ($query) {
                    $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
                        ->where('status', 'active')
                        ->orderBy('price', 'asc');
                },
                'ratings'
            ])
            ->limit(6)
            ->get()
            ->map(function ($product) {
                $firstVariant = $product->variants->first();
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;
                $product->sold_count = $product->orderItems()->sum('quantity');
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();
                $ratings = $product->ratings;
                if ($ratings->isNotEmpty()) {
                    $product->average_rating = round($ratings->avg('rating'), 1);
                    $product->total_ratings = $ratings->count();
                } else {
                    $product->average_rating = 0;
                    $product->total_ratings = 0;
                }
                return $product;
            });
    
        // Lấy sản phẩm cho "Có thể bạn thích" dựa trên số lượng bán, thương hiệu và đánh giá
        $relatedProductIds = $relatedProducts->pluck('id')->toArray();
        $brandId = $product->brand_id ?? null; // Giả sử có cột brand_id
    
        $products = Product::where('status', 'active')
            ->where('id', '!=', $id) // Loại bỏ sản phẩm hiện tại
            ->whereNotIn('id', $relatedProductIds) // Loại bỏ sản phẩm đã có trong $relatedProducts
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->when($brandId, function ($query) use ($brandId) {
                $query->where('brand_id', $brandId); // Lọc theo thương hiệu nếu có
            })
            ->with([
                'images',
                'variants' => function ($query) {
                    $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
                        ->where('status', 'active')
                        ->orderBy('price', 'asc');
                },
                'ratings'
            ])
            ->get()
            ->map(function ($product) {
                $product->sold_count = $product->orderItems()->sum('quantity');
                $ratings = $product->ratings;
                $product->average_rating = $ratings->isNotEmpty() ? round($ratings->avg('rating'), 1) : 0;
                return $product;
            })
            ->sortByDesc(function ($product) {
                // Sắp xếp theo công thức: số lượng bán (70%) + đánh giá trung bình (30%)
                return ($product->sold_count * 0.7) + ($product->average_rating * 10 * 0.3);
            })
            ->take(6) // Giới hạn 6 sản phẩm
            ->map(function ($product) {
                $firstVariant = $product->variants->first();
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();
                $product->total_ratings = $product->ratings->count();
                return $product;
            });
    
        $productImages = $product->images ?? collect();
    
        $selectedColor = request('color');
        $selectedStorage = request('storage');
        $selectedVariant = $product->variants()
            ->where('color', $selectedColor)
            ->where('storage', $selectedStorage)
            ->first();
    
        return view('customer.product_detail', compact(
            'product',
            'variants',
            'products',
            'colors',
            'categoryId',
            'storages',
            'relatedProducts',
            'productImages',
            'ratings',
            'canRateProduct',
            'comments',
            'selectedVariant'
        ));
    }
    public function getPrice(Request $request)
    {
        $productId = $request->query('product_id');
        $storage = $request->query('storage');
        $color = $request->query('color');

        if (!$productId || !$storage || !$color) {
            return response()->json(['success' => false, 'message' => 'Thiếu thông tin cần thiết'], 400);
        }

        $variant = ProductVariant::where('product_id', $productId)
            ->where('storage', $storage)
            ->where('color', $color)
            ->first(); // Find variant regardless of status first

        if ($variant) {
            $available = ($variant->status === 'active' && $variant->stock > 0);
            return response()->json([
                'success' => true,
                'price' => $variant->price,
                'origin_price' => $variant->origin_price ?? null,
                'stock' => $variant->stock,
                'available' => $available
            ]);
        } else {
            // If the specific combination doesn't exist at all
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy phiên bản này',
                'available' => false, // Explicitly set available to false
                'stock' => 0          // Explicitly set stock to 0
            ], 404);
        }
    }

    public function getAvailableColors(Request $request)
    {
        $productId = $request->query('product_id');
        $storage = $request->query('storage');
        $availableColors = ProductVariant::where('product_id', $productId)
            ->where('storage', $storage)
            ->distinct()
            ->pluck('color')
            ->toArray();
        return response()->json(['success' => true, 'colors' => $availableColors]);
    }

    public function cart()
    {
        $user = Auth::user();

        // Gộp các sản phẩm trùng lặp
        $this->mergeDuplicateCartItems($user->id);

        $carts = Cart::where('user_id', $user->id)
            ->with('product_variant.product.category')
            ->get();

        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->get();
        $voucherSession = session('voucher');
        return view('customer.shopcart', compact('carts', 'activeVouchers', 'voucherSession'));
    }

    private function mergeDuplicateCartItems($userId)
    {
        // Lấy tất cả các sản phẩm trong giỏ hàng của user
        $cartItems = Cart::where('user_id', $userId)->get();

        // Tạo mảng để theo dõi các sản phẩm đã xử lý
        $processedItems = [];

        foreach ($cartItems as $item) {
            $key = $item->product_variant_id;

            if (!isset($processedItems[$key])) {
                // Nếu chưa xử lý sản phẩm này, thêm vào danh sách đã xử lý
                $processedItems[$key] = $item;
            } else {
                // Nếu đã có sản phẩm này, cộng số lượng vào bản ghi đầu tiên
                $existingItem = $processedItems[$key];
                $newQuantity = min($existingItem->quantity + $item->quantity, 5); // Giới hạn tối đa 5

                $existingItem->quantity = $newQuantity;
                $existingItem->save();

                // Xóa bản ghi trùng lặp
                $item->delete();
            }
        }
    }

    public function payment()
    {
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
    }

    public function postCart(Request $request): JsonResponse
    {
        $data = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1|max:5',
        ]);
    
        // Tìm biến thể còn hàng, ưu tiên giá thấp nhất
        $product_variant = ProductVariant::where('product_id', $data['product_id'])
            ->where('status', 'active')
            ->where('stock', '>', 0)
            ->orderBy('price', 'asc')
            ->first();
    
        if (!$product_variant) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm hiện đã hết hàng hoặc không có biến thể hợp lệ.'
            ], 404);
        }
    
        $user = Auth::user();
    
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_variant_id', $product_variant->id)
            ->first();
    
        $quantityToAdd = $data['quantity'];
    
        if ($product_variant->stock < $quantityToAdd) {
            return response()->json([
                'success' => false,
                'message' => "Số lượng tồn kho không đủ. Chỉ còn {$product_variant->stock} sản phẩm."
            ], 400);
        }
    
        try {
        if ($cartItem) {
                // Nếu sản phẩm đã có trong giỏ, tăng số lượng
                $newQuantity = min($cartItem->quantity + $quantityToAdd, 5);
                if ($product_variant->stock < $newQuantity) {
                    return response()->json([
                        'success' => false,
                        'message' => "Số lượng tồn kho không đủ. Chỉ còn {$product_variant->stock} sản phẩm."
                    ], 400);
                }
                $cartItem->quantity = $newQuantity;
            $cartItem->save();
        } else {
                // Nếu chưa có, tạo mới
            Cart::create([
                'user_id' => $user->id,
                    'product_variant_id' => $product_variant->id,
                    'quantity' => $quantityToAdd,
                ]);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Đã thêm sản phẩm vào giỏ hàng.',
                'cart_url' => route('customer.cart')
            ]);
        } catch (\Exception $e) {
            Log::error("Error adding item to cart: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi thêm vào giỏ hàng.'
            ], 500);
        }
    }
    public function postCartDT(Request $request): JsonResponse
    {
        $data = $request->validate([ // Validate input first
        'product_id' => 'required|integer|exists:products,id',
             'color' => 'required|string',
             'storage' => 'required|string',
             'quantity' => 'required|integer|min:1|max:5',
         ]);
         $product_variant = ProductVariant::where('product_id', $data['product_id'])
             ->where('color', $data['color'])
             ->where('storage', $data['storage'])
             ->first();
        if (!$product_variant || $product_variant->status !== 'active') {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm với biến thể đã chọn hoặc sản phẩm đã ngừng kinh doanh.'], 404);
        }
        $user = Auth::user();
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = Cart::where('user_id', $user->id)
        ->where('product_variant_id', $product_variant->id)
        ->first();

        if ($cartItem) {
            return response()->json(['success' => false, 'exists' => true, 'message' => 'Sản phẩm đã có trong giỏ hàng.']);
        }
        $quantityToAdd = $data['quantity'];
        if ($product_variant->stock < $quantityToAdd) {
            return response()->json(['success' => false, 'message' => "Số lượng tồn kho không đủ. Chỉ còn {$product_variant->stock} sản phẩm."], 400);
        }
        try {
            $newCartItem = Cart::create([
                'user_id' => $user->id,
                'product_variant_id' => $product_variant->id,
                'quantity' => $quantityToAdd,
            ]);
            return response()->json(['success' => true, 'new_item' => true, 'message' => 'Đã thêm sản phẩm vào giỏ hàng.']); // Add cartCount if needed
        } catch (\Exception $e) {
            Log::error("Error adding item to cart: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi thêm vào giỏ hàng.'], 500);
        }
    }

    public function postPayment(Request $request)
    {
        $product_variant_id = ProductVariant::where('product_id', $request->product_id)
            ->where('color', $request->product_variant_color)
            ->where('storage', $request->product_variant_storage)
            ->value('id');
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
    }

    public function updateCartQuantity(Request $request, $cartId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:5'
        ]);

        $cart = Cart::findOrFail($cartId);
        if ($cart->user_id != Auth::id()) {
            abort(403);
        }

        // Kiểm tra stock trước khi cập nhật
        $variant = $cart->product_variant;
        if ($variant->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => "Số lượng vượt quá giới hạn kho. Bạn chỉ có thể đặt tối đa {$variant->stock} sản phẩm.",
                'max_quantity' => $variant->stock,
                'disable_checkbox' => true
            ]);
        }

        $cart->update(['quantity' => $request->quantity]);
        return response()->json([
            'success' => true,
            'disable_checkbox' => false
        ]);
    }

    public function updateCartVariant(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'color' => 'required|string',
            'storage' => 'required|string'
        ]);

        $cart = Cart::find($request->cart_id);
        if (!$cart || $cart->user_id != Auth::id()) {
            return response()->json([
                'success' => false,
                'message' => 'Rất tiếc, bạn không có quyền thực hiện thao tác này.'
            ], 403);
        }

        // Lấy tất cả biến thể khả dụng của sản phẩm
        $availableVariants = ProductVariant::where('product_id', $cart->product_variant->product_id)
            ->where('status', 'active')
            ->get();

        // Kiểm tra biến thể yêu cầu
        $newVariant = $availableVariants->where('color', $request->color)
            ->where('storage', $request->storage)
            ->first();

        if (!$newVariant) {
            // Tìm các biến thể thay thế
            $alternativeVariants = $availableVariants->where('status', 'active')
                ->where(function ($query) use ($request) {
                    $query->where('color', $request->color)
                        ->orWhere('storage', $request->storage);
                });

            $message = 'Rất tiếc, phiên bản bạn chọn hiện không còn hàng. ';
            if ($alternativeVariants->isNotEmpty()) {
                $message .= 'Bạn có thể xem xét các phiên bản sau: ';
                foreach ($alternativeVariants as $variant) {
                    $message .= "{$variant->color} {$variant->storage}, ";
                }
                $message = rtrim($message, ', ') . '.';
            }

            return response()->json([
                'success' => false,
                'message' => $message,
                'available_variants' => $availableVariants
            ], 404);
        }

        if ($newVariant->stock <= 0) {
            return response()->json([
                'success' => false,
                'message' => 'Rất tiếc, phiên bản này đã hết hàng. Vui lòng chọn phiên bản khác hoặc quay lại sau.'
            ], 404);
        }

        $cart->update(['product_variant_id' => $newVariant->id]);

        return response()->json([
            'success' => true,
            'price' => $newVariant->price,
            'message' => 'Đã thay đổi thành công!',
            'available_variants' => $availableVariants
        ]);
    }

    public function deleteCartItem($id)
    {
        try {
            $cart = Cart::findOrFail($id);

            // Kiểm tra xem cart có thuộc về user hiện tại không
            if ($cart->user_id !== auth()->id()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không có quyền xóa sản phẩm này.'
                ], 403);
            }

            $cart->delete();

            return response()->json([
                'success' => true,
                'message' => 'Đã xóa sản phẩm khỏi giỏ hàng.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi xóa sản phẩm.'
            ], 500);
        }
    }

    private function createVnpayPaymentUrl($final_total)
    {
        $vnp_TmnCode = env('VNPAY_TMN_CODE');
        $vnp_HashSecret = env('VNPAY_HASH_SECRET');
        $vnp_Url = env('VNPAY_URL');
        $vnp_Returnurl = route('customer.order.vnpay.callback');

        $vnp_TxnRef = 'ORD' . time();
        $vnp_Amount = $final_total * 100;
        $vnp_OrderInfo = "Thanh toan don hang {$vnp_TxnRef}";
        $vnp_IpAddr = request()->ip();
        $vnp_Locale = "vn";
        $vnp_OrderType = "billpayment";

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = http_build_query($inputData);
        $hashdata = $query;
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= "?" . $query . "&vnp_SecureHash=" . $vnpSecureHash;

        return $vnp_Url;
    }

    public function cart_checkout(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate common checkout info
        $request->validate([
                'selected_items' => 'required|string', // Changed to string as we're sending JSON
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
            'payment_method' => 'required|in:COD,VNPay',
                'voucher_code' => 'nullable|string',
                'agree' => 'required|accepted'
        ]);

        $user = Auth::user();

            // Decode the selected items from JSON
            $selectedItems = json_decode($request->selected_items, true);

            if (empty($selectedItems)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Vui lòng chọn sản phẩm để thanh toán.'
                ], 422);
            }

            $subTotal = 0;
            $orderItemsData = [];
            $stockValidation = [];
            $cartItemsToDelete = [];

            // Check if this is a buy now flow
            $isBuyNow = session('is_buy_now', false);
            $checkoutItems = session('checkout_items', []);

            if ($isBuyNow && !empty($checkoutItems)) {
                // Handle buy now flow
                foreach ($checkoutItems as $item) {
                    $variant = ProductVariant::with('product')->find($item['variant_id']);
                    if (!$variant || $variant->status !== 'active') {
                        throw new \Exception("Phiên bản của sản phẩm {$variant->product->name} không còn kinh doanh.");
                    }
                    if ($variant->stock < $item['quantity']) {
                        throw new \Exception("Sản phẩm {$variant->product->name} chỉ còn {$variant->stock} sản phẩm trong kho.");
                    }

                    $lockedVariant = ProductVariant::lockForUpdate()->find($variant->id);
                    $stockValidation[] = [
                        'variant_id' => $lockedVariant->id,
                        'required_quantity' => $item['quantity'],
                    ];
                    $itemTotal = $lockedVariant->price * $item['quantity'];
                    $subTotal += $itemTotal;
                    $orderItemsData[] = [
                        'product_variant_id' => $lockedVariant->id,
                        'quantity' => $item['quantity'],
                        'price' => $lockedVariant->price
                    ];
                }
            } else {
                // Handle cart checkout flow
        $carts = Cart::where('user_id', $user->id)
                    ->whereIn('id', $selectedItems)
                    ->with(['product_variant.product'])
            ->get();

        if ($carts->isEmpty()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Không tìm thấy sản phẩm đã chọn trong giỏ hàng của bạn.'
                    ], 422);
        }

        foreach ($carts as $cart) {
                    $variant = $cart->product_variant;
                    $lockedVariant = ProductVariant::lockForUpdate()->find($variant->id);

                    if (!$lockedVariant || $lockedVariant->status !== 'active') {
                        throw new \Exception("Phiên bản của sản phẩm {$variant->product->name} không còn kinh doanh.");
                    }
                    if ($lockedVariant->stock < $cart->quantity) {
                        throw new \Exception("Sản phẩm {$variant->product->name} chỉ còn {$lockedVariant->stock} sản phẩm trong kho.");
                    }

                    $stockValidation[] = [
                        'variant_id' => $lockedVariant->id,
                        'required_quantity' => $cart->quantity,
                    ];
                    $itemTotal = $lockedVariant->price * $cart->quantity;
                    $subTotal += $itemTotal;
                    $orderItemsData[] = [
                        'product_variant_id' => $lockedVariant->id,
                        'quantity' => $cart->quantity,
                        'price' => $lockedVariant->price
                    ];
                    $cartItemsToDelete[] = $cart->id;
                }
            }

            // Xử lý voucher (common logic)
            $discountAmount = 0;
            $discountId = null;
            if ($request->voucher_code) {
                $voucher = Discount::where('code', $request->voucher_code)
                    ->where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->first();

        if ($voucher) {
                    if ($voucher->min_order_value && $subTotal < $voucher->min_order_value) {
                        return response()->json([
                            'success' => false,
                            'message' => "Đơn hàng phải từ " . number_format($voucher->min_order_value, 0, ',', '.') . "₫ để áp dụng voucher này!",
                            'error_type' => 'voucher_invalid'
                        ], 422);
                    }
                    if ($voucher->discount_type === 'percentage') {
                        $discountAmount = $subTotal * ($voucher->discount_value / 100);
                        if ($voucher->max_discount_value && $discountAmount > $voucher->max_discount_value) {
                            $discountAmount = $voucher->max_discount_value;
                        }
                    } else {
                        $discountAmount = $voucher->discount_value;
                    }
                    $discountId = $voucher->id;
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => "Mã voucher không hợp lệ hoặc đã hết hạn.",
                        'error_type' => 'voucher_invalid'
                    ], 422);
                }
            }

            $finalTotal = max(0, $subTotal - $discountAmount);

            // Prepare common order data
            $orderData = $request->only(['fullname', 'email', 'phone', 'address', 'payment_method']);

            // Nếu thanh toán VNPay, lưu thông tin vào session và chuyển hướng
            if ($request->payment_method === 'VNPay') {
                session([
                    'pending_order' => [
                        'user_id' => $user->id,
                        'cart_items_to_delete' => $cartItemsToDelete,
                        'order_data' => array_merge($orderData, [
                            'discount_id' => $discountId,
                            'discount_amount' => $discountAmount,
                            'total_price' => $finalTotal
                        ]),
                        'order_items' => $orderItemsData,
                        'stock_validation' => $stockValidation
                    ]
                ]);

                DB::commit();

                $vnpayUrl = $this->createVnpayPaymentUrl($finalTotal);
                return response()->json([
                    'success' => true,
                    'redirect_url' => $vnpayUrl
                ]);
            }

            // Nếu COD, tạo đơn hàng ngay
            $order = $this->createOrder(
                $user->id,
                $orderData,
                $discountId,
                $discountAmount,
                $finalTotal,
                $orderItemsData
            );

            // Cập nhật stock
            foreach ($stockValidation as $stockInfo) {
                $variant = ProductVariant::find($stockInfo['variant_id']);
                if ($variant) {
                    $variant->stock -= $stockInfo['required_quantity'];
                    $variant->save();
                }
            }

            // Xóa items khỏi giỏ hàng (only for cart checkout)
            if (!$isBuyNow && !empty($cartItemsToDelete)) {
                Cart::whereIn('id', $cartItemsToDelete)->delete();
            }

            // Clear session data
            session()->forget(['checkout_items', 'is_buy_now', 'buy_now_direct_item']);

            DB::commit();

            return response()->json([
                'success' => true,
                'redirect_url' => route('customer.order.success', ['order' => $order->id])
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Checkout error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => $e->getMessage() ?: 'Có lỗi xảy ra khi xử lý đơn hàng. Vui lòng thử lại!',
            ], 500);
        }
    }

    private function createOrder($userId, $data, $discountId, $discountAmount, $totalPrice, $orderItems)
    {
        $order = Order::create([
            'order_code' => 'ORD' . str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'user_id' => $userId,
            'discount_id' => $discountId,
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'total_price' => $totalPrice,
            'discount_amount' => $discountAmount,
            'status' => 'pending',
            'payment_method' => $data['payment_method'],
            'payment_status' => $data['payment_method'] === 'COD' ? 'pending' : 'failed'
        ]);


        // Tạo order items
        foreach ($orderItems as $item) {
            $variant = ProductVariant::with('product')->find($item['product_variant_id']);

            OrderItem::create([
                'order_id' => $order->id,
                'product_variant_id' => $item['product_variant_id'],
                'name' => $variant->product->name,
                'image' => $variant->image ?? $variant->product->image,
                'color' => $variant->color,
                'storage' => $variant->storage,
                'quantity' => $item['quantity'],
                'price' => $item['price'],

            ]);
        }

        return $order;
    }

    public function vnpayCallback(Request $request)
    {
        $vnp_HashSecret = env('VNPAY_HASH_SECRET');
        $vnp_SecureHash = $request->input('vnp_SecureHash');
        $inputData = $request->except('vnp_SecureHash');

        ksort($inputData);
        $hashdata = http_build_query($inputData);
        $secureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);

        if ($secureHash === $vnp_SecureHash) {
            $vnp_ResponseCode = $request->input('vnp_ResponseCode');
            $pendingOrder = session('pending_order');

            if (!$pendingOrder) {
                return redirect()->route('customer.cart')
                    ->with('error', 'Không tìm thấy thông tin đơn hàng. Vui lòng thử lại.');
            }

            try {
                DB::beginTransaction();

                // Kiểm tra lại stock
                foreach ($pendingOrder['stock_validation'] as $stock) {
                    $variant = ProductVariant::lockForUpdate()->find($stock['variant_id']);
                    if (!$variant || $variant->stock < $stock['required_quantity']) {
                        throw new \Exception('Số lượng sản phẩm trong kho đã thay đổi. Vui lòng kiểm tra lại giỏ hàng.');
                    }
                }

                if ($vnp_ResponseCode == '00') {
                    // Thanh toán thành công
                    $order = $this->createOrder(
                        $pendingOrder['user_id'],
                        $pendingOrder['order_data'],
                        $pendingOrder['order_data']['discount_id'],
                        $pendingOrder['order_data']['discount_amount'],
                        $pendingOrder['order_data']['total_price'],
                        $pendingOrder['order_items']
                    );

                    // Cập nhật trạng thái thanh toán
                    $order->payment_status = 'paid';
                    $order->save();

                    // Cập nhật stock
                    foreach ($pendingOrder['stock_validation'] as $stock) {
                        $variant = ProductVariant::find($stock['variant_id']);
                        $variant->stock -= $stock['required_quantity'];
                        $variant->save();
                    }

                    // Xóa cart items
                    Cart::whereIn('id', $pendingOrder['cart_items_to_delete'])->delete();

                    DB::commit();
                    session()->forget('pending_order');

                    return redirect()->route('customer.order.success', ['order' => $order->id])
                        ->with('success', 'Đơn hàng đã được thanh toán thành công.');
        } else {
                    DB::rollBack();
            return redirect()->route('customer.cart')
                        ->with('error', 'Thanh toán thất bại. Vui lòng thử lại.');
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('VNPay callback error: ' . $e->getMessage());
                return redirect()->route('customer.cart')
                    ->with('error', $e->getMessage());
            }
        } else {
            return redirect()->route('customer.cart')
                ->with('error', 'Chữ ký không hợp lệ. Vui lòng thử lại.');
        }
    }

    public function post_detail(string $id)
    {
        $post = Post::findOrFail($id);
        $post_detail = collect(); // Assign an empty collection or handle differently

        return view('customer.post_detail', compact('post', 'post_detail'));
    }

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $productImages = $product->images ?? collect();
        return view('customer.product_detail', compact('product', 'productImages'));
    }

    public function getProductImages(Request $request)
    {
        $productId = $request->query('product_id');
        $images = ProductImage::where('product_id', $productId)
            ->pluck('mini_images');
        return response()->json([
            'success' => true,
            'images' => $images,
        ]);
    }


    public function proceedToCheckout(Request $request)
    {
        $user = Auth::user();
        $buyNowItem = session('buy_now_direct_item');
        $carts = collect(); // Initialize as empty collection
        $subTotal = 0;
        $selectedCartIds = []; // Keep track even if using buy now

        if ($buyNowItem) {
            // --- Handle Buy Now Direct --- 
            $variant = ProductVariant::with('product.category')->find($buyNowItem['variant_id']);
            if ($variant && $variant->status === 'active' && $variant->stock >= $buyNowItem['quantity']) {
                // Create a pseudo cart item structure for the view
                $pseudoCartItem = new \stdClass(); // Use stdClass or a temporary Cart-like object
                $pseudoCartItem->id = 'buy_now_' . $variant->id; // Unique ID for the view
                $pseudoCartItem->user_id = $user->id;
                $pseudoCartItem->product_variant_id = $variant->id;
                $pseudoCartItem->quantity = $buyNowItem['quantity'];
                $pseudoCartItem->product_variant = $variant; // Attach the loaded variant relationship
                $pseudoCartItem->is_buy_now = true; // Flag for the view/JS if needed

                $carts->push($pseudoCartItem);
                $subTotal = $variant->price * $buyNowItem['quantity'];
                $selectedCartIds = ['buy_now_' . $variant->id]; // Use the pseudo ID

                // Clear any previous cart selection if proceeding with buy now
                session()->forget('selectedCartIds'); // Old key, might be redundant now

                // Store variant_id and quantity for the buy now item
                $checkoutItem = [
                    'variant_id' => $variant->id,
                    'quantity' => $buyNowItem['quantity'] // Get quantity from the original session item
                ];
                session(['checkout_items' => [$checkoutItem], 'is_buy_now' => true]); // Store as array containing the item object
                session()->forget('buy_now_direct_item'); // Clean up the temporary session

            } else {
                // Invalid variant or stock issue, redirect back with error
                session()->forget('buy_now_direct_item'); // Clear invalid item
                return redirect()->route('customer.index')->with('error', 'Sản phẩm bạn muốn mua ngay không hợp lệ hoặc đã hết hàng.');
            }
            // --- End Handle Buy Now Direct ---

        } else {
            // --- Handle Checkout from Cart --- 
        $request->validate([
                'selected_items' => 'required|array|min:1',
                'selected_items.*' => 'exists:carts,id', // Validate actual cart IDs
            ]);
            $selectedCartIdsInput = $request->input('selected_items', []);
            // Ensure selectedCartIdsInput is an array
            if (!is_array($selectedCartIdsInput)) {
                // Attempt to decode if it's a JSON string (e.g., from JS fetch)
                $decoded = json_decode($selectedCartIdsInput, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $selectedCartIds = array_map('intval', $decoded);
                } else {
                    // Fallback: try splitting by comma if it's a simple string
                    $selectedCartIds = array_map('intval', explode(',', $selectedCartIdsInput));
                }
            } else {
                $selectedCartIds = array_map('intval', $selectedCartIdsInput);
            }

            if (empty($selectedCartIds)) {
                return redirect()->back()->with('error', 'Vui lòng chọn ít nhất một sản phẩm để thanh toán');
            }

        $carts = Cart::where('user_id', $user->id)
            ->whereIn('id', $selectedCartIds)
            ->with('product_variant.product.category')
            ->get();

        if ($carts->isEmpty()) {
                return redirect()->back()->with('error', 'Không tìm thấy sản phẩm đã chọn trong giỏ hàng của bạn.');
        }

            // Recalculate subTotal based on selected cart items & check stock again (important)
        $subTotal = 0;
        foreach ($carts as $cart) {
                if ($cart->product_variant->stock < $cart->quantity || $cart->product_variant->status !== 'active') {
                    return redirect()->route('customer.cart')->with('error', "Sản phẩm '{$cart->product_variant->product->name}' ({$cart->product_variant->color} - {$cart->product_variant->storage}) không đủ số lượng hoặc đã ngừng kinh doanh. Vui lòng kiểm tra lại giỏ hàng.");
                }
            $subTotal += $cart->product_variant->price * $cart->quantity;
            }
            // --- End Handle Checkout from Cart ---
        }

        // Get active vouchers (common for both flows)
        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->get();

        // No need to pre-validate voucher code here, let checkout page handle it

        // Store selected IDs (real or pseudo) in session for the final checkout step
        // session(['checkout_items' => $selectedCartIds, 'is_buy_now' => !!$buyNowItem]); // REMOVE/COMMENT OUT - This overwrites correct data for buy now

        return view('customer.checkout', compact('carts', 'subTotal', 'activeVouchers', 'selectedCartIds'));
    }

    // Kiểm tra trạng thái sản phẩm trong giỏ hàng
    public function checkProductStatus($cartId)
    {
        try {
            $cart = Cart::with(['product_variant.product.category'])->findOrFail($cartId);
            $variant = $cart->product_variant;
            $product = $variant->product;

            // Kiểm tra trạng thái sản phẩm
            if (!$product || $product->status !== 'active') {
                return response()->json([
                    'available' => false,
                    'message' => 'Sản phẩm không còn kinh doanh.',
                    'disable_checkbox' => true
                ]);
            }

            // Kiểm tra variant
            if (!$variant || $variant->status !== 'active') {
                return response()->json([
                    'available' => false,
                    'message' => 'Phiên bản này không còn kinh doanh.',
                    'disable_checkbox' => true
                ]);
            }

            // Kiểm tra stock
            $isStockChanged = false;
            $message = '';

            if ($variant->stock <= 0) {
                return response()->json([
                    'available' => false,
                    'message' => 'Sản phẩm đã hết hàng.',
                    'disable_checkbox' => true,
                    'stock' => 0
                ]);
            }

            if ($variant->stock < $cart->quantity) {
                $overAmount = $cart->quantity - $variant->stock;
                $message = "Số lượng vượt quá {$overAmount} sản phẩm. Bạn chỉ có thể đặt tối đa {$variant->stock} sản phẩm.";
                $isStockChanged = true;
            }

            return response()->json([
                'available' => true,
                'stock' => $variant->stock,
                'price' => $variant->price,
                'disable_checkbox' => $isStockChanged,
                'stock_changed' => $isStockChanged,
                'message' => $message,
                'brand' => $product->category->name,
                'max_quantity' => $variant->stock
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'available' => false,
                'message' => 'Có lỗi xảy ra khi kiểm tra trạng thái sản phẩm.',
                'disable_checkbox' => true
            ]);
        }
    }

    // Kiểm tra số lượng tồn kho
    public function checkStock(Request $request, $cartId)
    {
        try {
            $cart = Cart::findOrFail($cartId);
            $requestedQuantity = $request->input('quantity');

            // Kiểm tra số lượng tồn kho
            if ($cart->product->stock < $requestedQuantity) {
                return response()->json([
                    'available' => false,
                    'message' => 'Số lượng sản phẩm trong kho không đủ.',
                    'max_quantity' => $cart->product->stock
                ]);
            }

            // Cập nhật số lượng trong giỏ hàng
            $cart->quantity = $requestedQuantity;
            $cart->save();

            return response()->json([
                'available' => true,
                'message' => 'Cập nhật số lượng thành công.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'available' => false,
                'message' => 'Có lỗi xảy ra khi kiểm tra số lượng tồn kho.'
            ]);
        }
    }

    /**
     * Handle Buy Now request directly from product detail page and prepare for checkout.
     */
    public function proceedDirectlyToCheckout(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'color' => 'required|string',
            'storage' => 'required|string',
            'quantity' => 'required|integer|min:1|max:5',
        ]);

        $product_variant = ProductVariant::where('product_id', $data['product_id'])
            ->where('color', $data['color'])
            ->where('storage', $data['storage'])
            ->first();

        // Check if variant exists and is active
        if (!$product_variant || $product_variant->status !== 'active') {
            // Return JSON error
            // return redirect()->back()->with('error', 'Phiên bản sản phẩm này không tồn tại hoặc đã ngừng kinh doanh.')->withInput();
            return response()->json(['success' => false, 'message' => 'Phiên bản sản phẩm này không tồn tại hoặc đã ngừng kinh doanh.'], 404);
        }

        // Check stock
        if ($product_variant->stock < $data['quantity']) {
            // Return JSON error
            // return redirect()->back()->with('error', "Rất tiếc, chỉ còn {$product_variant->stock} sản phẩm. Vui lòng chọn số lượng ít hơn.")->withInput();
            return response()->json(['success' => false, 'message' => "Rất tiếc, chỉ còn {$product_variant->stock} sản phẩm. Vui lòng chọn số lượng ít hơn."], 400);
        }

        // Store item details in session for checkout page (use a specific key)
        session(['buy_now_direct_item' => [
            'variant_id' => $product_variant->id,
            'quantity' => $data['quantity'],
        ]]);

        // Forget regular cart selection if proceeding with buy now direct
        session()->forget('selectedCartIds'); // Ensure checkout page uses buy_now_direct_item

        // Return JSON success with redirect URL
        // return redirect()->route('customer.cart.proceed-to-checkout'); // Use your checkout page route
        return response()->json([
            'success' => true,
            'redirect_url' => route('customer.cart.proceed-to-checkout') // Generate the redirect URL
        ]);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $color = Color::all();
        $storage = Storage::all();

        // Lấy tham số lọc từ request
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);
        $colorId = $request->input('color');
        $storageId = $request->input('storage');

        // Query sản phẩm với điều kiện lọc
        $productQuery = Product::where('name', 'LIKE', "%$query%")
            ->where('status', 'active')
            ->with([
                'variants' => function ($query) {
                    $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
                        ->where('status', 'active')
                        ->orderBy('price', 'asc');
                },
                'ratings'
            ]);

        // Thêm điều kiện lọc theo khoảng giá
        if ($minPrice > 0 || $maxPrice < 50000000 || $colorId || $storageId) {
            $productQuery->whereHas('variants', function ($q) use ($minPrice, $maxPrice, $colorId, $storageId) {
                $q->whereBetween('price', [$minPrice, $maxPrice]);

                if ($colorId) {
                    $q->where('color', $colorId);
                }
        
                if ($storageId) {
                    $q->where('storage', $storageId);
                }
            });
        }

        // Lấy danh sách sản phẩm đã lọc
        $products = $productQuery->orderBy('priority', 'desc')
            ->paginate(15)
            ->through(function ($product) {
                $firstVariant = $product->variants->first();

                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;

                // Số lượng đã bán
                $product->sold_count = $product->orderItems()->sum('quantity');

                // Màu sắc
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();

                // Dung lượng
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();

                // Đánh giá
                $ratings = $product->ratings;
                if ($ratings->isNotEmpty()) {
                    $product->average_rating = round($ratings->avg('rating'), 1);
                    $product->total_ratings = $ratings->count();
                } else {
                    $product->average_rating = 0;
                    $product->total_ratings = 0;
                }

                return $product;
            });

        return view('customer.search', compact('products', 'query', 'color', 'storage'));
    }

    public function orderDetail($id)
    {
        $order = Order::with(['orderItems.productVariant.product'])
            ->where('user_id', auth()->id())
            ->findOrFail($id);

        return view('customer.order_detail', compact('order'));
    }

    public function cancelOrder(Request $request, $id)
    {
        $request->validate([
            'cancel_reason' => 'required|string|max:500'
        ]);

        // Load đơn hàng với relationship orderItems
        $order = Order::with('orderItems')
            ->where('user_id', auth()->id())
            ->findOrFail($id);

        // Kiểm tra điều kiện hủy đơn hàng
        if (
            in_array($order->status, ['pending', 'processing']) &&
            $order->payment_status === 'pending' &&
            strtolower($order->payment_method) !== 'vnpay'
        ) {
            DB::beginTransaction();
            try {
                if($order->status === 'cancelled') {
                    return back()->with('error', 'Đơn hàng đã được cập nhật trước đó.');
                }
                // Cập nhật trạng thái đơn hàng
                $order->status = 'cancelled';
                $order->cancel_reason = $request->cancel_reason;
                $order->save();

                // Khôi phục stock cho các biến thể sản phẩm
                foreach ($order->orderItems as $item) {
                    $variant = ProductVariant::find($item->product_variant_id);
                    if ($variant) {
                        $variant->stock += $item->quantity;
                        $variant->save();
                    }
                }

                DB::commit();
                return back()->with('success', 'Đơn hàng đã được hủy thành công.');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Error cancelling order: ' . $e->getMessage());
                return back()->with('error', 'Có lỗi xảy ra khi hủy đơn hàng, có vẻ như đơn hàng đã được hủy trước đó ! ' . $e->getMessage());
            }
        }
        return redirect()->back()->with('cancel_success', 'Đơn hàng đã được hủy thành công.');
    }

    public function profile()
    {
        return view('customer.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $user = auth()->user();
        $user->update($request->only(['name', 'email', 'phone', 'address']));

        return redirect()->route('customer.profile')
            ->with('success', 'Thông tin cá nhân đã được cập nhật thành công.');
    }

    public function changePassword()
    {
        return view('customer.change_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'new_password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'new_password_confirmation' => 'required|same:new_password',
        ], [
            'new_password.regex' => 'Mật khẩu mới phải chứa ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt.',
        ]);

        $user = auth()->user();
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('customer.change_password')
            ->with('success', 'Mật khẩu đã được thay đổi thành công.');
    }

    public function orderHistory(Request $request)
    {
        $query = Order::where('user_id', auth()->id());

        // Lọc theo trạng thái đơn hàng
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        if ($request->has('from_date') && $request->has('to_date')) {
            $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        $orders = $query->orderBy('created_at', 'desc')->paginate(5);

        return view('customer.history', compact('orders'));
    }

    public function confirmOrder($id)
    {
        try {
            $order = Order::where('user_id', auth()->id())->findOrFail($id);

            // Kiểm tra quyền xác nhận đơn hàng
            if ($order->user_id !== auth()->id()) {
                return back()->with('error', 'Bạn không có quyền xác nhận đơn hàng này.');
            }

            // Kiểm tra trạng thái đơn hàng
            if ($order->status !== 'delivered') {
                return back()->with('error', 'Chỉ có thể xác nhận đơn hàng đã được giao.');
            }
            // Cập nhật trạng thái đơn hàng
            $order->status = 'completed';
            $order->save();

            // Tăng số lượng sold cho từng sản phẩm đã mua
            foreach ($order->orderItems as $item) {
                $variant = ProductVariant::find($item->product_variant_id);
                
                if ($variant) {
                    $product = $variant->product;

                    if ($product) {
                        $product->sold += $item->quantity;
                        $product->save();
                    }
                }
            }
            return back()->with('success', 'Xác nhận đơn hàng thành công!');
        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra khi xác nhận đơn hàng.');
        }
    }
}
