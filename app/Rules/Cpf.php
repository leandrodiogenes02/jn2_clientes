<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Cpf implements Rule {
    /**
     * Valida se o CPF é válido
     *
     * @param string $attribute
     * @param string $value
     * @return boolean
     */
    public function passes($attribute, $value) {
        
        if(strlen($value) !== 11 || preg_match("/^{$value[0]}{11}$/", $value)) {
            return false;
        }

        $c = preg_replace('/\D/', '', $value);

        if(strlen($c) !== 11 || preg_match("/^{$c[0]}{11}$/", $c)) {
            return false;
        }

        for($s = 10, $n = 0, $i = 0; $s >= 2;) {
            $n += $c[$i++] * $s--;
        }

        if($c[9] !== (string)((($n %= 11) < 2) ? 0 : 11 - $n)) {
            return false;
        }

        for($s = 11, $n = 0, $i = 0; $s >= 2;) {
            $n += $c[$i++] * $s--;
        }

        return !($c[10] !== (string)((($n %= 11) < 2) ? 0 : 11 - $n));
    }

    public function message() {
        return "Cpf inválido";
    }
}
