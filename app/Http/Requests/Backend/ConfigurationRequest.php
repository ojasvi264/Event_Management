<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:configurations'.(request()->method()=="POST"?'':',name,'.$this->id),
            'email'=>'required|string|max:191',
            'phone' => 'required|integer',
            'website' => 'string|max:191',
            'address' => 'string|max:191',
            'count' => 'integer|max:191',
            'googlemap_link' => 'string|max:191',
            'fav_icon' => 'string|max:191',
            'fb_link' => 'string|max:191',
            'twitter_link' => 'string|max:191',
            'google_link' => 'string|max:191',
            'vimeo_link' => 'string|max:191',
            'photo'=>'required|max:500',
        ];
    }
    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'email.required'=>'Please Enter Email',
            'email.string'=>'Email must be of string type',

            'phone.required'=>'Phone field is required',
            'phone.string'=>'Phone field must be of integer type',

            'count.string'=>'Count field must be of integer type',

            'googlemap_link.string'=>'Google map link must be of string type',

            'website.string'=>'Website must be of string type',

            'address.string'=>'Address must be of string type',

            'fav_icon.string'=>'Fav Icon must be of string type',

            'fb_link.string'=>'Facebook link must be of string type',

            'twitter_link.string'=>'Twitter link must be of string type',

            'google_link.string'=>'Google link must be of string type',

            'vimeo_link.string'=>'Vimeo link must be of string type',

            'photo.required'=>'Image field is required',
            'photo.file'=>'Photo file must be file type',
        ];
    }
}
