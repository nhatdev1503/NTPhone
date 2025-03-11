<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create($id )
    {
        $product = Product::findOrFail($id);
        return view('admin.products.product_variants.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $request->validate([
            'variants' => 'required|array',
            'variants.*.color' => 'required|string|distinct',
            'variants.*.storage' => 'required|string|distinct',
            'variants.*.origin_price' => 'required|numeric',
            'variants.*.price' => 'required|numeric',
            'variants.*.stock' => 'required|integer',
        ]);
        // Lưu biến thể sản phẩm
        foreach ($request->variants as $variant) {
            $variant = json_decode($variant, true);
            ProductVariant::create([
                'product_id' => $id,
                'color' => $variant['color'],
                'storage' => $variant['storage'],
                'origin_price' => $variant['origin_price'],
                'price' => $variant['price'],
                'stock' => $variant['stock'],
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Biến thể sản phẩm đã được thêm thành công.');
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
    public function destroy(string $id)
    {
        //
    }
}
