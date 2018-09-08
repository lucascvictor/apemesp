<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Nacionalidade;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\DadosProfissionais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\Estado;

use Apemesp\Apemesp\Models\Cidade;

use DB;

class AssociadoRepository
{

	protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = date("d-m-Y H:i:s");
	}

	public function getAssociadoIndex()
	{
		return DB::table('dados_pessoais')
		->select('dados_pessoais.*')
		->orderBy('dados_pessoais.name', 'asc')->paginate(10);
	}

	public function orderByUpdate()
	{
		return DB::table('dados_pessoais')
		->join('aditional_users_data', 'aditional_users_data.id_user', '=', 'dados_pessoais.id_user')
		->select('dados_pessoais.*', 'aditional_users_data.updated_at')
		->orderBy('aditional_users_data.updated_at', 'asc')->paginate(10);
	}

	public function getAssociado($id)
	{
		return DadosPessoais::where('id_user',$id)->select("*")->get()->first();
	}

	public function getNacionalidades()
	{
		return Nacionalidade::all();
	}

	public function getEstados()
	{
		return Estado::all();
	}

	public function getCidades($id = "")
	{
		if(empty($id)) {
			return Cidade::all();
		} else {
			return Cidade::where('id', $id)->select('id', 'nome')->get()->first();
		}
	}

	public function search($request)
	{
		$query = "%" . $request->input('q') . "%";
		return DB::table('dados_pessoais')
		->join('users', 'dados_pessoais.id_user', '=', 'users.id')
		->where('dados_pessoais.name', 'LIKE', $query)
		->where('users.id_perfil','<>','2')
		->where('users.id_perfil','<>','1')
		->select('dados_pessoais.id','dados_pessoais.id_user','dados_pessoais.name', 'dados_pessoais.cpf', 'dados_pessoais.tel_celular')
		->orderBy('name', 'asc')
		->paginate(6);
	}

	public function getDadosProfissionais($id)
	{
		return DadosProfissionais::where('id_user', $id)->select("*")->get();
	}

	public function getDadosAcademicos($id)
	{
		return FormacoesAcademicas::where('id_usuario', $id)->select("*")->get();
	}

}