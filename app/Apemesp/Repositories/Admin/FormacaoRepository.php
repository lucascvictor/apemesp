<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Formacao;

use DB;

class FormacaoRepository
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
				$formacao = new Formacao;
        $formacao->titulo = $request->titulo;
        $formacao->conteudo = $request->conteudo;
        $formacao->created_at = $this->getData();
				$formacao->updated_at = $this->getData();
        $formacao->save();
        return $formacao->id;
	}

	public function updateImagem($nomeArquivo, $id)
	{
		Formacao::where('id', $id)->update(['imagem' => $nomeArquivo ]);
	}
	public function listAll()
	{
		return Formacao::select('*')->orderBy('id', 'desc')->paginate(5);
	}

	public function getFormacao($id)
	{
		return Formacao::select('*')->where('id', '=', $id)->get();
	}

	public function update($request, $id)
	{
		Formacao::where('id', $id)
						->update([
								'titulo' => $request->titulo,
								'conteudo' => $request->conteudo,
								'imagem' => $request->imagem,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$formacao = Formacao::find($id);
		$formacao->delete();
	}




}
