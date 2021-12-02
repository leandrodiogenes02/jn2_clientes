<?php

namespace Tests\Feature\Api;

use App\Models\Cliente;
use Tests\TestCase;

class ConsultaFinalPlacaControllerTest extends TestCase {

    public function test_consulta() {

        $cliente = Cliente::factory()->create([
            'placa_carro' => 'QRV-3588',
        ]);

        Cliente::factory()->create([
            'placa_carro' => 'QRV-3585',
        ]);

        $response = $this->get("api/consulta/final-placa/8");
        $response->assertSuccessful();
        $response->assertJson([
            'data' => [
                [
                    'id'          => $cliente->id,
                    'nome'        => $cliente->nome,
                    'cpf'         => $cliente->cpf,
                    'telefone'    => $cliente->telefone,
                    'placa_carro' => $cliente->placa_carro,
                ],
            ],
        ]);

        $this->assertCount(1, $response->getOriginalContent()['data']);
    }
}
