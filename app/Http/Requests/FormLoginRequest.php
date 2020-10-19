<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email' => 'email|required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'E-mail e/ou senha inválidos',
            'email.required' => 'Informe seu e-mail',
            'password.required' => 'Digite uma senha'
        ];
    }
}
