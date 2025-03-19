<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $products = $user->favoriteProducts()->paginate(12); // Lấy sản phẩm yêu thích và phân trang

        return view('customer.favorites', compact('products'));
    }
}