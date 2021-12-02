<?php

namespace Tests\Feature\Api;

use App\Models\Cliente;
use Tests\TestCase;

class ClienteControllerTest extends TestCase {

    public function test_store() {

        $response = $this->post('api/cliente', [
            'nome'        => 'teste',
            'cpf'         => '57931664086',
            'telefone'    => '84998556655',
            'placa_carro' => 'JRV6289',
        ]);

        $response->assertCreated();

        $this->assertDatabaseHas('clientes', [
            'nome'        => 'teste',
            'cpf'         => '57931664086',
            'telefone'    => '84998556655',
            'placa_carro' => 'JRV6289',
        ]);
    }

    public function test_update() {

        $cliente = Cliente::factory()->create();

        $response = $this->put("api/cliente/{$cliente->id}", [
            'nome'        => 'teste updated',
            'cpf'         => '57931664086',
            'telefone'    => '84998556655',
            'placa_carro' => 'JRV6289',
        ]);

        $response->assertSuccessful();

        $this->assertDatabaseHas('clientes', [
            'id'          => $cliente->id,
            'nome'        => 'teste updated',
            'cpf'         => '57931664086',
            'telefone'    => '84998556655',
            'placa_carro' => 'JRV6289',
        ]);
    }

    public function test_show() {
        $cliente = Cliente::factory()->create();

        $response = $this->get("api/cliente/{$cliente->id}");

        $response->assertSuccessful();
        $response->assertJson([
            'data' => [
                'id'          => $cliente->id,
                'nome'        => $cliente->nome,
                'cpf'         => $cliente->cpf,
                'telefone'    => $cliente->telefone,
                'placa_carro' => $cliente->placa_carro,
            ],
        ]);
    }

    public function test_destroy() {
        $cliente = Cliente::factory()->create();

        $response = $this->delete("api/cliente/{$cliente->id}");

        $response->assertSuccessful();
        $this->assertDatabaseMissing('clientes', [
            'id'          => $cliente->id,
            'nome'        => $cliente->nome,
            'cpf'         => $cliente->cpf,
            'telefone'    => $cliente->telefone,
            'placa_carro' => $cliente->placa_carro,
        ]);
    }
}
