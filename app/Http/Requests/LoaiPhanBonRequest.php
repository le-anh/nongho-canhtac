<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiPhanBonRequest extends FormRequest
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
            'mota' => 'required',
            'tenloaiphanbon' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'tenloaiphanbon.required' => 'Vui lòng nhập tên loại phân bón',
            'mota.required' => 'Vui lòng nhập mô tả'
            
        ];
    }
}
