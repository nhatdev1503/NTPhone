<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductVariant;
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
    
    public function checkout(Request $request)
    {
        $data = $request->validate([
            'product_variant_id' => 'required|integer|exists:product_variants,id',
            'action' => 'required|string',
        ]);

        // Lấy thông tin biến thể sản phẩm
        $productVariant = ProductVariant::find($data['product_variant_id']);

        // Kiểm tra hành động
        if ($data['action'] == 'buy_now') {
            // Thực hiện các hành động thanh toán ngay, ví dụ chuyển hướng đến trang thanh toán
            return redirect()->route('checkout.page', [
                'product_variant_id' => $productVariant->id
            ]);
        }

        // Hoặc xử lý thêm các logic khác nếu cần (thêm vào giỏ hàng)
        // Ví dụ: thêm sản phẩm vào giỏ hàng
        if ($data['action'] == 'add_to_cart') {
            $user = Auth::user();
            // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            $cartItem = Cart::where('user_id', $user->id)
                            ->where('product_variant_id', $productVariant->id)
                            ->first();

            if ($cartItem) {
                // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng lên
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                // Nếu chưa có, thêm sản phẩm vào giỏ hàng mới
                Cart::create([
                    'user_id' => $user->id,
                    'product_variant_id' => $productVariant->id,
                    'quantity' => 1, // Giả sử số lượng mặc định là 1
                ]);
            }

            // Chuyển hướng về trang giỏ hàng
            return redirect()->route('cart');
        }

        // Xử lý các trường hợp khác nếu có
    }

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

    public function cart(){
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with('product_variant.product.category')->get();

        return view('customer.giohang', compact('carts'));
    }
    public function payment()
    {
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
    }
    public function postCart(){
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
