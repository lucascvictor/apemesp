<?php

namespace App\Apemesp\Repositories\Associado;


use App\Http\Requests;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\FormacoesAcademicas;

use App\Apemesp\Models\Certeirinha;

use App\Apemesp\Models\Financeiro;

use App\Apemesp\Models\Anuidade;


use DB;

class FinanceiroRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

  public function getAnuidades($id_usuario)
	{
		return Anuidade::where('id_user', $id_usuario)->select('*')->get();
	}

}
