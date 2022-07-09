<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHoaDonRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'ngay_bat_dau'          =>  'required',
            'ngay_ket_thuc'         =>  'required|after:ngay_bat_dau',
        ];
    }
    public function messages()
    {
        return [
            'ngay_bat_dau.required'      =>  ' Ngày bắt đầu không được để trống',
            'ngay_ket_thuc.required'     =>  ' Ngày kết thúc không được để trống',
            'ngay_ket_thuc.min'         =>  'Ngày kết thúc không được nhỏ hơn ngày bắt đầu',
        ];
    }
}
