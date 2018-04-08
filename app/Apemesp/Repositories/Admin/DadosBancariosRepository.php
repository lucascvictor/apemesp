<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;


use Apemesp\Apemesp\Models\DadosBancarios;

use DB;

class DadosBancariosRepository
{

	public function getDadosBancarios()
	{
		return DB::table('dados_bancarios')->select('*')->paginate(4);
    }
    
    public function listDadosBancarios()
	{
		return DB::table('dados_bancarios')->select('*')->get();
	}

	public function storeDadosBancarios($request)
	{
		$table = new DadosBancarios;
        $table->banco = $request->banco;
        $table->agencia = $request->agencia;
        $table->conta = $request->conta;
        $table->titular = $request->titular;
        $table->documento = $request->documento;
        $table->descricao = $request->descricao;
        $table->save();
	}

}
