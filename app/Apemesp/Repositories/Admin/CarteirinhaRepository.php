<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Carteirinha;

use Apemesp\Apemesp\Models\StatusCarteirinha;

use Apemesp\Apemesp\Models\DadosBancarios;

use Apemesp\Apemesp\Models\DadosPessoais;

use DB;

class CarteirinhaRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Post::where('titulo', 'like', $busca)->get();
	}

	public function getAssociado($id_user)
	{
		return DB::table('carteirinhas')
		->join('dados_pessoais', 'carteirinhas.id_user', '=', 'dados_pessoais.id_user')
		->join('status_anuidade', 'status_anuidade.id', '=', 'carteirinhas.status')
		->select('carteirinhas.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_anuidade.*')
		->where('carteirinhas.id_user', '=', $id_user)
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

	public function getLancamento($id_user, $ano)
	{
		return DB::table('carteirinhas')
		->join('dados_pessoais', 'carteirinhas.id_user', '=', 'dados_pessoais.id_user')
		->join('status_anuidade', 'status_anuidade.id', '=', 'carteirinhas.status')
		->select('carteirinhas.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_anuidade.*')
		->where('carteirinhas.id_user', '=', $id_user)
		->where('carteirinhas.ano', '=', $ano)
		->first();
	}

	public function getDadosBancarios()
	{
		return DadosBancarios::select('*')->paginate(5);
	}

	public function storeCarteirinha($id_user, $request)
	{
		$comprovante =0;
		if($request->comprovante) {
			$comprovante =1;
		}
		$verificacao = Carteirinha::where('id_user', $id_user)->where('ano', $request->ano)->select('*')->get()->first();
		
		if($verificacao) {
			return false;
		} else {
			$anuidade = new Carteirinha;
			$anuidade->id_user = $id_user;
			$anuidade->ano = $request->ano;
			$anuidade->arq_enviado = $comprovante;
			$anuidade->arq_avaliado = 1;
			$anuidade->status = $request->status;
			$anuidade->save();
		}
		return $anuidade;
	}

	public function getCpf($id_user)
	{
		$dado = DadosPessoais::where('id_user', $id_user)->select('cpf')->get()->first();
		return $dado->cpf;
	}

	public function salvarAvaliacao($request)
	{
		Carteirinha::where('id_user', $request->id)->where('ano', $request->ano)
						->update([
								'status' => $request->status,
								'arq_avaliado' => 1
								]);
	}

	public function gravaArquivo($nomeArquivo, $ano, $id)
	{
		Carteirinha::where('id_user','=', $id,'and','ano','=',$ano)->update(['comprovante' => $nomeArquivo]);
	}

}