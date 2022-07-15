<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  
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
          //  'id'=>'required',
            'topic'=>'required|max:200',
            'title'=>'required|max:200',
            'content'=>'required',
            'created_at'=>'required',
            //'updated_at'=>'required',
            'image'=>'image|mimes:jpg,jpeg,bmp,png|max:10240',
        ];
    }

    public function messages() {
        return [
           // 'id.required' => 'Id is required',
            'topic.required' => 'topic is required',
            'topic.max' => 'Maximum of topic is 200 characters',
            'title.required' => 'Title is required',
            'title.max' => 'Maximum of title is 200 characters',
            'content.required'=>'Content is required',
            'created_at.required' => 'Post date is required',
           // 'updated_at.required' => 'Post date is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image must be jpeg, jpg, png, bmp',
            'image.max' => 'Max size is 10MB'
        ];
        
    }
}
