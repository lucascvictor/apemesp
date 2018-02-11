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

	public function list()
	{
		return Comissao::select('*')->paginate(6);
	}


}
