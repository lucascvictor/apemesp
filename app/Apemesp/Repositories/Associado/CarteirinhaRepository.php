<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\Certeirinha;

use Apemesp\Apemesp\Models\Financeiro;

use Apemesp\Apemesp\Models\Carteirinha;

use Apemesp\Apemesp\Repository\FinanceiroRepository;

use DB;

class CarteirinhaRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

	public function destroy($id)
	{
		return Certeirinha::where('id', $id)->delete();
	}

	public function getStatus($id)
	{
		return Carteirinha::where('id', $id)->select('status')->get()->first();
	}

}
