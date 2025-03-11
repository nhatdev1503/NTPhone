<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        $categories = Category::all();
        // Tìm kiếm theo tên (Không phân biệt hoa thường)
        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
        if ($request->has('category_id') && !empty($request->category_id)) {
            $query->where('category_id', $request->category_id);
        }
        $products = $query->with('category')->orderBy('id', 'desc')->paginate(10)->appends($request->query());


        return view('admin.products.index', compact('products', 'categories'));
    }
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'screen' => 'nullable|string',
            'os' => 'nullable|string',
            'rear_camera' => 'nullable|string',
            'front_camera' => 'nullable|string',
            'cpu' => 'nullable|string',
            'ram' => 'nullable|string',
            'battery' => 'nullable|string',
            'base_price' => 'nullable',
            'variants' => 'array',
            // 'variants.*.color' => 'required|string|distinct',
            // 'variants.*.storage' => 'required|string|distinct',
            // 'variants.*.origin_price' => 'required|numeric',
            // 'variants.*.price' => 'required|numeric',
            // 'variants.*.stock' => 'required|integer',
        ]);

        // Tạo thư mục nếu chưa tồn tại
        $uploadPath = public_path('uploads/products');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        // Lưu ảnh sản phẩm nếu có
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);
            $imagePath = 'uploads/products/' . $imageName;
        }

        $miniImagePath = null;
        if ($request->hasFile('mini_image')) {
            $miniImage = $request->file('mini_image');
            $miniImageName = time() . '_mini_' . $miniImage->getClientOriginalName();
            $miniImage->move($uploadPath, $miniImageName);
            $miniImagePath = 'uploads/products/' . $miniImageName;
        }
        // Lưu sản phẩm
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imagePath,
            'mini_image' => $miniImagePath,
            'screen' => $request->screen,
            'os' => $request->os,
            'rear_camera' => $request->rear_camera,
            'front_camera' => $request->front_camera,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'battery' => $request->battery,
            'base_price' => $request->base_price,
        ]);
        // Lưu biến thể sản phẩm
        foreach ($request->variants as $variant) {
            $variant = json_decode($variant, true);
            ProductVariant::create([
                'product_id' => $product->id,
                'color' => $variant['color'],
                'storage' => $variant['storage'],
                'origin_price' => $variant['origin_price'],
                'price' => $variant['price'],
                'stock' => $variant['stock'],
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm thành công.');
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

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'screen' => 'nullable|string',
            'os' => 'nullable|string',
            'rear_camera' => 'nullable|string',
            'front_camera' => 'nullable|string',
            'cpu' => 'nullable|string',
            'ram' => 'nullable|string',
            'battery' => 'nullable|string',
            'base_price' => 'nullable',
            'updatevariants' => 'array',
            'variants' => 'array',
            // 'variants.*.color' => 'required|string|distinct',
            // 'variants.*.storage' => 'required|string|distinct',
            // 'variants.*.origin_price' => 'required|numeric',
            // 'variants.*.price' => 'required|numeric',
            // 'variants.*.stock' => 'required|integer',
        ]);
        // Tạo thư mục nếu chưa tồn tại
        $uploadPath = public_path('uploads/products');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        // Tạo thư mục nếu chưa tồn tại
        $uploadPath = public_path('uploads/products');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        $imagePath = $product->image ?? null;
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($imagePath && File::exists(public_path($imagePath))) {
                File::delete(public_path($imagePath));
            }

            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);
            $imagePath = 'uploads/products/' . $imageName;
        }

        $miniImagePath = $product->mini_image ?? null;
        if ($request->hasFile('mini_image')) {
            // Xóa ảnh mini cũ nếu tồn tại
            if ($miniImagePath && File::exists(public_path($miniImagePath))) {
                File::delete(public_path($miniImagePath));
            }

            // Lưu ảnh mini mới
            $miniImage = $request->file('mini_image');
            $miniImageName = time() . '_mini_' . $miniImage->getClientOriginalName();
            $miniImage->move($uploadPath, $miniImageName);
            $miniImagePath = 'uploads/products/' . $miniImageName;
        }

        // Lưu sản phẩm
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imagePath,
            'mini_image' => $miniImagePath,
            'screen' => $request->screen,
            'os' => $request->os,
            'rear_camera' => $request->rear_camera,
            'front_camera' => $request->front_camera,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'battery' => $request->battery,
            'base_price' => $request->base_price,
        ]);
        //Cập nhật biến thể sản phẩmphẩm
        // dd($request->updatevariants);
        if ($request->has('updatevariants')) {
            foreach ($request->updatevariants as $variantData) {
                // Giải mã JSON thành mảng PHP
                $data = json_decode($variantData, true);

                // Kiểm tra xem variantId có hợp lệ không
                if (!isset($data['variantId'])) {
                    continue; // Bỏ qua nếu không có ID
                }

                // Tìm biến thể trong DB
                $variant = ProductVariant::findOrFail($data['variantId']);
                // Nếu tìm thấy, cập nhật dữ liệu
                if ($variant) {
                    $variant->update([
                        'color' => $data['color'],
                        'storage' => $data['storage'],
                        'origin_price' => $data['origin_price'],
                        'price' => $data['price'],
                        'stock' => $data['stock'],
                        'status' => $data['status']
                    ]);
                }
            }

        }
        // Lưu biến thể sản phẩm
        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                $variant = json_decode($variant, true);
                ProductVariant::create([
                    'product_id' => $product->id,
                    'color' => $variant['color'],
                    'storage' => $variant['storage'],
                    'origin_price' => $variant['origin_price'],
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                ]);
            }
        }


        return redirect()->route('products.show', $id)->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    public function destroy(Product $product)
    {
        $product->update([
            'status' => $product->status === 'active' ? 'inactive' : 'active'
        ]);        
        return redirect()->route('products.index')
            ->with('success', 'Cập nhật thành công');
    }

}
