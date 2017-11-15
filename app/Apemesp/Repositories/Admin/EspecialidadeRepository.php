<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Especialidade;

use DB;

class EspecialidadeRepository
{

	public function getAssuntos()
	{
		return DB::table('assuntos')->select('*')->paginate(4);
	}

	public function setEspecialidade($especialidade)
	{
		$table = new Especialidade;
        $table->nome = $especialidade;
        $table->save();
	}

  public function getEspecialidades()
  {
    return Especialidade::all();
  }

}
