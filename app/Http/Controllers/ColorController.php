<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'hax_code' => [
                'required', 
                'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',
            ],
            'name' => [
                'required',
                'string',
                'max:50',
                'regex:/^[a-zA-ZÀ-Ỹà-ỹ\s]+$/u', // Chỉ chấp nhận chữ cái và khoảng trắng
                'unique:colors,name', // Kiểm tra duy nhất trong bảng colors
            ],
        ], [
            'hax_code.required' => 'Mã màu là bắt buộc.',
            'hax_code.regex' => 'Mã màu phải có định dạng hợp lệ (ví dụ: #FF5733).',
            
            'name.required' => 'Tên màu không được để trống.',
            'name.string' => 'Tên màu phải là chuỗi ký tự.',
            'name.max' => 'Tên màu không được vượt quá 50 ký tự.',
            'name.regex' => 'Tên màu chỉ được chứa chữ cái và khoảng trắng.',
            'name.unique' => 'Tên màu đã tồn tại, vui lòng chọn tên khác.',
        ]);
        
        
        Color::create([
            'name' => $request->name,
            'hax_code' => $request->hax_code,
        ]);
        return redirect()->back()->with('success', 'Thêm màu sắc thành công!');
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
    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->back()->with('success', 'Xóa màu sắc thành công!');
    }
}
