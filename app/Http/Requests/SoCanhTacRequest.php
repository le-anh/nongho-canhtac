<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoCanhTacRequest extends FormRequest
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
                'kehoachsanxuat_thuadat_id' => 'required',
                'ngaytao' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'kehoachsanxuat_thuadat_id.required' => 'Vui lòng chọn kế hoạch sản xuất',
            'ngaytao.required' => 'Vui lòng nhập ngày tạo'
        
            
        ];
    }
}
