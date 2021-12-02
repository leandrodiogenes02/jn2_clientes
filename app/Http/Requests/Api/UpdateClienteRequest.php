<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClienteRequest extends FormRequest {

    private $route_cliente_id;

    protected function prepareForValidation() {
        $this->route_cliente_id = $this->route('id') ? $this->route('id')->id : null;
    }

    public function rules(): array {
        return [
            'nome'        => [
                'string',
                'max:255',
            ],
            'telefone'    => [
                'string',
                'digits_between:10,11',
            ],
            'cpf'         => [
                'cpf',
                'string',
                Rule::unique('clientes', 'cpf')->ignore($this->route_cliente_id),
            ],
            'placa_carro' => [
                'max:8',
                'placa_veiculo',
                Rule::unique('clientes', 'placa_carro')->ignore($this->route_cliente_id),
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
