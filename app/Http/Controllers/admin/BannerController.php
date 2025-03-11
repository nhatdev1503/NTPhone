<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->paginate('9');
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lưu ảnh
        $imagePath = $request->file('image')->store('banners', 'public');

        Banner::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Thêm banner thành công!');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Xóa banner thành công!');
    }
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ
            if ($banner->image) {
                Storage::delete('public/' . $banner->image);
            }
            // Lưu ảnh mới
            $imagePath = $request->file('image')->store('banners', 'public');
            $banner->image = $imagePath;
        }

        $banner->save();
        return redirect()->route('banners.index')->with('success', 'Cập nhật banner thành công!');
    }
    public function status(Banner $banner)
    {
        Banner::where('status', 'active')->update(['status' => 'inactive']);
        $banner->update([
            'status' => $banner->status === 'active' ? 'inactive' : 'active'
        ]);   
        return redirect()->route('banners.index')
            ->with('success', 'Cập nhật thành công');
    }

}


?>