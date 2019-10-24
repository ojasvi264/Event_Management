<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:pages'.(request()->method()=="POST"?'':',name,'.$this->id),
            'url' => 'required|string',
            'slug' => 'required|max:191|string|unique:pages'.(request()->method()=="POST"?'':',slug,'.$this->id),
            'title' => 'string|max:191',
            'description' => 'string|max:191',
            'short_description' => 'string|max:191',
            'photo'=>'required|max:1500',
        ];
    }
    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'url.required'=>'URL field is required',
            'url.string'=>'URL field must be of string type',

            'slug.unique'=>'Slug must be unique',
            'slug.required'=>'Slug field is required',
            'slug.string'=>'Slug field must be of String type',

            'title.string'=>'Title must be of string type',

            'description.string'=>'Description must be of string type',

            'short_description.string'=>'Description must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
