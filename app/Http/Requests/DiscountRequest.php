<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DiscountRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cho phép tất cả người dùng gửi request
    }

    public function rules()
    {
        $discountId = $this->route('discount') ? $this->route('discount')->id : null; // Lấy ID của voucher khi update
        return [
            'code' => [
                'required',
                'max:10',
                Rule::unique('discounts', 'code')->ignore($discountId) // Cho phép trùng khi update
            ],
            'discount_type' => 'required|in:fixed,percentage',
            'discount_value' => [
                'required', 'numeric', 'min:0',
                function ($attribute, $value, $fail) {
                    if ($this->discount_type == 'percentage' && ($value <= 0 || $value > 70)) {
                        $fail('Giá trị giảm phải lớn hơn 0 và nhỏ hơn 70% nếu là giảm theo phần trăm.');
                    }
                },
            ],
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Vui lòng nhập mã voucher!',
            'code.unique' => 'Mã voucher này đã tồn tại, hãy chọn mã khác!',
            'code.max' => 'Mã voucher không được dài quá 10 ký tự!',
            
            'discount_type.required' => 'Vui lòng chọn loại giảm giá!',
            'discount_type.in' => 'Loại giảm giá không hợp lệ!',
            
            'discount_value.required' => 'Vui lòng nhập giá trị giảm!',
            'discount_value.numeric' => 'Giá trị giảm phải là số!',
            'discount_value.min' => 'Giá trị giảm không thể âm!',
            
            'start_date.required' => 'Vui lòng chọn ngày bắt đầu!',
            'start_date.date' => 'Ngày bắt đầu không hợp lệ!',
            'start_date.after_or_equal' => 'Ngày bắt đầu phải từ hôm nay trở đi!',
            
            'expiration_date.required' => 'Vui lòng chọn ngày hết hạn!',
            'expiration_date.date' => 'Ngày hết hạn không hợp lệ!',
            'expiration_date.after' => 'Ngày hết hạn phải sau ngày bắt đầu!',
        ];
    }
}
