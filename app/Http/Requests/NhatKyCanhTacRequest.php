<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhatKyCanhTacRequest extends FormRequest
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
            'socanhtac_id' => 'required',
            'giaidoanquytrinh_id' => 'required',
            'ngaythuchien' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'socanhtac_id.required' => 'Vui lòng nhập ',
            'giaidoanquytrinh_id.required' => 'Vui lòng nhập ',
            'ngaythuchien.required' => 'Vui lòng nhập ngày thực hiện'
            
        ];
    }
}
