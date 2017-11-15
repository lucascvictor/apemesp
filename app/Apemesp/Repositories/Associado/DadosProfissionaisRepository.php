<?php

namespace App\Apemesp\Repositories\Associado;


use App\Http\Requests;

use App\Apemesp\Models\Assunto;

use App\Apemesp\Models\Nacionalidade;

use App\Apemesp\Models\Estado;

use App\Apemesp\Models\Cidade;

use App\Apemesp\Models\DadosProfissionais;

use App\Apemesp\Models\ProximidadeGeografica;

use App\Apemesp\Models\Especialidade;

use DB;

class DadosProfissionaisRepository
{

  public function getEspecialidades()
  {
    return Especialidade::all();
  }

  public function getProximidades()
  {
    return ProximidadeGeografica::all();
  }

  public function getNacionalidade()
  {
    return Nacionalidade::all();
  }

  public function getEstados()
  {
    return Estado::orderby('nome', 'asc')->get();
  }

  public function getCidadeEspecifica($id_cidade)
  {
    return Cidade::where('id', $id_cidade)->get();
  }

  public function getDadosProfissionais($user_id)
  {
    return DadosProfissionais::where('id_user', $user_id)->get();
  }

}
