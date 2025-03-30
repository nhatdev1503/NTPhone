<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
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
        // dd($banners);
        $categoryList = \App\Models\Category::with('products')->where('status', 'active')->get();
        $categories = \App\Models\Category::with('products')->where('status', 'active')->take(4)->get();

        return view('customer.index', compact('banners', 'categories', 'categoryList'));
    }

    public function categories(string $id)
    {
        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $id)->paginate(12);
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
    
        // Lấy sản phẩm liên quan cùng danh mục, loại bỏ chính sản phẩm đang xem
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $id)
                                  ->limit(6)
                                  ->get();
    
    
        return view('customer.product_detail', compact('product', 'variants', 'relatedProducts'));
    }
    
   

    public function cart(){
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with('product_variant.product.category')->get();

        return view('customer.giohang', compact('carts'));
    }
    /**
     * Show the form for creating a new resource.
     */
}
