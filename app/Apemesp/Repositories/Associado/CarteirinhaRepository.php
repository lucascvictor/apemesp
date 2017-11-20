<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\Certeirinha;

use Apemesp\Apemesp\Models\Financeiro;

use Apemesp\Apemesp\Repository\Certeirinha;

use Apemesp\Apemesp\Repository\FinanceiroRepository;

use DB;

class CarterinhaRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

}
