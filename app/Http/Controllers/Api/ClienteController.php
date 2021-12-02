<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreClienteRequest;
use App\Http\Requests\Api\UpdateClienteRequest;
use App\Models\Cliente;
use App\Services\Api\Cliente\StoreClienteService;
use App\Services\Api\Cliente\UpdateClienteService;
use function response;

class ClienteController extends Controller {

    /**
     * Cadastro de novo cliente
     */
    public function store(StoreClienteRequest $request) {
        $result = (new StoreClienteService(
            $request->post('nome'),
            $request->post('telefone'),
            $request->post('cpf'),
            $request->post('placa_carro'),
        ))->make();

        return response()->json(['message' => 'Cliente cadastrado com sucesso.', 'data' => $result], 201);
    }

    /**
     * Edição de um cliente já existente
     * @urlParam {$id} id required ID do cliente a ser editado. Example: 1
     */
    public function update(Cliente $id, UpdateClienteRequest $request) {
        $result = (new UpdateClienteService($id, $request->validated()))->make();
        return response()->json(['message' => 'Cliente atualizado com sucesso.', 'data' => $result]);
    }

    /**
     * Consulta de dados de um cliente
     * @urlParam {$id} id required ID do cliente a ser consultado. Example: 1
     */
    public function show(Cliente $id) {
        return response()->json(['message' => 'Consulta realizada com sucesso.', 'data' => $id]);
    }

    /**
     * Deletar um cliente cadastrado
     * @urlParam {$id} id required ID do cliente a ser deletado. Example: 1
     */
    public function destroy(Cliente $id) {
        $id->delete();
        return response()->json(['message' => 'Cliente deletado com sucesso.']);
    }
}
