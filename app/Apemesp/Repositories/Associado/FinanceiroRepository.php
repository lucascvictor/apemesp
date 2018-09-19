<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Anuidade;

use Apemesp\Apemesp\Models\DadosBancarios;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\StatusAnuidade;

use DB;

class FinanceiroRepository
{

  	public function getAnuidades($id_usuario)
	{
		return Anuidade::where('id_user', $id_usuario)->select('*')->orderBy('ano', 'desc')->get();
	}

	public function storeAnuidade($id_user, $request)
	{
		$comprovante =0;

		if($request->comprovante) {
			$comprovante =1;
		}
		$verificacao = Anuidade::where('id_user', $id_user)->where('ano', $request->ano)->select('*')->get()->first();
		
		if($verificacao) {
			return false;
		} else {
			$anuidade = new Anuidade;
			$anuidade->id_user = $id_user;
			$anuidade->ano = $request->ano;
			$anuidade->arq_enviado = $comprovante;
			$anuidade->arq_avaliado = 0;
			$anuidade->save();
		}
		return $anuidade;
	}

	public function getDadosBancarios()
	{
		return DadosBancarios::all();
	}

	public function destroy($id)
	{
		return Anuidade::where('id', $id)->delete();
	}

	public function getCpf($id_user)
	{
		$dado = DadosPessoais::where('id_user', $id_user)->select('cpf')->get()->first();
		return $dado->cpf;
	}

	public function gravaArquivo($nomeArquivo, $ano, $id)
	{
		Anuidade::where('id_user','=', $id,'and','ano','=',$ano)->update(['comprovante' => $nomeArquivo]);
	}

	public function getStatusAnuidades()
	{
		return StatusAnuidade::all();
	}



}
