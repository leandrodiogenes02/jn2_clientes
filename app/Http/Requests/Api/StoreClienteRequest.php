<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClienteRequest extends FormRequest {
    public function rules(): array {
        return [
            'nome'        => [
                'required',
                'string',
                'max:255',
            ],
            'telefone'    => [
                'required',
                'string',
                'digits_between:10,11',
            ],
            'cpf'         => [
                'required',
                'string',
                'cpf',
                Rule::unique('clientes', 'cpf'),
            ],
            'placa_carro' => [
                'required',
                'max:8',
                'placa_veiculo',
                Rule::unique('clientes', 'placa_carro'),
            ],
        ];
    }

    public function bodyParameters() {
        return [
            'nome'        => [
                'example'     => "Edson Luiz da Costa",
                'description' => 'Nome completo do cliente.',
            ],
            'telefone'    => [
                'description' => 'Somente números, sem mascara e com o código de área.',
                'example'     => '84996558847',
            ],
            'cpf'         => [
                'description' => 'Somente números, sem mascara. Precisa ser um cpf válido',
                'example'     => '22427595071',
            ],
            'placa_carro' => [
                'example' => 'QRF-3588',
            ],
        ];
    }
}
