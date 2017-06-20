<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\Page;

use App\Apemesp\Models\User;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\DadosProfissionais;

use Auth;

use DB;

class AdminRepository
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

	public function getDadosPessoais($id_user)
	{
		return DadosPessoais::find($id_user);
	}

	public function getDadosProfissionais($id_user)
	{
		return DadosProfissionais::find($id_user);
	}


	public function getPaginasIndex()
	{
		return Page::all();
	}

	public function editPagina($id)
	{
		return Page::find($id);
	}

	public function updatePagina($request, $id)
	{
		Page::where('id', $id)
            ->update([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'id_user' => Auth::user()->id,
                'body' => $request->conteudo,
                'updated_at' => $this->getData()
                ]);
	}


}
