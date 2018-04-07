<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\LinhaDoTempo;

use DB;

class LinhaDoTempoRepository
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
		$linhaDoTempo = new LinhaDoTempo;
        $linhaDoTempo->titulo = $request->titulo;
        $linhaDoTempo->conteudo = $request->conteudo;
        $linhaDoTempo->created_at = $this->getData();
				$linhaDoTempo->updated_at = $this->getData();
        $linhaDoTempo->save();
        return $linhaDoTempo->id;
	}

	public function updateImagem($nomeArquivo, $id)
	{
		LinhaDoTempo::where('id', $id)->update(['imagem' => $nomeArquivo ]);
	}
	public function listAll()
	{
		return LinhaDoTempo::select('*')->orderBy('id', 'desc')->paginate(10);
	}

	public function getItem($id)
	{
		return LinhaDoTempo::select('*')->where('id', '=', $id)->first();
	}

	public function updateItem($request, $id)
	{
		LinhaDoTempo::where('id', $id)
						->update([
								'ano' => $request->ano,
								'acontecimentos' => $request->acontecimentos,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$linhaDoTempo = LinhaDoTempo::find($id);
		$linhaDoTempo->delete();
	}




}
