<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Nacionalidade;

use Apemesp\Apemesp\Models\DadosPessoais;

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
		return DadosPessoais::select('id','name', 'cpf', 'tel_celular')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

}