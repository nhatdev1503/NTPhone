<?php

namespace App\Http\Controllers\customer;

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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class CustomerController extends Controller
{
    public function index()
    {
        $banner = \App\Models\Banner::where('status', 'active')->get();
        $categories = \App\Models\Category::with('products')->where('status', 'active')->take(6)->get();

        $featuredProducts = Product::where('status', 'active')
                            ->orderBy('priority', 'desc')
                            ->orderBy('created_at', 'desc')
                            ->limit(8)
                            ->get();

        $bestSellingProducts = Product::orderBy('id', 'desc')
                            ->limit(8)
                            ->get();

        return view('customer.index', compact('banner', 'categories', 'featuredProducts', 'bestSellingProducts'));
    }

    public function categories(string $id)
    {
        $category = Category::findOrFail($id);
        $products = Product::select('products.*', 'product_variants.origin_price', 'product_variants.price')
                    ->leftJoin('product_variants', function ($join) {
                        $join->on('products.id', '=', 'product_variants.product_id')
                            ->whereRaw('product_variants.price = (SELECT MIN(price) FROM product_variants WHERE product_variants.product_id = products.id)');
                    })
                    ->where('products.category_id', $id)
                    ->where('products.status', 'active')
                    ->orderBy('products.priority', 'desc')
                    ->paginate(12);

        return view('customer.categories', compact('category', 'products'));
    }
    public function filterProducts(Request $request, String $id)
    {
        $category = Category::findOrFail($id);

        $productsQuery = Product::select('products.*', 'product_variants.origin_price', 'product_variants.price')
            ->leftJoin('product_variants', function ($join) {
                $join->on('products.id', '=', 'product_variants.product_id')
                    ->whereRaw('product_variants.price = (SELECT MIN(price) FROM product_variants WHERE product_variants.product_id = products.id)');
            })
            ->where('products.category_id', $id)
            ->where('products.status', 'active');

        if ($request->has('filter') && $request->filter != '') {
            $priceRange = explode('-', $request->filter);
            if (count($priceRange) == 2) {
                $minPrice = (int) $priceRange[0];
                $maxPrice = (int) $priceRange[1];
                $productsQuery->whereBetween('product_variants.price', [$minPrice, $maxPrice]);
            }
        }

        $products = $productsQuery->orderBy('products.priority', 'desc')->paginate(12);

        return view('customer.filterByCategory', compact('category', 'products'));
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
        $categoryId = $product->category_id;  
        $products = Product::orderBy('priority', 'desc')->take(6)->get();
        $hasPurchased = DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.user_id', auth()->id())
            ->where('order_items.product_variant_id', $id)
            ->exists();

        $ratings = Rating::where('product_id', $id)
            ->join('users', 'ratings.user_id', '=', 'users.id')
            ->select('users.fullname', 'ratings.review', 'ratings.rating', 'ratings.created_at')
            ->get();
    
        // Lấy danh sách biến thể
        $variants = $product->variants ?? collect();
    
        // Nhóm các biến thể theo màu sắc và giữ lại các thông tin bổ sung như giá
        $colors = $variants->groupBy('color')->map(function ($group) {
            return [
                'color' => $group->first()->color,
                'variants' => $group,  // Tất cả các biến thể với màu sắc này
                'prices' => $group->pluck('price')->unique() // Lấy các giá khác nhau
            ];
        });
    
        // Lấy các biến thể bộ nhớ (storage) duy nhất
        $storages = $variants->unique('storage');
    
        // Lấy sản phẩm liên quan cùng danh mục
        $relatedProducts = Product::where('category_id', $product->category_id)
        ->where('id', '!=', $id)
        ->limit(6)
        ->get();

        $productImages = $product->images ?? collect();

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
            'hasPurchased'
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
            ->where('status', 'active')
            ->first();

        if ($variant) {
            return response()->json([
                'success' => true,
                'price' => $variant->price,
                'origin_price' => $variant->origin_price ?? null
            ]);
        } else {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy giá'], 404);
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

    public function postCart(Request $request)
    {
        $data = $request->all();
        $product_variant_id = ProductVariant::where('product_id', $data['product_id'])
            ->where('color', $data['color'])
            ->where('storage', $data['storage'])
            ->value('id');

        if (!$product_variant_id) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm với biến thể đã chọn.');
        }

        $user = Auth::user();
        
        // Tìm sản phẩm đã tồn tại trong giỏ hàng
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_variant_id', $product_variant_id)
            ->first();

        if ($cartItem) {
            // Nếu số lượng hiện tại + 1 vượt quá 5, không cho phép thêm
            if ($cartItem->quantity >= 5) {
                return redirect()->back()->with('error', 'Số lượng sản phẩm tối đa là 5.');
            }
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Tạo mới nếu chưa có trong giỏ hàng
            Cart::create([
                'user_id' => $user->id,
                'product_variant_id' => $product_variant_id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('customer.cart')->with('success', 'Đã thêm sản phẩm vào giỏ hàng.');
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
                ->where(function($query) use ($request) {
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
            'message' => 'Đã cập nhật phiên bản sản phẩm thành công!',
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
                'message' => 'Sản phẩm đã được xóa khỏi giỏ hàng.'
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

            // Validate input
            $request->validate([
                'selected_items' => 'required|array',
                'selected_items.*' => 'exists:carts,id',
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'payment_method' => 'required|in:COD,VNPay',
                'voucher_code' => 'nullable|string',
                'discount_amount' => 'nullable|numeric|min:0',
                'agree' => 'required|accepted'
            ]);

            $user = Auth::user();
            
            // Kiểm tra selected_items có phải array không
            if (!is_array($request->selected_items)) {
                $selectedItems = explode(',', $request->selected_items);
            } else {
                $selectedItems = $request->selected_items;
            }

            // Lấy cart items
            $cartItems = Cart::whereIn('id', $selectedItems)
                ->where('user_id', $user->id)
                ->with(['product_variant.product.category'])
                ->get();

            if ($cartItems->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy sản phẩm nào trong giỏ hàng.'
                ], 422);
            }

            // Tính tổng tiền và kiểm tra stock
            $subTotal = 0;
            $orderItems = [];
            $stockValidation = [];

            foreach ($cartItems as $item) {
                $variant = $item->product_variant;
                $product = $variant->product;
                
                // Khóa bản ghi để tránh race condition
                $lockedVariant = ProductVariant::lockForUpdate()->find($variant->id);
                
                if (!$lockedVariant || $lockedVariant->status !== 'active') {
                    DB::rollBack();
                    return response()->json([
                        'success' => false,
                        'message' => "Phiên bản của sản phẩm {$product->name} không còn kinh doanh."
                    ], 422);
                }

                if ($lockedVariant->stock < $item->quantity) {
                    DB::rollBack();
                    return response()->json([
                        'success' => false,
                        'message' => "Sản phẩm {$product->name} chỉ còn {$lockedVariant->stock} sản phẩm trong kho."
                    ], 422);
                }

                // Lưu thông tin để validate stock
                $stockValidation[] = [
                    'variant_id' => $lockedVariant->id,
                    'required_quantity' => $item->quantity,
                    'current_stock' => $lockedVariant->stock
                ];

                // Tính tiền cho item
                $itemTotal = $lockedVariant->price * $item->quantity;
                $subTotal += $itemTotal;

                // Thêm vào danh sách order items
                $orderItems[] = [
                    'product_variant_id' => $lockedVariant->id,
                    'quantity' => $item->quantity,
                    'price' => $lockedVariant->price
                ];
            }

            // Xử lý voucher
            $discountAmount = 0;
            $discountId = null;
            if ($request->voucher_code) {
                $voucher = Discount::where('code', $request->voucher_code)
                    ->where('start_date', '<=', now())
                    ->where('expiration_date', '>=', now())
                    ->first();

                if ($voucher) {
                    if ($voucher->min_order_value && $subTotal < $voucher->min_order_value) {
                        DB::rollBack();
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
                }
            }

            $finalTotal = $subTotal - $discountAmount;

            // Nếu thanh toán VNPay, lưu thông tin vào session và chuyển hướng
            if ($request->payment_method === 'VNPay') {
                // Lưu thông tin đơn hàng vào session
                session([
                    'pending_order' => [
                        'user_id' => $user->id,
                        'cart_items' => $selectedItems,
                        'order_data' => [
                            'fullname' => $request->fullname,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'address' => $request->address,
                            'discount_id' => $discountId,
                            'discount_amount' => $discountAmount,
                            'total_price' => $finalTotal,
                            'payment_method' => 'VNPay'
                        ],
                        'order_items' => $orderItems,
                        'stock_validation' => $stockValidation
                    ]
                ]);

                DB::commit();

                // Tạo URL thanh toán VNPay
                $vnpayUrl = $this->createVnpayPaymentUrl($finalTotal);
                return response()->json([
                    'success' => true,
                    'redirect_url' => $vnpayUrl
                ]);
            }

            // Nếu COD, tạo đơn hàng ngay
            $order = $this->createOrder(
                $user->id,
                $request->all(),
                $discountId,
                $discountAmount,
                $finalTotal,
                $orderItems
            );

            // Cập nhật stock
            foreach ($stockValidation as $stock) {
                $variant = ProductVariant::find($stock['variant_id']);
                $variant->stock -= $stock['required_quantity'];
                $variant->save();
            }

            // Xóa items khỏi giỏ hàng
            Cart::whereIn('id', $selectedItems)->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'redirect_url' => route('customer.order.success', ['order' => $order->id])
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Checkout error: ' . $e->getMessage());
            \Log::error($e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi xử lý đơn hàng. Vui lòng thử lại!',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    private function createOrder($userId, $data, $discountId, $discountAmount, $totalPrice, $orderItems)
    {
        $order = Order::create([
            'order_code' => 'ORD' . time(),
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
            OrderItem::create([
                'order_id' => $order->id,
                'product_variant_id' => $item['product_variant_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
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
                    Cart::whereIn('id', $pendingOrder['cart_items'])->delete();

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
                \Log::error('VNPay callback error: ' . $e->getMessage());
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
        $post_detail = PostImage::select('posts.*', 'post_images.*')
            ->join('posts', 'post_images.post_id', '=', 'posts.id')
            ->where('posts.id', $id)
            ->orderBy('post_images.position', 'asc')
            ->get();
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
        $request->validate([
            'selected_items' => 'required|array|min:1'
        ]);

        $user = Auth::user();
        $selectedCartIds = array_map('intval', $request->input('selected_items', []));
        $carts = Cart::where('user_id', $user->id)
            ->whereIn('id', $selectedCartIds)
            ->with('product_variant.product.category')
            ->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Vui lòng chọn ít nhất một sản phẩm để thanh toán');
        }

        // Calculate total
        $subTotal = 0;
        foreach ($carts as $cart) {
            $subTotal += $cart->product_variant->price * $cart->quantity;
        }

        // Get active vouchers
        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->get();

        // If there's a voucher code in the request, validate it
        if ($request->has('voucher_code')) {
            $voucher = $activeVouchers->first(function($v) use ($request) {
                return $v->code === $request->voucher_code;
            });

            if ($voucher) {
                if ($voucher->min_order_value && $subTotal < $voucher->min_order_value) {
                    return response()->json([
                        'message' => "Đơn hàng phải từ " . number_format($voucher->min_order_value, 0, ',', '.') . "₫ để áp dụng voucher này!"
                    ], 422);
                }
            }
        }

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

    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', "%$query%")->paginate(12);

        return view('customer.search', compact('products', 'query'));
    }
}
