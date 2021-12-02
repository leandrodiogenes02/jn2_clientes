<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ScribeDocsSeeder extends Seeder {
    public function run() {
        Cliente::factory()->create(['placa_carro' => 'QRV-5599']);
        Cliente::factory()->create(['placa_carro' => 'JNV-3588']);
        Cliente::factory()->count(10)->create();
    }
}
