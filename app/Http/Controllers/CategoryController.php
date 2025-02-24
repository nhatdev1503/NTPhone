<?php
  namespace App\Http\Controllers;

  use App\Models\Category;
  use Illuminate\Http\Request;
  
  class CategoryController extends Controller
  {
      public function index()
      {
          return response()->json(Category::all());
      }
  
      public function store(Request $request)
      {
          $request->validate([
              'name' => 'required|unique:categories,name',
              'description' => 'nullable|string',
            
          ]);
  
          $category = Category::create($request->all());
  
          return response()->json(['message' => 'Danh mục đã được tạo', 'data' => $category]);
      }
  
      public function show($id)
      {
          return response()->json(Category::findOrFail($id));
      }
  
      public function update(Request $request, $id)
      {
          $category = Category::findOrFail($id);
          $category->update($request->all());
  
          return response()->json(['message' => 'Cập nhật danh mục thành công', 'data' => $category]);
      }
  
      public function destroy($id)
      {
          Category::findOrFail($id)->delete();
  
          return response()->json(['message' => 'Xóa danh mục thành công']);
      }
  }
  
?>