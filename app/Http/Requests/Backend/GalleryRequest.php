<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'title' => 'string|max:255',
            'rank' => 'required|integer',
            'photo'=>'required|max:500',
        ];
    }
    function messages()
    {
        return[
            'title.required'=>'Title field is required',
            'title.string'=>'Title field must be of String type',

            'rank.required'=>'Rank field is required',
            'rank.integer'=>'Rank field must be of integer type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
