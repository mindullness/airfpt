<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest_PhucDuy extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mem_email'=>'required',
            'mem_first_name'=>'required|string|min:2|max:50',
            'mem_last_name'=>'required|string|min:2|max:20',
            'mem_password'=>'required|string|min:6|max:10',
            'mem_phone'=>'required|numeric|min:8',
            'mem_title'=>'required|string|min:2|max:3',
        ];
    }

    public function messages()
    {
        return
        [
            'mem_email.required'=>'Email cannot be blank!',
            'mem_first_name.required'=>'First Name cannot be blank!',
            'mem_last_name.required'=>'Last Name cannot be blank!',
            'mem_first_name.min'=>'First Name is minimum 2 charracters!',
            'mem_first_name.max'=>'First Name is maximum 50 charracters!',
            'mem_last_name.min'=>'Last Name is minimum 2 charracters!',
            'mem_last_name.max'=>'Last Name is maximum 20 charracters!',
            'mem_password.required'=>'Password cannot be blank!',
            'mem_password.min'=>'Password is minimum 6 charracters!',
            'mem_password.max'=>'Password is maximum 10 charracters!',
            'mem_phone.required'=>'Phone cannot be blank!',
            'mem_phone.numeric'=>'Phone must be numeric!',
            'mem_phone.min'=>'Phone is minimum 10 charracters!',
            'mem_title.required'=>'Title cannot be blank!',
            'mem_title.min'=>'Title is minimum 2 charracters!',
            'mem_title.max'=>'Title is maximum 3 charracters!',
        ];
    }
}
