<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable|string',
        ]);
        // Tạo thư mục nếu chưa tồn tại
        $uploadPath = public_path('uploads/categories');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        // Lưu ảnh sản phẩm nếu có
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);
            $imagePath = 'uploads/categories/' . $imageName;
        }

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Danh mục đã được tạo!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Tạo thư mục nếu chưa tồn tại
        $uploadPath = public_path('uploads/categories');
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
            $imagePath = 'uploads/categories/' . $imageName;
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Kiểm tra trạng thái hiện tại và đổi trạng thái
        $category->status = $category->status === 'active' ? 'inactive' : 'active';
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Cập nhật trạng thái danh mục thành công!');
    }


}


?>