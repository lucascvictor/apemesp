<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\Certeirinha;

use Apemesp\Apemesp\Models\Financeiro;

use Apemesp\Apemesp\Models\Anuidade;


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
