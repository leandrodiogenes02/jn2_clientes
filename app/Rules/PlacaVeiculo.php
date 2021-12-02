<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PlacaVeiculo implements Rule {

    /**
     * Valida se o formato de placa de um veículo está correto.
     *
     * @param string $attribute
     * @param string $value
     * @return boolean
     */

    public function passes($attribute, $value) {
        return preg_match('/^[a-zA-Z]{3}\-?[0-9][0-9a-zA-Z][0-9]{2}$/', $value) > 0;
    }


    public function message() {
        return 'O campo :attribute não possui um formato válido de uma placa de veículo.';
    }
}
