<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscountRequest;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Discount::query()->latest();
        $now = now();

        // Lọc theo mã voucher
        if ($request->has('code') && $request->code != '') {
            $query->where('code', 'like', '%' . $request->code . '%');
        }

        // Lọc theo trạng thái
        if ($request->has('status') && $request->status != '') {
            if ($request->status == 'upcoming') {
                $query->where('start_date', '>', $now);
            } elseif ($request->status == 'active') {
                $query->where('start_date', '<=', $now)->where('expiration_date', '>=', $now);
            } elseif ($request->status == 'expired') {
                $query->where('expiration_date', '<', $now);
            }
        }

        // Lọc theo loại giảm giá
        if ($request->has('discount_type') && $request->discount_type != '') {
            $query->where('discount_type', $request->discount_type);
        }

        // Lấy danh sách voucher đã lọc
        $vouchers = $query->paginate(10)->appends($request->query());

        return view('admin.vouchers.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiscountRequest $request)
    {
        Discount::create([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'discount_value' => $request->discount_value,
            'start_date' => $request->start_date,
            'expiration_date' => $request->expiration_date
        ]);

        return redirect()->route('discounts.index')->with('success', 'Tạo voucher thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $discount = Discount::findOrFail($id);

        return view('admin.vouchers.edit', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiscountRequest $request, Discount $discount)
    {
        $discount->update($request->validated());

        return redirect()->route('discounts.index')->with('success', 'Chỉnh sửa voucher thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
}
