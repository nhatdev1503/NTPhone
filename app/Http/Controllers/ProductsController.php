<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Product::where('status', 'active');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
                    // ->orWhere('description', 'like', "%{$search}%")
                    // ->orWhere('category_id', 'like', "%{$search}%")
                    // ->orWhere('original_price', 'like', "%{$search}%")
                    // ->orWhere('price', 'like', "%{$search}%")
                    // ->orWhere('stock', 'like', "%{$search}%");
            });
        }
        $products = $query->latest()->paginate(5);
        return view('admin.products.index', compact('products'));
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
            ->with('success', 'đã thêm sản phẩm mới');
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
            ->with('success', 'đã thay đổi thông tin sản phẩm');
    }

    public function destroy(Product $product)
    {
        $product->update(['status' => 'inactive']);
        return redirect()->route('admin.products.index')
            ->with('success', 'đã xóa sản phẩm');
    }


    public function lowStock(Request $request)
    {
        $search = $request->input('search');
        $query = Product::where('stock', '<', 5);
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
                    // ->orWhere('description', 'like', "%{$search}%")
                    // ->orWhere('category_id', 'like', "%{$search}%")
                    // ->orWhere('original_price', 'like', "%{$search}%")
                    // ->orWhere('price', 'like', "%{$search}%")
                    // ->orWhere('stock', 'like', "%{$search}%");
            });
        }
        // Nếu muốn dùng phân trang, chuyển get() thành paginate(n)
        $products = $query->paginate();
        return view('admin.products.low_stock', compact('products'));
    }



    public function inactive(Request $request)
    {
        $search = $request->input('search');
        $query = Product::where('status', 'inactive');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
                    // ->orWhere('description', 'like', "%{$search}%")
                    // ->orWhere('category_id', 'like', "%{$search}%")
                    // ->orWhere('original_price', 'like', "%{$search}%")
                    // ->orWhere('price', 'like', "%{$search}%")
                    // ->orWhere('stock', 'like', "%{$search}%");
            });
        }
        $products = $query->latest()->paginate(5);
        return view('admin.products.inactive', compact('products'));
    }

    public function activate(Product $product)
    {
        $product->update(['status' => 'active']);
        return redirect()->route('admin.products.inactive')
            ->with('success', 'Product activated successfully.');
    }
}
