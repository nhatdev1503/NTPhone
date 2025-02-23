<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')->latest()->paginate(5);
        return view('admin.products.index', compact('products'));
    }

    
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id'    => 'required|integer',
            'name'           => 'required|string|max:255',
            'description'    => 'nullable|string',
            'original_price' => 'required|numeric',
            'price'          => 'required|numeric',
            'stock'          => 'required|integer',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'screen'         => 'nullable|string|max:255',
            'os'             => 'nullable|string|max:255',
            'rear_camera'    => 'nullable|string|max:255',
            'front_camera'   => 'nullable|string|max:255',
            'cpu'            => 'nullable|string|max:255',
            'ram'            => 'nullable|string|max:255',
            'battery'        => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id'    => 'required|integer',
            'name'           => 'required|string|max:255',
            'description'    => 'nullable|string',
            'original_price' => 'required|numeric',
            'price'          => 'required|numeric',
            'stock'          => 'required|integer',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'screen'         => 'nullable|string|max:255',
            'os'             => 'nullable|string|max:255',
            'rear_camera'    => 'nullable|string|max:255',
            'front_camera'   => 'nullable|string|max:255',
            'cpu'            => 'nullable|string|max:255',
            'ram'            => 'nullable|string|max:255',
            'battery'        => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->update(['status' => 'inactive']);
        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully (soft delete).');
    }


    public function lowStock()
    {
        $products = Product::where('stock', '<', 5)->get();
        return view('admin.products.low_stock', compact('products'));
    }



    public function inactive()
    {
        $products = Product::where('status', 'inactive')->latest()->paginate(5);
        return view('admin.products.inactive', compact('products'));
    }

    public function activate(Product $product)
    {
        $product->update(['status' => 'active']);
        return redirect()->route('admin.products.inactive')
            ->with('success', 'Product activated successfully.');
    }
}
