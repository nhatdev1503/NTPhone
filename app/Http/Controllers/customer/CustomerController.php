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
            'colors', // Truyền các màu sắc đã nhóm
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
        $carts = Cart::where('user_id', $user->id)
            ->with('product_variant.product.category')
            ->get();
        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->get();
        $voucherSession = session('voucher');
        return view('customer.shopcart', compact('carts', 'activeVouchers', 'voucherSession'));
    }
    public function buynow()
    {
        $user = Auth::user();
        $product_variant = ProductVariant::findOrFail(request('product_variant_id'));
        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->get();
        $voucherSession = session('voucher');
        return view('customer.buynow', compact('product_variant', 'activeVouchers', 'voucherSession'));
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
        $user = Auth::user();
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_variant_id', $product_variant_id)
            ->first();
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $user->id,
                'product_variant_id' => $product_variant_id,
                'quantity' => 1,
            ]);
        }
        return redirect()->route('customer.cart');
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
        $cart->update(['quantity' => $request->quantity]);
        return response()->json(['success' => true]);
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
                'message' => 'Bạn không có quyền chỉnh sửa giỏ hàng này.'
            ], 403);
        }

        $newVariant = ProductVariant::where('product_id', $cart->product_variant->product_id)
            ->where('color', $request->color)
            ->where('storage', $request->storage)
            ->where('status', 'active')
            ->first();

        if (!$newVariant) {
            return response()->json([
                'success' => false,
                'message' => 'Biến thể này không tồn tại hoặc không khả dụng.'
            ], 404);
        }

        $cart->update(['product_variant_id' => $newVariant->id]);

        return response()->json([
            'success' => true,
            'price' => $newVariant->price,
            'message' => 'Cập nhật biến thể thành công!'
        ]);
    }

    public function delete($id)
    {
        $cart = Cart::find($id);
        if ($cart && $cart->user_id == Auth::id()) {
            $cart->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm hoặc bạn không có quyền xóa'], 404);
    }

    private function createVnpayPaymentUrl($order, $final_total)
    {
        $vnp_TmnCode = env('VNPAY_TMN_CODE');
        $vnp_HashSecret = env('VNPAY_HASH_SECRET');
        $vnp_Url = env('VNPAY_URL');
        $vnp_Returnurl = route('customer.order.vnpay.callback');

        $vnp_TxnRef = $order->order_code;
        $vnp_Amount = $final_total * 100;
        $vnp_OrderInfo = "Thanh toan don hang {$order->order_code}";
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
        $request->validate([
            'fullname' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'payment_method' => 'required|in:COD,VNPay',
            'agree' => 'accepted',
            'selected_items' => 'required|array|min:1'
        ]);

        $user = Auth::user();
        $selectedCartIds = $request->input('selected_items', []);
        $carts = Cart::where('user_id', $user->id)
            ->whereIn('id', $selectedCartIds)
            ->with('product_variant.product')
            ->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Không có sản phẩm nào được chọn để đặt hàng');
        }

        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->product_variant->price * $cart->quantity;
        }

        $voucher = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->where('code', $request->voucher_code)
            ->first();
        $discount_amount = 0;

        if ($voucher) {
            if ($voucher->discount_type == 'fixed') {
                $discount_amount = $voucher->discount_value;
            } else { // percentage
                if ($voucher->min_order_value && $total < $voucher->min_order_value) {
                    return redirect()->back()->with('error', "Đơn hàng phải từ " . number_format($voucher->min_order_value, 0, ',', '.') . "₫ để áp dụng voucher này!");
                }
                $discount_amount = ($total * $voucher->discount_value) / 100;
                if ($voucher->max_discount_value && $discount_amount > $voucher->max_discount_value) {
                    $discount_amount = $voucher->max_discount_value;
                }
            }
        }

        $final_total = $total - $discount_amount;
        if ($final_total < 0) {
            $final_total = 0;
        }

        $order = Order::create([
            'order_code' => 'ORD' . time(),
            'user_id' => $user->id,
            'discount_id' => $voucher ? $voucher->id : null,
            'fullname' => $request->fullname,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'total_price' => $final_total,
            'discount_amount' => $discount_amount,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
            'status' => 'pending'
        ]);

        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_variant_id' => $cart->product_variant->id,
                'quantity' => $cart->quantity,
                'price' => $cart->product_variant->price,
            ]);
        }

        Cart::where('user_id', $user->id)->whereIn('id', $selectedCartIds)->delete();

        if ($request->payment_method === 'COD') {
            return redirect()->route('customer.order.success')
                ->with('success', 'Đơn hàng đã được đặt thành công. Vui lòng chờ giao hàng.');
        } else {
            $vnpayUrl = $this->createVnpayPaymentUrl($order, $final_total);
            return redirect($vnpayUrl);
        }
    }

    public function vnpayCallback(Request $request)
    {
        $vnp_HashSecret = "YV6GOFPUZ1PRR3IGGAJ08QMTSAOP3Z8V"; // Thay bằng khóa bí mật của bạn
        $vnp_SecureHash = $request->input('vnp_SecureHash');
        $inputData = $request->except('vnp_SecureHash');

        ksort($inputData);
        $hashdata = http_build_query($inputData);
        $secureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);

        $orderCode = $request->input('vnp_TxnRef');
        $order = Order::where('order_code', $orderCode)->first();

        if (!$order) {
            return redirect()->route('customer.cart')->with('error', 'Đơn hàng không tồn tại.');
        }

        if ($secureHash === $vnp_SecureHash && $request->input('vnp_ResponseCode') == '00') {
            $order->update([
                'payment_status' => 'paid',
                'status' => 'pending'
            ]);
            return redirect()->route('customer.order.success')
                ->with('success', 'Thanh toán VNPay thành công. Đơn hàng của bạn đang được xử lý.');
        } else {
            $order->update(['payment_status' => 'failed']);
            return redirect()->route('customer.cart')
                ->with('error', 'Thanh toán VNPay thất bại. Vui lòng thử lại.');
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
}
