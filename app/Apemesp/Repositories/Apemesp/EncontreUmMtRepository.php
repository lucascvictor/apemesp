<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Page;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ProximidadeGeografica;

use Apemesp\Apemesp\Models\Especialidade;

use Apemesp\Apemesp\Models\DadosProfissionais;

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

	public function getMtEspecialidade($especialidade) {


		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_profissionais.id_especialidade', '=', $especialidade)
						->where('dados_profissionais.id_especialidade', '<>', 0)
            ->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
            ->get();

	}

	public function getMtProximidade($proximidade) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_profissionais.id_proximidade', '=', $proximidade)
						->where('dados_profissionais.id_especialidade', '<>', 0)
            ->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
            ->get();
	}

	public function getMtEscala($escala) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_profissionais.id_dias_atendimento', '=', $escala)
						->where('dados_profissionais.id_especialidade', '<>', 0)
            ->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
            ->get();
	}

	public function getMtNome($nome) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_pessoais.name', 'like', '%' . $nome . '%')
						->where('dados_profissionais.id_especialidade', '<>', 0)
            ->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
            ->get();
	}


	public function getMtAll($proximidade, $escala, $nome, $especialidade) {


		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_pessoais.name', 'like', '%' . $nome . '%')
						->where('dados_profissionais.id_dias_atendimento', '=', $escala )
						->where('dados_profissionais.id_especialidade', '=', $especialidade )
						->where('dados_profissionais.id_proximidade', '=', $proximidade )
						->where('dados_profissionais.id_especialidade', '<>', 0)
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}


	public function  getMtSemEspecialidade($proximidade, $escala, $nome) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_pessoais.name', 'like', '%' . $nome . '%')
						->where('dados_profissionais.id_dias_atendimento', '=', $escala )
						->where('dados_profissionais.id_proximidade', '=', $proximidade )
						->where('dados_profissionais.id_especialidade', '<>', 0)
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}

	public function  getMtSemNome($proximidade, $escala, $especialidade) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_profissionais.id_dias_atendimento', '=', $escala )
						->where('dados_profissionais.id_especialidade', '=', $especialidade )
						->where('dados_profissionais.id_proximidade', '=', $proximidade )
						->where('dados_profissionais.id_especialidade', '<>', 0)
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}

	public function  getMtSemEscala($proximidade, $especialidade, $nome) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_pessoais.name', 'like', '%' . $nome . '%')
						->where('dados_profissionais.id_proximidade', '=', $proximidade )
						->where('dados_profissionais.id_especialidade', '=', $especialidade )
						->where('dados_profissionais.id_especialidade', '<>', 0)
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}

	public function  getMtSemProximidade($especialidade, $nome, $escala) {
		return DB::table('dados_profissionais')
						->join('dados_pessoais', 'dados_profissionais.id_user', '=', 'dados_pessoais.id_user')
						->join('proximidade_geografica', 'proximidade_geografica.id', '=', 'dados_profissionais.id_proximidade')
						->join('escalas', 'escalas.id', '=', 'dados_profissionais.id_dias_atendimento')
						->where('dados_pessoais.name', 'like', '%' . $nome . '%')
						->where('dados_profissionais.id_especialidade', '=', $especialidade )
						->where('dados_profissionais.id_dias_atendimento', '=', $escala )
						->where('dados_profissionais.id_especialidade', '<>', 0)
						->select('dados_pessoais.name', 'dados_profissionais.*', 'escalas.escala')
						->orderBy('dados_pessoais.name')
						->get();
	}



}
