<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration {
    public function up() {
        Schema::create('clientes', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('telefone', 20);
            $table->string('cpf', 11);
            $table->string('placa_carro', 20);
        });
    }

    public function down() {
        Schema::dropIfExists('clientes');
    }
}
