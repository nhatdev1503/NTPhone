<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user(); // Lấy user đang đăng nhập
        return view('customer.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();


        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:255',
            'avatar'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            // Xóa avatar cũ nếu có
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $user->update($data);
        
        session()->flash('success', 'Cập nhật thông tin thành công');

        return redirect()->back();
    }
}
