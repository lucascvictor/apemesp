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
		$carteirinha = Carteirinha::where('id_user', $id)->select('*')->get()->first();
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

	public function gerarNumeroAssociado($request)
	{
		$i = 0;
		$formacoes = new FormacoesAcademicas;
		$carteirinha = new Carteirinha;
		$digito = 1;
		
		$verifica = Carteirinha::where('id_user', $request->id)->select('*')->get()->first();
	
		if($verifica == null) {
				$formacoesAssociado = $formacoes->where('id_usuario','=',$request->id)->get();

				foreach($formacoesAssociado as $formacao) {
					if($i%2 == 0) {
						$f = $formacao->id_categoria_formacao;
					}
					if($f > $formacao->id_categoria_formacao) {
					$digito = $f;
					} else {
					$digito = $formacao->id_categoria_formacao;
					}
					$i++;
				}
				
				$numeros = $carteirinha->where('numero','>=',180000)->get();

				if(!empty($numeros[0])) {
					$numeroAssociado = $numeros->last()->numero + 1;
				} else {
					$numeroAssociado = 180000;
				}
				
				$carteirinha->id_user = $request->id;
				$carteirinha->digito = $digito;
				$carteirinha->numero = $numeroAssociado;
				$carteirinha->japossui = 2;
				$carteirinha->status = 1;
				$carteirinha->data_pedido = date("Y-m-d");
				$carteirinha->save();
			}
	}

}
