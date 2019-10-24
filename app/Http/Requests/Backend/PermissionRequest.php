<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'route' => 'required|string',
        ];
    }

    function messages()
    {
        return[
            'name.required'=>'Please Enter Your Name',
            'name.unique'=>'Name must be unique',
            'name.string'=>'Name must be of string type',
            'route.required'=>'Please Enter route',
            'route.string'=>'Route must be of string type',
        ];
    }
}
