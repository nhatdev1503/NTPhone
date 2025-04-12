<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function getTopProducts()
    {
        // Lấy sản phẩm bán chạy nhất (dựa vào số lượng đã bán)
        $topSellingProducts = Product::orderBy('sold', 'desc')
        ->limit(5)
        ->get();

        // Lấy sản phẩm được quan tâm nhất (dựa vào lượt xem)
        $mostViewedProducts = Product::orderBy('view', 'desc')
            ->limit(5)
            ->get();

        return response()->json([
            'top_selling' => $topSellingProducts,
            'most_viewed' => $mostViewedProducts
        ]);
    }
} 