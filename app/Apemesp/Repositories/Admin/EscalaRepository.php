<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Escala;

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
