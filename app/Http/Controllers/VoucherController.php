<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Discount::query();
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
        $vouchers = $query->paginate(10);

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
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:discounts',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date'
        ]);

        Discount::create([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'discount_value' => $request->discount_value,
            'start_date' => $request->start_date,
            'expiration_date' => $request->expiration_date
        ]);

        return redirect()->route('vouchers.index')->with('success', 'Tạo voucher thành công');
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required|string|unique:discounts,code,' . $id,
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date'
        ]);

        $discount = Discount::findOrFail($id);

        $discount->update([
            'code' => $request->input('code'),
            'discount_type' => $request->input('discount_type'),
            'discount_value' => $request->input('discount_value'),
            'start_date' => $request->input('start_date'),
            'expiration_date' => $request->input('expiration_date')
        ]);

        return redirect()->route('vouchers.index')->with('success', 'Chỉnh sửa voucher thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('admin.allVoucher')->with('success', 'Voucher đã bị xóa');
    }
}
