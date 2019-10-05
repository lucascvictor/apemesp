<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Carteirinha;

use Apemesp\Apemesp\Models\StatusCarteirinha;

use Apemesp\Apemesp\Models\DadosBancarios;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use DB;

class CarteirinhaRepository
{


	public function getAssociado($id_user)
	{
		return DB::table('carteirinhas')
		->join('dados_pessoais', 'carteirinhas.id_user', '=', 'dados_pessoais.id_user')
		->join('status_carteirinha', 'status_carteirinha.id', '=', 'carteirinhas.status')
		->select('carteirinhas.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_carteirinha.*')
		->where('carteirinhas.id_user', '=', $id_user)
		->orderBy('ano', 'asc')
		->get();
	}

	public function getAssociados()
	{
		return DB::table('dados_pessoais')
		->select('name', 'cpf', 'id_user')
		->orderby('name')
		->paginate(10);
	}

	public function search($request)
	{
		$query = "%" . $request->input('q') . "%";
		return DadosPessoais::select('id','name', 'cpf', 'tel_celular')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

	public function getLancamento($id_user, $ano)
	{
		return DB::table('carteirinhas')
		->join('dados_pessoais', 'carteirinhas.id_user', '=', 'dados_pessoais.id_user')
		->join('status_carteirinha', 'status_carteirinha.id', '=', 'carteirinhas.status')
		->select('carteirinhas.*', 'dados_pessoais.name', 'dados_pessoais.cpf', 'status_carteirinha.*')
		->where('carteirinhas.id_user', '=', $id_user)
		->where('carteirinhas.ano', '=', $ano)
		->first();
	}

	public function getCarteirinha($id)
	{
		return Carteirinha::select('*')->where('id_user', $id)->get()->first();
	}

	public function storeCarteirinha($id_user, $request)
	{
		$comprovante =0;
		if($request->comprovante) {
			$comprovante =1;
		}
		$verificacao = Carteirinha::where('id_user', $id_user)->where('ano', $request->ano)->select('*')->get()->first();
		
		if($verificacao) {
			return false;
		} else {
			$carteirinha = new Carteirinha;
			$carteirinha->id_user = $id_user;
			$carteirinha->ano = $request->ano;
			$carteirinha->arq_enviado = $comprovante;
			$carteirinha->arq_avaliado = 1;
			$carteirinha->status = $request->status;
			$carteirinha->save();
		}
		return $carteirinha;
	}

	public function updateCarteirinha($request, $id)
	{
		//$verifAssoc = Carteirinha::where('digito', $request->digito)->where('numero', $request->numero)->where('id_user', $request->id)->select('*')->get();
		$verifNum = Carteirinha::where('numero', $request->numero)->where('digito', $request->digito)->where('id_user','<>', $request->id)->select('*')->get();

		if (!count($verifNum)) {
			Carteirinha::where('id', $id)
			->update([
					'digito' => $request->digito,
					'numero' => $request->numero,
					'status' => $request->status,
					'japossui' => $request->japossui,
					'observacao' => $request->observacao,
					'data_pedido' => $request->data_pedido,
					'data_confeccao' => $request->data_confeccao,
					'data_ultimavia' => $request->data_ultimavia,
					'updated_at' => date("Y-m-d H:i:s")
					]);
		} else {
			return $verifNum;
		}
		
	}

	public function getCpf($id_user)
	{
		$dado = DadosPessoais::where('id_user', $id_user)->select('cpf')->get()->first();
		return $dado->cpf;
	}

	public function salvarAvaliacao($request)
	{
		Carteirinha::where('id_user', $request->id)->where('ano', $request->ano)
						->update([
								'status' => $request->status,
								'arq_avaliado' => 1
								]);
	}

	public function gravaArquivo($nomeArquivo, $ano, $id)
	{
		Carteirinha::where('id_user','=', $id,'and','ano','=',$ano)->update(['comprovante' => $nomeArquivo]);
	}


	public function gerarNumero($request)
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