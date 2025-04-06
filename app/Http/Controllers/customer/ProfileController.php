<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user(); // Lấy thông tin user
        return view('customer.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();
        // Validate thông tin cập nhật
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:255',
            'avatar'   => 'nullable|image|max:2048', // Tối đa 2MB
        ]);

        // Xử lý upload avatar nếu có
        // if ($request->hasFile('avatar')) {
        //     $path = $request->file('avatar')->store('avatars', 'public');
        //     $data['avatar'] = $path;
        // }

        $user->update($data);

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }
}