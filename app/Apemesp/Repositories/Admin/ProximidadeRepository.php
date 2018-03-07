<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ProximidadeGeografica;

use DB;

class ProximidadeRepository
{



	public function getProximidades()
	{
		return DB::table('proximidade_geografica')->select('*')->paginate(4);
	}



}
