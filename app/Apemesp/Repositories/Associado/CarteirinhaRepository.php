<?php

namespace App\Apemesp\Repositories\Associado;


use App\Http\Requests;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\FormacoesAcademicas;

use App\Apemesp\Models\Certeirinha;

use App\Apemesp\Models\Financeiro;

use App\Apemesp\Repository\Certeirinha;

use App\Apemesp\Repository\FinanceiroRepository;

use DB;

class CarterinhaRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

}
