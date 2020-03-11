<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhanBonRequest extends FormRequest
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
            'loaiphanbon_id' => 'required',
			'tenphanbon' => 'required'
        ];
    }
	public function messages()
    {
        return [
            'loaiphanbon_id.required' => 'Vui lòng nhập tên loại phân bón',
			'tenphanbon.required' => 'Vui lòng nhập tên phân bón'
			
        ];
    }
}
