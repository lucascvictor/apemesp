<?php

namespace Apemesp\Apemesp\Classes;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Apemesp\Apemesp\Models\DadosPessoais;
use Auth;
use DB;


/**
 * Class name Associado
 */
class Associado 
{
    public function verificaCPF($cpf, $id=0, $registro=false)
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
        
        if ($id){
            $numero = DadosPessoais::where('id','=', $id, 'and','cpf','=', $cpf)->select('id', 'cpf')->get()->first();
        } else { 
            $numero = DadosPessoais::where('cpf', $cpf)->select('cpf')->get()->first();
        }
       
        if (empty($numero)) {
                if (isset($numero->id))
                if ($id == $numero->id) {
                    return $lReturn;
                } elseif (Auth::user()->id_perfil == 1) {
                    return $lReturn;
                }

                return !$lReturn;
            } else {
                if ($id == $numero->id && $cpf == $numero->cpf) {
                    return $lReturn;
                } elseif (Auth::user()->id_perfil == 1) {
                    return $lReturn;
                } elseif ($registro) {
                    return $lReturn;
                }

                return !$lReturn;
            }
        }

    }

    
    public function getEmailByCpf($cpf)
	{
		return DB::table('dados_pessoais')
		->join('users', 'dados_pessoais.id_user', '=', 'users.id')
        ->select('users.email')
        ->where('dados_pessoais.cpf', '=', $cpf)
        ->get();
	}
}
