<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\LinhaDoTempo;

use Apemesp\Apemesp\Models\Literatura;

use Apemesp\Apemesp\Models\Material;

use Apemesp\Apemesp\Models\Page;

use Apemesp\Apemesp\Models\IndicacaoLiteraria;

use DB;

use Input;

class MusicoterapiaRepository
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


	public function getOquee()
	{
		return Page::find(3); //3 é o indice definido no seeder para esta página
	}

	public function getLiteratura()
	{
		return Literatura::where('id', '>', 0)->orderBy('titulo', 'asc')->paginate(3);
	}

	public function getLinhaDoTempo()
	{
		return LinhaDoTempo::where('id', '>=', 1)->orderBy('ano', 'asc')->get();
	}

	public function getMateriais()
	{
		return Material::where('id', '>', 0)->orderBy('titulo', 'asc')->paginate(4);
	}

	public function storeIndicacao($request, $imagem)
	{
			$destinationPath = base_path() . DIRECTORY_SEPARATOR . 'public/images/indicacoes/';

			$indicacao = new IndicacaoLiteraria;

            $indicacao->titulo = $request['titulo'];
            $indicacao->descricao= $request['descricao'];
			$indicacao->nome = $request['nome'];
			$indicacao->email = $request['email'];
			$indicacao->save();

			$fileName = "indicacao" . $indicacao->id . '.' . $imagem->getClientOriginalExtension();
			$imagem->move($destinationPath, $fileName);

			IndicacaoLiteraria::where('id', $indicacao->id )
       		 ->update([
            'imagem' => $fileName,
            'updated_at' => $this->getData()
            ]);

	}

	public function getIndicacoes()
	{
		return IndicacaoLiteraria::all();
	}
}