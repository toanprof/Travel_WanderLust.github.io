<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'          =>  'required|max:50|min:4',
            'phone'         =>  'required|digits:10|unique:users,phone',
            'email'              =>  'required',
            'password'           =>  'required|max:50|min:6',
            'confirm_password'   =>  'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
            'unique'        =>  ':attribute đã tồn tại',
            'same'          =>   ':attribute và mật khẩu không giống',
            'digits'        =>   ':attribute phải là 10 số',
        ];
    }

    public function attributes()
    {
        return [
            'name'               =>  'Họ Và Tên',
            'phone'              =>  'Số Điện Thoại',
            'email'              =>  'Email',
            'password'           =>  'Mật Khẩu',
            'confirm_password'   =>  'Xác Nhận Mật Khẩu',
        ];
    }
}
