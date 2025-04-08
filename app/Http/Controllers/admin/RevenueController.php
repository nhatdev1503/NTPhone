<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class RevenueController extends Controller
{
    public function getRevenue(Request $request)
    {
        $filter = $request->query('filter', 'day');
        $labels = [];
        $values = [];

        if ($filter === 'day') {
            for ($i = 11; $i >= 0; $i--) {
                $date = Carbon::now()->subDays($i)->format('Y-m-d');
                $labels[] = $date;
                $values[] = DB::table('orders')
                ->where('status', 'completed')
                    ->whereDate('created_at', $date)
                    ->sum('total_price');
            }
        } elseif ($filter === 'month') {
            for ($i = 11; $i >= 0; $i--) {
                $month = Carbon::now()->subMonths($i)->format('Y-m');
                $labels[] = $month;
                $values[] = DB::table('orders')
                ->where('status', 'completed')
                    ->whereYear('created_at', Carbon::now()->subMonths($i)->year)
                    ->whereMonth('created_at', Carbon::now()->subMonths($i)->month)
                    ->sum('total_price');
            }
        }

        return response()->json([
            'labels' => $labels,
            'values' => $values
        ]);
    }
}
