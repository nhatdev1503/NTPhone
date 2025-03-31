<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
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
            'size' => [
                'required',
                'string',
                'max:10',
                'regex:/^\d+(GB|TB|MB)$/i',
                'unique:sizes,size'
            ],
        ], [
            'size.required' => 'Dung lượng là bắt buộc.',
            'size.string' => 'Dung lượng phải là chuỗi ký tự.',
            'size.max' => 'Dung lượng không được vượt quá 10 ký tự.',
            'size.regex' => 'Dung lượng phải có định dạng hợp lệ (ví dụ: 128GB, 1TB, 512MB).',
            'size.unique' => 'Dung lượng này đã tồn tại.',
        ]);
        Storage::create([
            'size' => $request->size,
        ]);
        return redirect()->back()->with('success', 'Thêm dung lượng thành công!');
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
    public function destroy(Storage $storage)
    {
        $storage->delete();
        return redirect()->back()->with('success', 'Xóa dung lượng thành công!');
    }
}
