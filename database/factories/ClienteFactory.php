<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ClienteFactory extends Factory {
    protected $model = Cliente::class;

    public function definition(): array {
        return [
            'nome'        => $this->faker->name(),
            'telefone'    => $this->faker->phoneNumberCleared(),
            'cpf'         => $this->faker->cpf(false),
            'placa_carro' => mb_strtoupper(Str::random(3) . "-" . rand(1111, 9999)),
        ];
    }
}
