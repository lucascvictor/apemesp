<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;


use Apemesp\Apemesp\Models\RepresentanteLegal;

use DB;

class RepresentanteLegalRepository
{

	public function getRepresentante()
	{
		$representante = RepresentanteLegal::select('*')->get()->first();
		if($representante){
			return $representante;
		} else {
			$representante = new RepresentanteLegal;
			return $representante;
		}

    }
    
    public function listRepresentanteLegal()
	{
		return DB::table('responsavel_legal')->select('*')->get();
	}

	public function store($request, $nomeArquivo)
	{
		$table = new RepresentanteLegal;
        $table->nome = $request->banco;
        $table->estado_civil = $request->agencia;
        $table->endereco = $request->conta;
        $table->profissao = $request->titular;
        $table->rg = $request->documento;
		$table->cpf = $request->descricao;
		$table->gestao = $request->gestao;
		$table->assinatura = $nomeArquivo;
        $table->save();
	}

	public function update($request)
	{
		RepresentanteLegal::where('id', '=', 1)
		->update([
			'nome' => $request->nome,
			'estado_civil' => $request->estado_civil,
			'endereco' => $request->endereco,
			'profissao' => $request->profissao,
			'rg' => $request->rg,
			'cpf' => $request->cpf,
			'gestao' => $request->gestao,
		]);
	}

	public function updateImagem($id, $nomeArquivo)
	{
		RepresentanteLegal::where('id', '=', $id)
		->update([
			'assinatura' => $nomeArquivo
		]);
	}


}
