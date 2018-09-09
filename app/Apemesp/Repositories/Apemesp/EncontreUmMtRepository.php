<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Page;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ProximidadeGeografica;

use Apemesp\Apemesp\Models\Especialidade;

use Apemesp\Apemesp\Models\DadosProfissionais;

use Apemesp\Apemesp\Models\Anuidade;

use DB;

use Auth;

class EncontreUmMtRepository
{
	public function getEspecialidades()
	{

		return Especialidade::all();
	}

	public function getProximidades()
	{
		return ProximidadeGeografica::all();
	}

	public function getMtAll() {

		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->join('users', 'dados_pessoais.id_user', '=', 'users.id')
						->Where('dados_profissionais.id_especialidade', '<>', 0)
						->Where('users.id_status','<>',4)
						->Where('users.opcao_dados_profissionais','<>',1)				
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}

	public function getMts($proximidade, $escala, $nome, $especialidade) {
		return DB::table('dados_profissionais')
			->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
			->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
			->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
			->join('users', 'dados_pessoais.id_user', '=', 'users.id')
			
			->when($nome, function ($query) use ($nome) {
				return $query->where('dados_pessoais.name', 'like', '%' . $nome . '%');
			})
			->when($escala, function ($query) use ($escala) {
				return $query->where('dados_profissionais.id_dias_atendimento', $escala);
			})
			->when($proximidade, function ($query) use ($proximidade) {
				return $query->where('dados_profissionais.id_proximidade', $proximidade);
			})
			->when($especialidade, function ($query) use ($especialidade) {
				return $query->where('dados_profissionais.id_especialidade', $especialidade);
			})
			->Where('users.id_status','<>',4)
			->Where('users.opcao_dados_profissionais','<>',1)
			->Where('dados_profissionais.id_especialidade', '<>', 0)
			->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
			->orderBy('dados_pessoais.name')
			->get();
	}

	public function valida($mts)
	{
		$i = 0;
		$vazio = array();
		foreach($mts as $mt) {
			$anuidades[$i] = Anuidade::where('id_user',$mt->id_user)->select("*")->get();
			
			foreach ($anuidades[$i] as $anuidade) {
				if($anuidade->ano == date('Y')) {
					if($anuidade->status != 3 && $anuidade->status != 2) {
						unset($mts[$i]);
					}
				}
			}

		if(!count($anuidades[$i])) {
			unset($mts[$i]);
		}
		$i++;
		}
		return $mts;
	}


}
