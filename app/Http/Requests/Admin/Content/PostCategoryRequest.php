<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryRequest extends FormRequest
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
            
            'name'=>'required',
                'description'=>'required',
                'image' =>'required',
                'status' =>'required',
                'tags'=>'required',
    
                'slug'=>'required',

        ];
      
    }
}
