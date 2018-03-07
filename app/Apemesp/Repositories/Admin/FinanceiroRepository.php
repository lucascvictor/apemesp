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
		->join('status_anuidade', 'status_anuidade.id', '=', 'anuidades.status')
		->select('anuidades.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_anuidade.*')
		->where('anuidades.id_user', '=', $id_user)
		->orderBy('ano', 'asc')
		->get();
	}

	public function getAssociados()
	{
		return DB::table('dados_pessoais')
		->select('name', 'cpf', 'id_user')
		->orderby('name')
		->paginate(10);
	}

	public function search($request)
	{
		$query = "%" . $request->input('q') . "%";
		return DadosPessoais::select('id','name', 'cpf', 'tel_celular')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

}