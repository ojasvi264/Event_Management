<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:events'.(request()->method()=="POST"?'':',name,'.$this->id),
            'title' => 'string|max:255',
            'slug' => 'required|max:191|string|unique:events'.(request()->method()=="POST"?'':',slug,'.$this->id),
            'registration' => 'string|max:191',
            'location' => 'string|max:191',
            'cost' => 'required|integer',
            'meta_keyword' => 'string|max:191',
            'meta_description' => 'string|max:191',
            'photo'=>'required|max:500',
        ];
    }
    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'cost.required'=>'Cost field is required',
            'cost.string'=>'Cost field must be of integer type',

            'registration.required'=>'Registration field is required',
            'registration.string'=>'Registration field must be of String type',

            'location.required'=>'Location field is required',
            'location.string'=>'Location field must be of String type',

            'slug.unique'=>'Slug must be unique',
            'slug.required'=>'Slug field is required',
            'slug.string'=>'Slug field must be of String type',

            'meta_keyword.string'=>'Meta keyword must be of string type',
            'meta_description.string'=>'Meta description must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
