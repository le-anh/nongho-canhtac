<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiaiDoanQuyTrinhRequest extends FormRequest
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
            'tengiaidoan' => 'required',
			'huongdan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenloaigiong.required' => 'Vui lòng nhập tên loại giống',
			'huongdan.required' => 'Vui lòng nhập hướng dân!'
        ];
    }
}
