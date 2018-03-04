<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Conquista;

use DB;

class ConquistaRepository
{


	public function __construct()
	{
		$this->setData();
	}

	public function setData()
	{
		$this->data = date("Y-m-d H:i:s");
	}

	public function getData()
	{
		return $this->data;
	}

	public function store($request)
	{
		$conquista = new Conquista;
        $conquista->titulo = $request->titulo;
        $conquista->conteudo = $request->conteudo;
        $conquista->created_at = $this->getData();
		$conquista->updated_at = $this->getData();
        $conquista->save();
        return $conquista->id;
	}


	public function listAll()
	{
		return Conquista::select('*')->orderBy('id', 'desc')->paginate(10);
	}

	public function getConquista($id)
	{
		return Conquista::select('*')->where('id', '=', $id)->get();
	}

	public function update($request, $id)
	{
		Conquista::where('id', $id)
						->update([
								'titulo' => $request->titulo,
								'conteudo' => $request->conteudo,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$conquista = Conquista::find($id);
		$conquista->delete();
	}




}
