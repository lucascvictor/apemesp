<?php

namespace App\Apemesp\Repositories\Apemesp;


use App\Http\Requests;

use App\Apemesp\Models\Page;

use App\Apemesp\Models\User;

use App\Apemesp\Models\ProximidadeGeografica;

use App\Apemesp\Models\Especialidade;

use DB;

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
}