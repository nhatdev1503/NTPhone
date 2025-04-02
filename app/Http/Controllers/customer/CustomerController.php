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

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $banners = \App\Models\Banner::where('status', 'active')->get();
        $categories = \App\Models\Category::with('products')->where('status', 'active')->take(6)->get();
        return view('customer.index', compact('banners', 'categories'));
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

        $groupedProducts = $products->chunk(4);

        return view('customer.danhmuc', compact('category', 'products', 'groupedProducts'));
    }
    public function warranty()
    {
        return view('customer.warranty');
    }

    // public function checkout(Request $request)
    // {
    //     $data = $request->validate([
    //         'product_variant_id' => 'required|integer|exists:product_variants,id',
    //         'action' => 'required|string',
    //     ]);

    //     // Lấy thông tin biến thể sản phẩm
    //     $productVariant = ProductVariant::find($data['product_variant_id']);

    //     // Kiểm tra hành động
    //     if ($data['action'] == 'buy_now') {
    //         // Thực hiện các hành động thanh toán ngay, ví dụ chuyển hướng đến trang thanh toán
    //         return redirect()->route('checkout.page', [
    //             'product_variant_id' => $productVariant->id
    //         ]);
    //     }


    //     // Hoặc xử lý thêm các logic khác nếu cần (thêm vào giỏ hàng)
    //     // Ví dụ: thêm sản phẩm vào giỏ hàng
    //     if ($data['action'] == 'add_to_cart') {
    //         $user = Auth::user();
    //         // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    //         $cartItem = Cart::where('user_id', $user->id)
    //                         ->where('product_variant_id', $productVariant->id)
    //                         ->first();

    //         if ($cartItem) {
    //             // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng lên
    //             $cartItem->quantity += 1;
    //             $cartItem->save();
    //         } else {
    //             // Nếu chưa có, thêm sản phẩm vào giỏ hàng mới
    //             Cart::create([
    //                 'user_id' => $user->id,
    //                 'product_variant_id' => $productVariant->id,
    //                 'quantity' => 1, // Giả sử số lượng mặc định là 1
    //             ]);
    //         }

    //         // Chuyển hướng về trang giỏ hàng
    //         return redirect()->route('cart');
    //     }

    //     // Xử lý các trường hợp khác nếu có
    // }

    public function contact()
    {
        return view('customer.contact');
    }
    public function product_detail($id)
    {
        // Lấy sản phẩm theo ID, nếu không có thì báo lỗi 404
        $product = Product::with('variants', 'images')->findOrFail($id);

        // Lấy danh sách biến thể (RAM, SSD, màu sắc)

        $variants = $product->variants ?? collect();

        // Lọc danh sách màu sắc duy nhất
        $colors = $variants->unique('color');

        // Lọc danh sách dung lượng duy nhất
        $storages = $variants->unique('storage');

        // Lấy sản phẩm liên quan cùng danh mục
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->limit(6)
            ->get();

        // Lấy danh sách ảnh từ bảng product_images
        $productImages = $product->images ?? collect();

        // Truyền dữ liệu vào view
        return view('customer.product_detail', compact('product', 'variants', 'colors', 'storages', 'relatedProducts', 'productImages'));
    }


    public function getPrice(Request $request)
    {
        $productId = $request->query('product_id');
        $storage = $request->query('storage');
        $color = $request->query('color');

        // Kiểm tra nếu thiếu tham số
        if (!$productId || !$storage || !$color) {
            return response()->json(['success' => false, 'message' => 'Thiếu thông tin cần thiết'], 400);
        }

        // Tìm biến thể theo product_id, storage và color
        $variant = Productvariant::where('product_id', $productId)
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

        // Lấy danh sách màu sắc có sẵn cho dung lượng được chọn
        $availableColors = ProductVariant::where('product_id', $productId)
            ->where('storage', $storage)
            ->pluck('color') // Lấy danh sách màu
            ->toArray();

        return response()->json(['success' => true, 'colors' => $availableColors]);
    }

    public function cart()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)
            ->with('product_variant.product.category')
            ->get();
        // Giả sử bạn có logic để lọc voucher
        $activeVouchers = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            // ->where('some_field', condition) // Bạn thêm điều kiện theo sản phẩm & user tại đây
            ->get();
        $voucherSession = session('voucher'); // voucher đã áp dụng (nếu có)
        return view('customer.giohang', compact('carts', 'activeVouchers', 'voucherSession'));
    }
    public function payment()
    {
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
    }
    public function postCart()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with('product_variant.product.category')->get();

        return view('customer.giohang', compact('carts'));
    }
    public function postPayment(Request $request)
    {
        $product_variant_id = ProductVariant::where('product_id', $request->product_id)
            ->where('color', $request->product_variant_color)
            ->where('storage', $request->product_variant_storage)
            ->value('id');
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
    }
    /**
     * Show the form for creating a new resource.
     */


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
            'color'   => 'required|string',
            'storage' => 'required|string'
        ]);

        $cart = Cart::find($request->cart_id);
        if ($cart->user_id != Auth::id()) {
            return response()->json(['success' => false, 'message' => 'Bạn không có quyền chỉnh sửa giỏ hàng này.'], 403);
        }

        // Tìm biến thể mới dựa trên product_id, color, storage
        $newVariant = ProductVariant::where('product_id', $cart->product_variant->product_id)
            ->where('color', $request->color)
            ->where('storage', $request->storage)
            ->where('status', 'active')
            ->first();

        if (!$newVariant) {
            return response()->json(['success' => false, 'message' => 'Biến thể này không tồn tại hoặc không khả dụng.']);
        }

        // Cập nhật product_variant_id trong carts
        $cart->update(['product_variant_id' => $newVariant->id]);

        return response()->json([
            'success' => true,
            'price'   => $newVariant->price
        ]);
    }
    // public function deleteCartItem($cartId)
    // {
    //     $cart = Cart::findOrFail($cartId);
    //     if ($cart->user_id != Auth::id()) {
    //         abort(403);
    //     }
    //     $cart->delete();
    //     return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    // }
    public function delete($id)
    {
        $cart = Cart::find($id); // Giả sử model Cart của bạn
        if ($cart && $cart->user_id == Auth::id()) { // Kiểm tra quyền sở hữu
            $cart->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm hoặc bạn không có quyền xóa'], 404);
    }
    private function createVnpayPaymentUrl($order, $final_total)
    {
        $vnp_TmnCode    = env('VNPAY_TMN_CODE');        // Lấy từ .env
        $vnp_HashSecret = env('VNPAY_HASH_SECRET');     // Lấy từ .env
        $vnp_Url        = env('VNPAY_URL');             // Lấy từ .env
        $vnp_Returnurl  = route('customer.order.vnpay.callback'); // Dùng route cho callback

        $vnp_TxnRef = $order->order_code; // Mã đơn hàng
        $vnp_Amount = $final_total * 100; // Số tiền (VND, nhân 100 theo yêu cầu VNPay)
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
            'fullname'       => 'required|string',
            'address'        => 'required|string',
            'phone'          => 'required',
            'email'          => 'required|email',
            'payment_method' => 'required|in:COD,VNPay',
            'agree'          => 'accepted',
            'selected_items' => 'required|array|min:1' // Bắt buộc chọn ít nhất 1 sản phẩm
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

        // Tính tổng giá của các sản phẩm được chọn
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->product_variant->price * $cart->quantity;
        }

        // Kiểm tra voucher
        $voucher = Discount::where('start_date', '<=', now())
            ->where('expiration_date', '>=', now())
            ->where('code', $request->voucher_code)
            ->first();
        $discount_amount = 0;
        if ($voucher) {
            if ($voucher->discount_type == 'fixed') {
                $discount_amount = $voucher->discount_value;
            } else { // percentage
                $discount_amount = ($total * $voucher->discount_value) / 100;
            }
        }
        $final_total = $total - $discount_amount;
        if ($final_total < 0) {
            $final_total = 0;
        }

        // Tạo đơn hàng
        $order = Order::create([
            'order_code'      => 'ORD' . time(),
            'user_id'         => $user->id,
            'discount_id'     => $voucher ? $voucher->id : null,
            'fullname'        => $request->fullname,
            'address'         => $request->address,
            'phone'           => $request->phone,
            'email'           => $request->email,
            'total_price'     => $final_total,
            'discount_amount' => $discount_amount,
            'payment_method'  => $request->payment_method,
            'payment_status'  => 'pending',
            'status'          => 'pending'
        ]);
        // $order->save();

        // Tạo các mục đơn hàng
        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id'           => $order->id,
                'product_variant_id' => $cart->product_variant->id,
                'quantity'           => $cart->quantity,
                'price'              => $cart->product_variant->price,
            ]);
        }

        // Xóa các sản phẩm được chọn khỏi giỏ hàng
        Cart::where('user_id', $user->id)->whereIn('id', $selectedCartIds)->delete();

        if ($request->payment_method === 'COD') {
            return redirect()->route('customer.order.success')
                ->with('success', 'Đơn hàng đã được đặt thành công. Vui lòng chờ giao hàng.');
        } else { // VNPay
            $vnpayUrl = $this->createVnpayPaymentUrl($order, $final_total);
            return redirect($vnpayUrl); // Chuyển hướng sang VNPay
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
            // Thanh toán thành công
            $order->update([
                'payment_status' => 'paid',
                'status'         => 'processing'
            ]);
            return redirect()->route('customer.order.success')
                ->with('success', 'Thanh toán VNPay thành công. Đơn hàng của bạn đang được xử lý.');
        } else {
            // Thanh toán thất bại
            $order->update(['payment_status' => 'failed']);
            return redirect()->route('customer.cart')
                ->with('error', 'Thanh toán VNPay thất bại. Vui lòng thử lại.');
        }
    }
    public function post_detail(String $id)
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

        // Kiểm tra nếu product có images, nếu không, gán một collection rỗng
        $productImages = $product->images ?? collect();

        return view('customer.product_detail', compact('product', 'productImages'));
    }

    public function getProductImages(Request $request)
    {
        $productId = $request->query('product_id');

        $images = ProductImage::where('product_id', $productId)
            ->pluck('mini_images'); // Lấy danh sách đường dẫn ảnh mini

        return response()->json([
            'success' => true,
            'images' => $images,
        ]);
    }
}
