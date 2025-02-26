<?php
  namespace App\Http\Controllers;

  use App\Models\Category;
  use Illuminate\Http\Request;
  
  class CategoryController extends Controller
  {
      public function index()
      {
          $categories = Category::paginate(10);
          return view('admin.categories.index', compact('categories'));
      }
  
      public function store(Request $request)
      {
          $request->validate([
              'name' => 'required|unique:categories,name',
              'description' => 'nullable|string',
          ]);
  
          Category::create($request->all());
  
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
          $category->update($request->all());
  
          return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
      }
  
      public function destroy($id)
      {
          Category::findOrFail($id)->delete();
  
          return redirect()->route('categories.index')->with('success', 'Xóa danh mục thành công!');
      }
      
  }
   
  
?>