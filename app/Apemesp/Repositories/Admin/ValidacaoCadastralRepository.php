<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ValidacaoCadastral;

use DB;

class ValidacaoCadastralRepository
{

	public function historico($id)
	{
        return ValidacaoCadastral::where('id_user', $id)->all();
	}

	public function status($id_user)
	{
		return DB::table('anuidades')
		->join('dados_pessoais', 'anuidades.id_user', '=', 'dados_pessoais.id_user')
		->join('status_anuidade', 'status_anuidade.id', '=', 'anuidades.status')
		->select('anuidades.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_anuidade.*')
		->where('anuidades.id_user', '=', $id_user)
		->orderBy('ano', 'asc')
		->get();
	}

	public function email($request)
	{
		return DB::table('emails_validacao');
	}

}