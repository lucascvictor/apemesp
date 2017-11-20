<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Page;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ProximidadeGeografica;

use Apemesp\Apemesp\Models\Especialidade;

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