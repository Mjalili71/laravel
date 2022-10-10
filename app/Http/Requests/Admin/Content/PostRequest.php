<?php

namespace App\Http\Requests\admin\content;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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


        // just bi used in page creat and edit  ==> validation 
return[
   'title' => 'required',
    'summary' => 'required',
    'category_id' => 'required',
    'image' => 'required',
    'status' => 'required',
    'tags' => 'required',
    'body' => 'required',
    'published_at' => 'required',
    'tags' => 'required',
];
                
   
}

}
