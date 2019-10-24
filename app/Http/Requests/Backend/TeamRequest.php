<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'fb_link' => 'string|max:191',
            'twitter_link' => 'string|max:191',
            'linkedin_link' => 'string|max:191',
            'designation' => 'required|max:191|string',
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

            'designation.required'=>'Designation field is required',
            'designation.string'=>'Designation field must be of String type',

            'fb_link.string'=>'Facebook link must be of string type',

            'twitter_link.string'=>'Twitter link must be of string type',

            'linkedin_link.string'=>'Linkedin link must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Image file must be file type',
        ];
    }
}
