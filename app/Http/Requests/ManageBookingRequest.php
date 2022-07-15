<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageBookingRequest extends FormRequest
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
            'pnr' => 'required',
            'lastname' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'pnr.required' => 'This field is required',
            'lastname.required' => 'This field is required',
        ];
    }
}
