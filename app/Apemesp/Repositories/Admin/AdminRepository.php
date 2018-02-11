<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Page;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\DadosProfissionais;

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


	public function updateEmail()
	{

	}

	public function updatePassword()
	{
		
	}


}
