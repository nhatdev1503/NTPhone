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
        $discountId = $this->route('discount') ? $this->route('discount')->id : null;

        return [
            'code' => [
                'required',
                'min:7',
                'max:10',
                Rule::unique('discounts', 'code')->ignore($discountId),
            ],
            'discount_type' => 'required|in:fixed,percentage',
            'discount_value' => [
                'required', 'numeric', 'min:0',
                function ($attribute, $value, $fail) {
                    if ($this->discount_type == 'percentage' && ($value <= 0 || $value >= 100)) {
                        $fail('Giá trị giảm phải lớn hơn 0 và nhỏ hơn 100% nếu là giảm theo phần trăm.');
                    }
                },
            ],
            'max_discount_value' => 'nullable|numeric|min:0',
            'min_order_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'expiration_date' => 'required|date|after:start_date',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Mã voucher không được để trống.',
            'code.max' => 'Mã voucher không được quá 10 ký tự.',
            'code.min' => 'Mã voucher không ít hơn 7 ký tự.',
            'code.unique' => 'Mã voucher đã tồn tại, vui lòng chọn mã khác.',
            'discount_type.required' => 'Loại voucher không được để trống.',
            'discount_type.in' => 'Loại voucher không hợp lệ.',
            'discount_value.required' => 'Giá trị giảm không được để trống.',
            'discount_value.numeric' => 'Giá trị giảm phải là số.',
            'discount_value.min' => 'Giá trị giảm phải lớn hơn 0.',
            'max_discount_value.numeric' => 'Số tiền giảm tối đa phải là số.',
            'max_discount_value.min' => 'Số tiền giảm tối đa phải lớn hơn hoặc bằng 0.',
            'min_order_value.required' => 'Đơn hàng tối thiểu không được để trống.',
            'min_order_value.numeric' => 'Đơn hàng tối thiểu phải là số.',
            'min_order_value.min' => 'Đơn hàng tối thiểu phải lớn hơn hoặc bằng 0.',
            'start_date.required' => 'Ngày bắt đầu không được để trống.',
            'start_date.date' => 'Ngày bắt đầu không hợp lệ.',
            'expiration_date.required' => 'Ngày kết thúc không được để trống.',
            'expiration_date.date' => 'Ngày kết thúc không hợp lệ.',
            'expiration_date.after' => 'Ngày kết thúc phải sau ngày bắt đầu.',
        ];
    }
}
