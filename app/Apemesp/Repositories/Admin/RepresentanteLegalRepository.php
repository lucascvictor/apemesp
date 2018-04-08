<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;


use Apemesp\Apemesp\Models\RepresentanteLegal;

use DB;

class RepresentanteLegalRepository
{

	public function getRepresentante()
	{
		return DB::table('responsavel_legal')->select('*')->first();
    }
    
    public function listRepresentanteLegal()
	{
		return DB::table('responsavel_legal')->select('*')->get();
	}

	public function storeRepresentanteLegal($request)
	{
		$table = new RepresentanteLegal;
        $table->nome = $request->banco;
        $table->estado_civil = $request->agencia;
        $table->endereco = $request->conta;
        $table->profissao = $request->titular;
        $table->rg = $request->documento;
        $table->cpf = $request->descricao;
        $table->save();
	}

}
