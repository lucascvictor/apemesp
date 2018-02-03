<?php

namespace Apemesp\Apemesp\Classes;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Apemesp\Apemesp\Models\DadosPessoais;


/**
 * Class name Associado
 */
class Associado 
{
    public function verificaCPF($cpf, $id=0)
    {
        $lReturn = true;
        // Verifiva se o número digitado contém todos os digitos
        $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            return !$lReturn;
        } else {   // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
    
                $d = ((10 * $d) % 11) % 10;
    
                if ($cpf{$c} != $d) {
                    return !$lReturn;
                }
            }
        }

    if ($lReturn) {

        
        if ($id == 0) { 
            $numero = DadosPessoais::where('cpf', $cpf)->select('cpf')->get();
        } else { 
            $numero = DadosPessoais::where([['cpf', '=', $cpf],['id', '=', $id]])->select('cpf')->get();
        }
        
        if (!empty($numero[0])) {
                if ($numero[0]->cpf == $cpf) {
                    return !$lReturn;
                } 
            } else {
                return $lReturn;
            }
        }

    }
}
