<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoStore extends FormRequest
{
    protected $errorBag = 'veiculoStore';

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
            "placa" => "required|size:8",
            "chassi" => "required|alpha_num|size:16",
            "marcaId" => "required|numeric",
            "modeloId" => "required|numeric",
            "anoFabricacao" => "required|numeric|date_format:Y",
            "anoModelo" => "required|numeric|date_format:Y",
        ];
    }
}
