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
		return DB::table('escalas')->select('*')->paginate(10);
	}

  public function storeEscala($escala)
  {
    $table = new Escala;
    $table->escala = $escala;
    $table->save();
  }
	
	public function getEscala($id)
  {
    return Escala::select('*')->where('id', $id)->get()->first();
	}
	
	public function update($request)
	{
		Escala::where('id', $request->id)
						->update([
								'escala' => $request->escala,
								]);
	}

	public function delete($id)
	{
		Escala::where('id', $id)->delete();
	}




}
