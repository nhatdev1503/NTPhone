<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = Discount::latest()->paginate(5);

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
            'max_discount' => 'nullable|numeric|min:0',
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date'
        ]);

        Discount::create([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'discount_value' => $request->discount_value,
            'max_discount' => $request->max_discount,
            'start_date' => $request->start_date,
            'expiration_date' => $request->expiration_date
        ]);

        return redirect()->route('admin.allVoucher')->with('success', 'Tạo voucher thành công');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
