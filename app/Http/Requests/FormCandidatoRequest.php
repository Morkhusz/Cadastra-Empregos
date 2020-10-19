<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCandidatoRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:4',
            'email' => 'email|required',
            'telefone' => 'required',
            'file' => 'file',
            'motivo' => 'required|min:10',
            'conhece' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Informe um nome',
            'nome.min' => 'Informe um nome com no minímo 3 letras',
            'sobrenome.required' => 'Informe um sobrenome',
            'sobrenome.min' => 'Informe um sobrenome com no minímo 4 letras',
            'email.email' => 'Informe um email válido',
            'email.required' => 'Campo email necessário',
            'telefone.required' => 'Informe um telefone de contato',
            'file.file' => 'Anexe um arquivo de curriculo',
            'motivo.required' => 'Informe um motivo para sua contratação!',
            'motivo.min' => 'Informe um motivo com no minímo 10 letras',
            'conhece.required' => 'Informe se conhece alguem ou não',
            'conhece.min' => 'Informe se conhece alguem ou não, minímo 4 letras',
        ];
    }
}
