<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\ProximidadeGeografica;

use DB;

class ProximidadeRepository
{



	public function getProximidades()
	{
		return DB::table('proximidade_geografica')->select('*')->paginate(4);
	}



}
