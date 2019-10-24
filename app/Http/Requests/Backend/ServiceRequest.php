<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:services'.(request()->method()=="POST"?'':',name,'.$this->id),
            'title' => 'string|max:191',
            'description' => 'string|max:191',
            'photo'=>'required|max:500',
        ];
    }

    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'title.string'=>'Title must be of string type',

            'description.string'=>'Meta description must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
