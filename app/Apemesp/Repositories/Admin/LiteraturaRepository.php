<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Literatura;

use Apemesp\Apemesp\Models\IndicacaoLiteraria;

use DB;

class LiteraturaRepository
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
				$literatura = new Literatura;
        $literatura->titulo = $request->titulo;
        $literatura->conteudo = $request->conteudo;
        $literatura->created_at = $this->getData();
				$literatura->updated_at = $this->getData();
        $literatura->save();
        return $literatura->id;
	}

	public function updateImagem($nomeArquivo, $id)
	{
		Literatura::where('id', $id)->update(['imagem' => $nomeArquivo ]);
	}
	public function listAll()
	{
		return Literatura::select('*')->orderBy('id', 'desc')->paginate(10);
	}

	public function getLiteratura($id)
	{
		return Literatura::select('*')->where('id', '=', $id)->get();
	}

	public function update($request, $id)
	{
		Literatura::where('id', $id)
						->update([
								'titulo' => $request->titulo,
								'conteudo' => $request->conteudo,
								'imagem' => $request->imagem,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$literatura = Literatura::find($id);
		$literatura->delete();
	}

	public function getIndicacoes()
	{
		return IndicacaoLiteraria::all();
	}


}
