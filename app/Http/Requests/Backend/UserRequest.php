<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role_id'=>'required|integer',
            'name'=>'string|max:191|required|unique:permissions'.(request()->method()=="POST"?'':',name,'.$this->id),
            'password'=>'required|string|max:191',
            'email'=>'required|string|max:191',
        ];

        function messages()
        {
            return [
                'role_id.required'=>'Please Enter Role Id',
                'role_id.integer'=>'Role Id must be of integer type',
                'name.required'=>'Please Enter Your Name',
                'name.unique'=>'Name must be unique',
                'name.string'=>'Name must be of string type',
                'email.required'=>'Please Enter Route',
                'email.string'=>'Route must be of string type',
                'password.required'=>'Please Enter Route',
                'password.string'=>'Route must be of string type',
            ];
        }
    }
}
