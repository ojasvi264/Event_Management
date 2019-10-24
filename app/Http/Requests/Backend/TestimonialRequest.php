<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name' => 'required|max:191|string',
            'rank' => 'required|integer',
            'title' => 'string|max:191',
            'description' => 'string|max:191',
            'designation' => 'required|string|max:191',
            'photo'=>'required|max:500',
        ];
    }

    function messages()
    {
        return[
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'rank.required'=>'Rank field is required',
            'rank.string'=>'Rank field must be of string type',

            'title.string'=>'Title must be of string type',

            'description.string'=>'Description must be of string type',

            'designation.required'=>'Designation field is required',
            'designation.string'=>'Designation must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
