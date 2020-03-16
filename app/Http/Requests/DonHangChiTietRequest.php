<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonHang_ChiTietRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dongia' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'dongia.required' => 'Vui lòng nhập Đơn giá'
        ];
    }
}
