<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormVagaRequest extends FormRequest
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
            'vaga' => 'required|min:4',
            'pais' => 'required',
            'cidade' => 'required',
            'estado' => 'required|min:4',
            'departamento' =>  'required',
            'tipo' => 'required',
            'descricao' => 'required|min:20'
        ];
    }

    public function messages()
    {
        return  [
            'vaga.required' => 'O campo Nome da Vaga precisa ser preenchido.',
            'vaga.min' => 'informe um nome válido acima de 4 caractere.',
            'pais.required' => 'Selecione um país onde vive.',
            'cidade.required' => 'Informe a cidade onde vive.',
            'estado.required' => 'Informe o estado onde vive.',
            'estado.min' => 'Informe no minímo 4 caracteres.',
            'departamento.required' => 'Informe um departamento.',
            'tipo.required' => 'Informe o tipo da vaga.',
            'descricao.required' => 'Escrava uma descrição da vaga.',
            'descricao.required' => 'Minímo 20 caracteres.',
        ];
    }
}
