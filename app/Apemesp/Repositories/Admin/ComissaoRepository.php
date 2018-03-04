<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Comissao;

use DB;

class ComissaoRepository
{


	public function __construct()
	{
		$this->setDate();
	}

	public function setDate()
	{
		$this->data = date("Y-m-d H:i:s");
	}

	public function getDate()
	{
		return $this->data;
	}

	public function store($comiss, $atribuicoes)
	{
		$comissao = new Comissao;
        $comissao->comissao = $comiss;
        $comissao->atribuicoes = $atribuicoes;
        $comissao->save();
        return $comissao->id;
	}

	public function listToConfig()
	{
		return Comissao::select('*')->orderby('id', 'desc')->paginate('6');
	}

	public function list()
	{
		return Comissao::select('*')->get();
	}

	public function getComissao($id)
	{
		return Comissao::where('id', $id)->get()->first();
	}

	public function updateComissao($id, $request)
	{
		Comissao::where('id', $id)->update(['comissao' => $request->comissao,'atribuicoes' => $request->atribuicoes]);
	}


}
