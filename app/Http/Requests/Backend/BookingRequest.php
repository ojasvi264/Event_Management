<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'name' => 'required|max:191|string|unique:categories',
                //.(request()->method()=="POST"?'':',name,'.$this->id),
            'email'=>'required|string|max:191',
            'location' => 'required|string',
            //'date' => 'date|max:191|string|unique:categories'.(request()->method()=="POST"?'':',slug,'.$this->id),
            'meta_keyword' => 'string|max:191',
            'meta_description' => 'string|max:191',
        ];
    }
    function messages()
    {
        return[
            'name.unique'=>'Name must be unique',
            'name.required'=>'Name field is required',
            'name.string'=>'Name field must be of String type',

            'email.required'=>'Please Enter Route',
            'email.string'=>'Route must be of string type',

            'location.required'=>'Slug field is required',
            'location.string'=>'Slug field must be of String type',

            'meta_keyword.string'=>'Meta keyword must be of string type',
            'meta_description.string'=>'Meta description must be of string type',
        ];
    }
}
