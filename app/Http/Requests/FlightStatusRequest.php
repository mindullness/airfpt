<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightStatusRequest extends FormRequest
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
            'flightNum' => 'required',
            'date' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'flightNum.required' => 'This field is required',
            'date.required' => 'This field is required'
        ];
    }
}
