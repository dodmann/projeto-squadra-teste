<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class SistemaRequest extends FormRequest
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
        switch($this->method()) {
            case "POST": 
                return [
                    'descricao' => 'required|max:100',
                    'sigla' => 'required|max:10',
                    'emailAtendimento' => 'email|max:100',
                    'url' => 'max:50',
                ];
                break;
            case "PUT":
                return [
                    'descricao' => 'required|max:100',
                    'sigla' => 'required|max:10',
                    'url' => 'url|max:50',
                ];
                break;
            default:break;
        }
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Dados obrigatórios não informados.',
            'descricao.max' => 'Limite de caracteres atingido(100)',
            'sigla.required' => 'Dados obrigatórios não informados.',
            'sigla.max' => 'Limite de caracteres atingido(10)',
            'emailAtendimento.email' => 'E-mail inválido.',
            'emailAtendimento.max' => 'Limite de caracteres atingido(100)',
            'url.max' => 'Limite de caracteres atingido(100)',
           
        ];
    }
}