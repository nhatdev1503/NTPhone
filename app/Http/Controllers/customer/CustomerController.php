<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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

        $products = Product::where('category_id', $id)->paginate(24);

        return view('customer.danhmuc', compact('category', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
}
