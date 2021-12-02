<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

/** Lista clientes filtrados através do ultimo número da placa do veículo do cliente */
class ConsultaFinalPlacaController extends Controller {
    /**
     * Consultar clientes pelo ultimo número da placa
     *
     * Aqui você pode consultar no banco de dados, os clientes cadastrados utilizando o ultimo número da placa do carro deles.
     * @urlParam {$numero} numero required Informe o ultimo número da placa que quer pesquisar. (No máximo 1 numero). Example: 9
     */
    public function __invoke($numero) {
        $numero = substr($numero, -1);
        $result = Cliente::where('placa_carro', 'LIKE', "%{$numero}")->get();
        return response()->json(['message' => 'Consulta realizada com sucesso', 'data' => $result]);
    }
}
