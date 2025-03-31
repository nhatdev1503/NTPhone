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
    public function contact()
    {
        return view('customer.contact');
    }
    public function product_detail($id)
    {
        $product = Product::with('variants', 'colors')->findOrFail($id); 
        
        $variants = $product->variants ?? collect();
        $colors = [];
        $storages = [];

        foreach ($product->variants as $variant) {
            $colors[] = $variant->color;
            $storages[] = $variant->storage;
        }
        $colors = array_values(array_unique($colors));
        $storages = array_values(array_unique($storages));

        $contact = Contact::first();

        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $id)
                                  ->limit(6)
                                  ->get();
    
    
        return view('customer.product_detail', compact('colors','storages','contact','product', 'variants', 'relatedProducts'));
    }
    public function apiStoragesByColor($product_id, $color)
    {
        $storages = ProductVariant::where('product_id', $product_id)
            ->where('color', $color)
            ->distinct()
            ->pluck('storage');

        return response()->json($storages);
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
}
