<?php

namespace App\Services\Api\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Arr;

class UpdateClienteService {

    private Cliente $cliente;
    private array   $attributes;

    public function __construct(Cliente $cliente, array $attributes = []) {
        $this->cliente    = $cliente;
        $this->attributes = Arr::only($attributes, [
            'nome',
            'cpf',
            'telefone',
            'placa_carro',
        ]);
    }

    public function make() {
        $this->cliente->update($this->attributes);
        return $this->cliente->refresh();

    }
}
