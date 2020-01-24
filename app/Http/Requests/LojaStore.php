<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LojaStore extends FormRequest
{
    protected $errorBag = 'lojaStore';
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
            "nome" => "required|string|max:150",
            "cnpj" => "required|string|size:18",
            "cep"  =>  "required|string|size:8",
            "estado" => "required|string|max:50",
            "cidade" => "required|string|max:50",
            "bairro" => "required|string|max:50",
            "logradouro" => "required|string|max:50",
            "numero" => "required|string|size:255",
            "complemento" => "required|string|max:50"
        ];
    }
}
