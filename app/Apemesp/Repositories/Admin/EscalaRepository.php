<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Escala;

use DB;

class EscalaRepository
{


	public function getEscalas()
	{
		return DB::table('escalas')->select('*')->paginate(4);
	}

  public function storeEscala($escala)
  {
    $table = new Escala;
    $table->escala = $escala;
    $table->save();
  }



}
