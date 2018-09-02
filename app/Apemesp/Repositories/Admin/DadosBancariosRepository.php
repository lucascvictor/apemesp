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

	public function edit($id)
	{
		return DadosBancarios::select('*')->where('id', $id)->get()->first();
	}

	public function store($request)
	{
		$table            = new DadosBancarios;
        $table->banco     = $request->banco;
        $table->agencia   = $request->agencia;
        $table->conta     = $request->conta;
        $table->titular   = $request->titular;
        $table->documento = $request->documento;
		$table->descricao = $request->titular;
		$table->titulo = $request->titular;
        $table->save();
	}

	public function update($request, $id)
	{
		DadosBancarios::where('id', $id)
		->update([
			'banco'     => $request->banco,
			'agencia'   => $request->agencia,
			'conta'     => $request->conta,
			'titular'   => $request->titular,
			'documento' => $request->documento,
			'descricao' => $request->descricao,
			'titulo' => $request->descricao
		]);
	}

	public function destroy($id)
	{
		$dadosBancarios = DadosBancarios::find($id);
		$dadosBancarios->delete();
	}

}
