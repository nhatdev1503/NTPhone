<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $colors = Color::all();
        $storages = Storage::all();
        return view('admin.products.create', compact('categories', 'colors', 'storages'));
    }
    public function getVariants($id)
    {
        $pro = Product::findOrFail($id);
        if($pro->have_variant == 0){
            return response()->json([]);
        }
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
            'stock' => 'required_if:have_variant,0|nullable|integer|min:0',
        
            'base_price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0|lte:base_price',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'name.string' => 'Tên sản phẩm phải là một chuỗi.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
        
            'category_id.required' => 'Danh mục sản phẩm là bắt buộc.',
            'category_id.exists' => 'Danh mục sản phẩm không hợp lệ.',
        
            'description.string' => 'Mô tả phải là một chuỗi.',
        
            'image.image' => 'Ảnh sản phẩm phải là một tệp hình ảnh.',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB.',
        
            'mini_image.image' => 'Ảnh thu nhỏ phải là một tệp hình ảnh.',
            'mini_image.mimes' => 'Ảnh thu nhỏ phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'mini_image.max' => 'Ảnh thu nhỏ không được vượt quá 2MB.',
        
            'screen.string' => 'Thông tin màn hình phải là một chuỗi.',
            'os.string' => 'Thông tin hệ điều hành phải là một chuỗi.',
            'rear_camera.string' => 'Thông tin camera sau phải là một chuỗi.',
            'front_camera.string' => 'Thông tin camera trước phải là một chuỗi.',
            'cpu.string' => 'Thông tin CPU phải là một chuỗi.',
            'ram.string' => 'Thông tin RAM phải là một chuỗi.',
            'battery.string' => 'Thông tin pin phải là một chuỗi.',
        
            'stock.required_if' => 'Số lượng tồn kho là bắt buộc khi sản phẩm không có biến thể.',
            'stock.integer' => 'Số lượng tồn kho phải là số nguyên.',
            'stock.min' => 'Số lượng tồn kho không được âm.',
        
            'base_price.required' => 'Giá gốc là bắt buộc.',
            'base_price.numeric' => 'Giá gốc phải là số.',
            'base_price.min' => 'Giá gốc không được âm.',
            'sale_price.required' => 'Giá giảm là bắt buộc.',
            'sale_price.numeric' => 'Giá giảm phải là số.',
            'sale_price.min' => 'Giá giảm mãi không được âm.',
            'sale_price.lte' => 'Giá giảm không được lớn hơn giá gốc.',
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

        // Lưu sản phẩm
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imagePath,
            'screen' => $request->screen,
            'os' => $request->os,
            'rear_camera' => $request->rear_camera,
            'front_camera' => $request->front_camera,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'battery' => $request->battery,
            'base_price' => $request->base_price,
            'sale_price' => $request->sale_price,
            'have_variant' => $request->have_variant,
        ]);
        // Lưu ảnh mini 
        if ($request->hasFile('mini_images')) {
            foreach ($request->file('mini_images') as $miniImage) {
                $miniImageName = time() . '_mini_' . $miniImage->getClientOriginalName();
                $miniImage->move($uploadPath, $miniImageName);
                $miniImagePath = 'uploads/products/' . $miniImageName;

                ProductImage::create([
                    'product_id' => $product->id,
                    'mini_image' => $miniImagePath,
                ]);
            }
        }
        
        if ($request->have_variant == 1) {
            // Lưu biến thể sản phẩm
            if ($request->variants) {
                foreach ($request->variants as $variant) {
                    $variant = json_decode($variant, true);
                    if (
                        $variant != null 
                    ) {
                        // Nếu không có ID, tạo mới
                        ProductVariant::create([
                            'product_id' => $product->id,
                            'color' => $variant['color'],
                            'hax_code' => $variant['hax_code'],
                            'storage' => $variant['storage'],
                            'origin_price' => $variant['origin_price'],
                            'price' => $variant['price'],
                            'stock' => $variant['stock'],
                        ]);
                    }else {
                        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm thành công. Vui lòng thêm biến thể để có thể sử dụng.');
                    }
                }
            }
        }else{
            // Nếu không có biến thể, đặt giá trị mặc định cho các trường liên quan
            ProductVariant::create([
                'product_id' => $product->id,
                'color' => null,
                'hax_code' => null,
                'storage' => null,
                'origin_price' => $request->base_price,
                'price' => $request->sale_price,
                'stock' => $request->stock,
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
        $colors = Color::all();
        $storages = Storage::all();
        return view('admin.products.edit', compact('product', 'categories', 'colors', 'storages'));
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
            'stock' => 'required_if:have_variant,0|nullable|integer|min:0',
        
            'base_price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0|lte:base_price',
        ], [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'name.string' => 'Tên sản phẩm phải là một chuỗi.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
        
            'category_id.required' => 'Danh mục sản phẩm là bắt buộc.',
            'category_id.exists' => 'Danh mục sản phẩm không hợp lệ.',
        
            'description.string' => 'Mô tả phải là một chuỗi.',
        
            'image.image' => 'Ảnh sản phẩm phải là một tệp hình ảnh.',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB.',
        
            'mini_image.image' => 'Ảnh thu nhỏ phải là một tệp hình ảnh.',
            'mini_image.mimes' => 'Ảnh thu nhỏ phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'mini_image.max' => 'Ảnh thu nhỏ không được vượt quá 2MB.',
        
            'screen.string' => 'Thông tin màn hình phải là một chuỗi.',
            'os.string' => 'Thông tin hệ điều hành phải là một chuỗi.',
            'rear_camera.string' => 'Thông tin camera sau phải là một chuỗi.',
            'front_camera.string' => 'Thông tin camera trước phải là một chuỗi.',
            'cpu.string' => 'Thông tin CPU phải là một chuỗi.',
            'ram.string' => 'Thông tin RAM phải là một chuỗi.',
            'battery.string' => 'Thông tin pin phải là một chuỗi.',
        
            'stock.required_if' => 'Số lượng tồn kho là bắt buộc khi sản phẩm không có biến thể.',
            'stock.integer' => 'Số lượng tồn kho phải là số nguyên.',
            'stock.min' => 'Số lượng tồn kho không được âm.',
        
            'base_price.required' => 'Giá gốc là bắt buộc.',
            'base_price.numeric' => 'Giá gốc phải là số.',
            'base_price.min' => 'Giá gốc không được âm.',
            'sale_price.required' => 'Giá giảm là bắt buộc.',
            'sale_price.numeric' => 'Giá giảm phải là số.',
            'sale_price.min' => 'Giá giảm mãi không được âm.',
            'sale_price.lte' => 'Giá giảm không được lớn hơn giá gốc.',
        ]);
        // dd($request->all());
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
        // Lưu sản phẩm
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imagePath,
            'screen' => $request->screen,
            'os' => $request->os,
            'rear_camera' => $request->rear_camera,
            'front_camera' => $request->front_camera,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'battery' => $request->battery,
            'base_price' => $request->base_price,
            'sale_price' => $request->sale_price,
        ]);
        // Xóa ảnh mini cũ nếu được chọn
        if ($request->has('delete_mini_images')) {
            foreach ($request->delete_mini_images as $imageId) {
                $miniImage = ProductImage::find($imageId);
                if ($miniImage) {
                    if (File::exists(public_path($miniImage->mini_image))) {
                        File::delete(public_path($miniImage->mini_image)); // Xóa file khỏi thư mục
                    }
                    $miniImage->delete(); // Xóa record khỏi database
                }
            }
        }

        // Thêm ảnh mini mới nếu có
        if ($request->hasFile('mini_images')) {
            foreach ($request->file('mini_images') as $miniImage) {
                $miniImageName = time() . '_mini_' . $miniImage->getClientOriginalName();
                $miniImage->move(public_path('uploads/products/'), $miniImageName);
                $miniImagePath = 'uploads/products/' . $miniImageName;

                // Lưu vào bảng `product_images`
                ProductImage::create([
                    'product_id' => $product->id,
                    'mini_image' => $miniImagePath
                ]);
            }
        }
        // dd($request->updatevariants);
        if($product->have_variant == 1){
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
                            'hax_code' => $data['hax_code'],
                            'storage' => $data['storage'],
                            'origin_price' => $data['origin_price'],
                            'price' => $data['price'],
                            'stock' => $data['stock'],
                            // 'status' => $data['status']
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
                        'hax_code' => $variant['hax_code'],
                        'storage' => $variant['storage'],
                        'origin_price' => $variant['origin_price'],
                        'price' => $variant['price'],
                        'stock' => $variant['stock'],
                    ]);
                }
            }
        }
        else{
            // Nếu không có biến thể, đặt giá trị mặc định cho các trường liên quan
            ProductVariant::where('product_id', $product->id)->update([
                'color' => null,
                'hax_code' => null,
                'storage' => null,
                'origin_price' => $request->base_price,
                'price' => $request->sale_price,
                'stock' => $request->stock,
            ]);
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
    public function priority(Product $product)
    {
        $maxPriorirty = Product::max('priority');
        $product->update([
            'priority' => $maxPriorirty + 1
        ]);
        return redirect()->route('products.index')
            ->with('success', 'Cập nhật thành công');
    }

}
