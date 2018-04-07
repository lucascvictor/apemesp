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

	public function storeIndicacao($request)
	{
			dd($request->file('imagem'));
			$indicacao = new IndicacaoLiteraria;
            $indicacao->imagem = $request->file('imagem');
            $indicacao->titutlo = $request->titulo;
            $indicacao->descricao= $request->descricao;
			$indicacao->nome = $request->nome;
			$indicacao->email = $request->email;
            $indicacao->save();
	}

	public function getIndicacoes()
	{
		return IndicacaoLiteraria::all();
	}
}