<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:categories'.(request()->method()=="POST"?'':',name,'.$this->id),
            'rank' => 'required|integer',
            'slug' => 'required|max:191|string|unique:categories'.(request()->method()=="POST"?'':',slug,'.$this->id),
            'meta_keyword' => 'string|max:191',
            'meta_description' => 'string|max:191',
            'photo'=>'max:500',
        ];
    }
    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'rank.required'=>'Rank field is required',
            'rank.string'=>'Rank field must be of string type',

            'slug.unique'=>'Slug must be unique',
            'slug.required'=>'Slug field is required',
            'slug.string'=>'Slug field must be of String type',

            'meta_keyword.string'=>'Meta keyword must be of string type',
            'meta_description.string'=>'Meta description must be of string type',

            'photo.file'=>'Photo file must be file type',
        ];
    }
}
