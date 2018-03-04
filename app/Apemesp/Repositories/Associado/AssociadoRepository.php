<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Nacionalidade;

use Apemesp\Apemesp\Models\Cidade;

use Apemesp\Apemesp\Models\Estado;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\UsuarioCategoria;

use DB;

class AssociadoRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

}