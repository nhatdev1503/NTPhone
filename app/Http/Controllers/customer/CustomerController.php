<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList = Category::with('products')->where('status', 'active')->get();
        $categories = Category::with('products')->where('status', 'active')->take(4)->get();
        return view('customer.index', compact('categories','categoryList'));
    }

    public function categories(string $id){
        $category = Category::with('products')->findOrFail($id);

        return view('customer.danhmuc', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
}

