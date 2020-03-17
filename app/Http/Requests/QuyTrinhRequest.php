<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuyTrinhRequest extends FormRequest
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
            'tenquytrinh' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenquytrinh.required' => 'Vui lòng nhập tên quy trình!'
        ];
    }
}
