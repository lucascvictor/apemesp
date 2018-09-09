<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\Certeirinha;

use Apemesp\Apemesp\Models\Financeiro;

use Apemesp\Apemesp\Models\Carteirinha;

use Apemesp\Apemesp\Repository\FinanceiroRepository;

use DB;

class CarteirinhaRepository
{

	public function getCidades($idEstado)
	{
		return Cidade::where('id_estado', $idEstado)->select('id', 'nome')->get();
	}

	public function destroy($id)
	{
		return Certeirinha::where('id', $id)->delete();
	}

	public function getStatus($id)
	{
		return Carteirinha::where('id_user', $id)->select('status', 'digito', 'numero')->get()->first();
	}

	public function getNumero($id)
	{
		$carteirinha = Carteirinha::where('id', $id)->select('*')->get()->first();
		if($carteirinha != null) {
			$digito = $carteirinha->digito;
			$numero = $carteirinha->numero;
			return $digito . '-' . $numero;
		}
		return null;
	}

	public function storeOld($request)
	{
		$verifica = false;
		$carteirinha = new Carteirinha;
		$verifica = Carteirinha::where('digito', $request->digito)->where('numero', $request->numero)->select('*')->get()->first();
		if($verifica){
			return false;
		} else {
			$carteirinha->id_user = $request->id;
			$carteirinha->digito = $request->digito;
			$carteirinha->numero = $request->numero;
			$carteirinha->japossui = 1;
			$carteirinha->status = 4;
			$carteirinha->save();
		}
		return $carteirinha;
	}

}
