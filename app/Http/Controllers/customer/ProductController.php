<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function checkStock(Request $request)
    {
        $productId = $request->query('product_id');
        $color = $request->query('color');
        $storage = $request->query('storage');

        $variant = DB::table('product_variants')
            ->where('product_id', $productId)
            ->where('color', $color)
            ->where('storage', $storage)
            ->first();

        if ($variant) {
            return response()->json([
                'in_stock' => $variant->stock > 0,
                'price' => $variant->price,
                'origin_price' => $variant->origin_price,
            ]);
        }

        return response()->json(['in_stock' => false]);
    }
}