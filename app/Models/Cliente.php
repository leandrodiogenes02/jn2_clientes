<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    use HasFactory;

    protected $table      = 'clientes';
    protected $guarded    = false;
    public    $timestamps = false;


    /** Metodo para capturar o valor antes de ser alterado, podendo assim manipular o valor da entrada do atributo */
    public function setPlacaCarroAttribute($value) {
        $this->attributes['placa_carro'] = mb_strtoupper($value);
    }

}
