<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Propaganda;

use Apemesp\Apemesp\Models\PropagandaAtiva;

use DB;

class PropagandaRepository
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
				$propaganda = new Propaganda;
        $propaganda->titulo = $request->titulo;
        $propaganda->conteudo = $request->conteudo;
        $propaganda->created_at = $this->getData();
				$propaganda->updated_at = $this->getData();
        $propaganda->save();
        return $propaganda->id;
	}

	public function updateImagem($nomeArquivo, $id)
	{
		Propaganda::where('id', $id)->update(['imagem' => $nomeArquivo ]);
	}

	public function updatePropagandaAtiva($quantidade)
	{
		PropagandaAtiva::where('id', '=', 1)->update(['quantidade' => $quantidade ]);
	}

	public function listAll()
	{
		return Propaganda::select('*')->orderBy('id', 'desc')->paginate(5);
	}

	public function getPropaganda($id)
	{
		return Propaganda::select('*')->where('id', '=', $id)->get();
	}

	public function getPropagandasAtivas()
	{
		//Esta tabela possui somente esta linha onde está a quantidade
		return PropagandaAtiva::select('quantidade')->where('id','=',1)->get();
	}

	public function update($request, $id)
	{
		Propaganda::where('id', $id)
						->update([
								'titulo' => $request->titulo,
								'link' => $request->link,
								'imagem' => $request->imagem,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$propaganda = Propaganda::find($id);
		$propaganda->delete();
	}




}
