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
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');
        $startMonth = $request->query('start_month');
        $endMonth = $request->query('end_month');
        $labels = [];
        $values = [];

        if ($filter === 'day') {
            if ($startDate && $endDate) {
                $start = Carbon::parse($startDate);
                $end = Carbon::parse($endDate);
                $days = $end->diffInDays($start) + 1;

                for ($i = 0; $i < $days; $i++) {
                    $date = $start->copy()->addDays($i);
                    $labels[] = $date->format('Y-m-d');
                    $values[] = DB::table('orders')
                        ->where('status', 'completed')
                        ->whereDate('updated_at', $date)
                        ->sum('total_price');
                }
            } else {
                // Mặc định hiển thị 30 ngày gần nhất
                for ($i = 29; $i >= 0; $i--) {
                    $date = Carbon::now()->subDays($i);
                    $labels[] = $date->format('Y-m-d');
                    $values[] = DB::table('orders')
                        ->where('status', 'completed')
                        ->whereDate('updated_at', $date)
                        ->sum('total_price');
                }
            }
        } elseif ($filter === 'month') {
            if ($startMonth && $endMonth) {
                $start = Carbon::createFromFormat('Y-m', $startMonth)->startOfMonth();
                $end = Carbon::createFromFormat('Y-m', $endMonth)->endOfMonth();
                $months = $end->diffInMonths($start) + 1;

                for ($i = 0; $i < $months; $i++) {
                    $date = $start->copy()->addMonths($i);
                    $labels[] = $date->format('Y-m');
                    $values[] = DB::table('orders')
                        ->where('status', 'completed')
                        ->whereYear('updated_at', $date->year)
                        ->whereMonth('updated_at', $date->month)
                        ->sum('total_price');
                }
            } else {
                // Mặc định hiển thị 12 tháng gần nhất
                for ($i = 11; $i >= 0; $i--) {
                    $date = Carbon::now()->subMonths($i);
                    $labels[] = $date->format('Y-m');
                    $values[] = DB::table('orders')
                        ->where('status', 'completed')
                        ->whereYear('updated_at', $date->year)
                        ->whereMonth('updated_at', $date->month)
                        ->sum('total_price');
                }
            }
        }

        return response()->json([
            'labels' => $labels,
            'values' => $values
        ]);
    }
}
