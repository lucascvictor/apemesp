<?php

namespace App\Apemesp\Repositories\Admin;

use App\Http\Requests;

use App\Apemesp\Models\Nacionalidade;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\Estado;

use App\Apemesp\Models\Cidade;

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
		return DB::table('dados_pessoais')->select('*')->orderBy('name', 'asc')->paginate(10);
	}

	public function getAssociado($id)
	{
		return DadosPessoais::find($id);
	}

	public function getNacionalidades()
	{
		return Nacionalidade::all();
	}

	public function getEstados()
	{
		return Estado::all();
	}

	public function getCidades()
	{
		return Cidade::all();
	}

	public function search($request)
	{
		$query = "%" . $request->input('q') . "%";
		return DadosPessoais::select('id','name', 'cpf', 'tel_celular')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

}