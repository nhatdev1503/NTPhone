<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
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

class GuestController extends Controller
{
    public function index()
    {
        $banner = \App\Models\Banner::where('status', 'active')->first();
        $categories = \App\Models\Category::with(['products'])
            ->withSum('products as total_sold', 'sold') // <- Tính tổng sold cho products
            ->where('status', 'active')
            ->orderByDesc('total_sold') // <- Sắp theo tổng sold giảm dần
            ->take(10)
            ->get();
        $latestNews = News::latest('published_at')->take(5)->get();

        // Lấy sản phẩm nổi bật với đầy đủ thông tin
        $featuredProducts = Product::where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->with(['variants' => function ($query) {
                $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
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

                // Xử lý giá và giảm giá
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;

                // Tính số lượng đã bán
                $product->sold_count = $product->orderItems()->sum('quantity');

                // Lấy các màu sắc độc nhất
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();

                // Lấy các dung lượng độc nhất
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();

                // Tính điểm đánh giá trung bình
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

        // Lấy sản phẩm mới nhất với đầy đủ thông tin
        $bestSellingProducts = Product::where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
            })
            ->with(['variants' => function ($query) {
                $query->select('product_id', 'price', 'origin_price', 'color', 'hax_code', 'storage')
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

                // Xử lý giá và giảm giá
                if ($firstVariant && $firstVariant->origin_price > 0 && $firstVariant->price < $firstVariant->origin_price) {
                    $product->discount_percentage = round((($firstVariant->origin_price - $firstVariant->price) / $firstVariant->origin_price) * 100);
                    $product->origin_price = $firstVariant->origin_price;
                } else {
                    $product->discount_percentage = 0;
                    $product->origin_price = $firstVariant ? $firstVariant->price : 0;
                }
                $product->sale_price = $firstVariant ? $firstVariant->price : 0;

                // Tính số lượng đã bán
                $product->sold_count = $product->orderItems()->sum('quantity');

                // Lấy các màu sắc độc nhất
                $product->available_colors = $product->variants
                    ->unique('color')
                    ->map(function ($variant) {
                        return [
                            'name' => $variant->color,
                            'hex_code' => $variant->hax_code
                        ];
                    })->values();

                // Lấy các dung lượng độc nhất
                $product->available_storages = $product->variants
                    ->pluck('storage')
                    ->unique()
                    ->values();

                // Tính điểm đánh giá trung bình
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

        return view('guest.index', compact('banner', 'categories', 'featuredProducts', 'bestSellingProducts', 'latestNews'));
    }

    public function categories(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        // Lấy tham số lọc từ request
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);

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
        if ($minPrice > 0 || $maxPrice < 50000000) {
            $query->whereHas('variants', function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('price', [$minPrice, $maxPrice]);
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
        return view('guest.categories', compact('category', 'products'));
    }

    public function filterByCategory(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);

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

        return view('guest.filterByCategory', compact('category', 'products'));
    }

    public function filter(Request $request)
    {
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);

        $query = Product::query();

        $query->whereBetween('sale_price', [$minPrice, $maxPrice]);

        $products = $query->paginate(15);

        return view('guest.filterByCategory', compact('products'));
    }

    public function warranty()
    {
        return view('guest.warranty');
    }


    public function contact()
    {
        return view('guest.contact');
    }

    public function product_detail($id)
    {
        $product = Product::with('variants', 'images')->findOrFail($id);
        if ($product->status != 'active' || $product->category->status != 'active') {
            return redirect()->route('guest.index')->with('error', 'Sản phẩm không tồn tại hoặc đã ngừng kinh doanh.');
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

        // Lấy sản phẩm liên quan
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
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

        // Lấy sản phẩm cho "Có thể bạn thích" (tương tự $relatedProducts, nhưng loại bỏ các sản phẩm đã xuất hiện)
        $relatedProductIds = $relatedProducts->pluck('id')->toArray(); // Lấy danh sách ID của sản phẩm liên quan
        $products = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->whereNotIn('id', $relatedProductIds) // Loại bỏ các sản phẩm đã xuất hiện trong $relatedProducts
            ->where('status', 'active')
            ->whereHas('category', function ($q) {
                $q->where('status', 'active');
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

        $productImages = $product->images ?? collect();

        $selectedColor = request('color');
        $selectedStorage = request('storage');
        $selectedVariant = $product->variants()
            ->where('color', $selectedColor)
            ->where('storage', $selectedStorage)
            ->first();

        return view('guest.product_detail', compact(
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

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $productImages = $product->images ?? collect();
        return view('guest.product_detail', compact('product', 'productImages'));
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

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lấy tham số lọc từ request
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 50000000);

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
        if ($minPrice > 0 || $maxPrice < 50000000) {
            $productQuery->whereHas('variants', function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('price', [$minPrice, $maxPrice]);
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

        return view('guest.search', compact('products', 'query'));
    }

    public function searchSuggestions(Request $request)
    {
        $query = $request->get('query');
        
        if (empty($query)) {
            // Return top viewed products if no query
            $products = Product::where('status', 'active')
                ->whereHas('category', function ($q) {
                    $q->where('status', 'active');
                })
                ->with(['variants' => function ($query) {
                    $query->where('status', 'active')
                        ->orderBy('price', 'asc');
                }])
                ->orderBy('view', 'desc')
                ->take(4)
                ->get();
        } else {
            // Search products based on query
            $products = Product::where('status', 'active')
                ->whereHas('category', function ($q) {
                    $q->where('status', 'active');
                })
                ->with(['variants' => function ($query) {
                    $query->where('status', 'active')
                        ->orderBy('price', 'asc');
                }])
                ->where('name', 'like', '%' . $query . '%')
                ->take(4)
                ->get();
        }

        $formattedProducts = $products->map(function ($product) {
            $variant = $product->variants->first();
            return [
                'id' => $product->id,
                'name' => $product->name,
                'image' => asset($product->image),
                'base_price' => $variant ? number_format($variant->origin_price) . '₫' : number_format($product->base_price) . '₫',
                'sale_price' => $variant ? number_format($variant->price) . '₫' : number_format($product->sale_price) . '₫',
                'url' => route('guest.product_detail', $product->id)
            ];
        });

        return response()->json($formattedProducts);
    }

}
