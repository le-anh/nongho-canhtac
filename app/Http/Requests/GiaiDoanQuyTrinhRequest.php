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
            'quytrinh_id' => 'required',
			'tengiaidoan' => 'required',
			'huongdan' => 'required',
        ];
    }
	public function messages()
    {
        return [
            'quytrinh_id.required' => 'Vui lòng nhập tên quy trình id',
			'tengiaidoan.required' => 'Vui lòng nhập tên giai đoạn',
			'huongdan.required' => 'Vui lòng nhập hướng dẫn'
			
        ];
    }
}
