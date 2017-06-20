<?php

namespace App\Apemesp\Repositories\Associado;


use App\Http\Requests;

use App\Apemesp\Models\Nacionalidade;

use App\Apemesp\Models\Cidade;

use App\Apemesp\Models\Estado;

use App\Apemesp\Models\User;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\FormacoesAcademicas;

use App\Apemesp\Models\UsuarioCategoria;

use DB;

class AssociadoRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

}