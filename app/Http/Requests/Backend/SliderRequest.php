<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required|max:191|string',
            'description' => 'required|string|max:191',
            'link' => 'string|max:191',
            'photo'=>'required|max:500',
        ];
    }

    function messages()
    {
        return[
            'title.required'=>'Name field is required',
            'title.string'=>'Name field must be of String type',

            'description.required'=>'Description field is required',
            'description.string'=>'Description field must be of String type',

            'link.string'=>'Link must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Photo file must be file type',
        ];
    }
}
