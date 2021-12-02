<?php

namespace App\Services\Api\Cliente;

use App\Models\Cliente;

class StoreClienteService {

    private string $nome;
    private string $telefone;
    private string $cpf;
    private string $placa_carro;

    public function __construct(string $nome, string $telefone, string $cpf, string $placa_carro) {
        $this->nome        = $nome;
        $this->telefone    = $telefone;
        $this->cpf         = $cpf;
        $this->placa_carro = $placa_carro;
    }

    public function make() {
        return Cliente::create([
            'nome'        => $this->nome,
            'telefone'    => $this->telefone,
            'cpf'         => $this->cpf,
            'placa_carro' => $this->placa_carro,
        ])->refresh();
    }
}
