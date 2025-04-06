<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cho phép tất cả người dùng gửi request
    }

    public function rules()
    {
        $userId = $this->route('user'); // Lấy ID user nếu đang update

        $rules = [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email' . ($userId ? ',' . $userId : ''),
            'username' => $userId ? 'nullable|min:6|max:20' : 'required|string|unique:users,username',
            'password' => $userId ? 'nullable|min:6|max:20' : 'required|min:6',
            'phone' => 'required|string|max:15',
            'status' => 'required|in:active,inactive',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập họ tên.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'username.required' => 'Vui lòng nhập tên đăng nhập.',
            'username.unique' => 'Tên đăng nhập đã tồn tại.',
            'username.min' => 'Tên đăng nhập có ít nhất 6 kí tự.',
            'username.max' => 'Tên đăng nhập có nhiều nhất 20 kí tự.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max' => 'Mật khẩu có nhiều nhất 20 ký tự.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'status.required' => 'Vui lòng chọn trạng thái.',
            'status.in' => 'Trạng thái không hợp lệ.',
            'avatar.image' => 'Tệp tải lên phải là hình ảnh.',
            'avatar.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'avatar.max' => 'Hình ảnh không được vượt quá 2MB.',
        ];
    }
}
