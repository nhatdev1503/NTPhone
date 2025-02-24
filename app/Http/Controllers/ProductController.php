<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     $query = Product::query()->paginate(10);

    //     if ($search) {
    //         $query->where(function ($q) use ($search) {
    //             $q->where('name', 'like', "%{$search}%");
    //             // ->orWhere('description', 'like', "%{$search}%")
    //             // ->orWhere('category_id', 'like', "%{$search}%")
    //             // ->orWhere('original_price', 'like', "%{$search}%")
    //             // ->orWhere('price', 'like', "%{$search}%")
    //             // ->orWhere('stock', 'like', "%{$search}%");
    //         });
    //     }
    //     $products = $query;
    //     return view('admin.products.index', compact('products'));
    // }
    public function index(Request $request)
    {
        $query = Product::query();

        // Tìm kiếm theo tên (Không phân biệt hoa thường)
        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $products = $query->with('category')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function getVariants($id)
    {
        $product = Product::with([
            'variants' => function ($query) {
                $query->orderBy('storage', 'desc'); // Sắp xếp theo storage tăng dần
            }
        ])->findOrFail($id);

        return response()->json($product->variants);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'original_price' => 'required|numeric',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'screen' => 'nullable|string|max:255',
            'os' => 'nullable|string|max:255',
            'rear_camera' => 'nullable|string|max:255',
            'front_camera' => 'nullable|string|max:255',
            'cpu' => 'nullable|string|max:255',
            'ram' => 'nullable|string|max:255',
            'battery' => 'nullable|string|max:255',
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
        $product = Product::with(['category', 'variants'])->findOrFail($product->id);
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mini_image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'screen' => 'nullable|string',
            'os' => 'nullable|string',
            'rear_camera' => 'nullable|string',
            'front_camera' => 'nullable|string',
            'cpu' => 'nullable|string',
            'ram' => 'nullable|string',
            'battery' => 'nullable|string',
        ]);

        // Cập nhật thông tin sản phẩm
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'screen' => $request->screen,
            'os' => $request->os,
            'rear_camera' => $request->rear_camera,
            'front_camera' => $request->front_camera,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'battery' => $request->battery,
        ]);

        // Xử lý ảnh sản phẩm chính
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->update(['image' => $imagePath]);
        }

        // Xử lý ảnh thu nhỏ (Mini Image)
        if ($request->hasFile('mini_image')) {
            $miniImages = [];
            foreach ($request->file('mini_image') as $file) {
                $miniImages[] = $file->store('products/mini', 'public');
            }
            $product->update(['mini_image' => json_encode($miniImages)]);
        }

        return redirect()->route('products.show', $product->id)->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy(Product $product)
    {
        $product->update(['status' => 'inactive']);
        return redirect()->route('admin.products.index')
            ->with('success', 'Sản phẩm đã ngừng bán');
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
