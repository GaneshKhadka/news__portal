<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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
            'username' => 'required | min:6',
            'email' => 'required | email | unique:users,email,'.$this->request->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please, add username.',
            'email.unique' => 'Please, add username.',
        ];
    }
}
