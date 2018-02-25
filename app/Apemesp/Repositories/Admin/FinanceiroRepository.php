<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Anuidade;

use DB;

class FinanceiroRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Post::where('titulo', 'like', $busca)->get();
	}

	public function getAssociado($id_user)
	{
		return DB::table('anuidades')
		->join('dados_pessoais', 'anuidades.id_user', '=', 'dados_pessoais.id_user')
		->select('anuidades.*', 'dados_pessoais.name', 'dados_pessoais.cpf')
		->where('anuidades.id_user', '=', $id_user)
		->orderBy('name', 'asc')
		->get();
	}

	public function getAssociados()
	{
		return DB::table('dados_pessoais')
		->select('name', 'cpf', 'id_user')
		->orderby('name')
		->paginate(10);
	}

}