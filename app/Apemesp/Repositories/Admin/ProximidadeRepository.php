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
		return DB::table('proximidade_geografica')->select('*')->paginate(10);
	}

	public function setProximidade($proximidade)
	{
		$table = new ProximidadeGeografica;
        $table->localidade = $proximidade;
		$table->save();
		return $table->id;
	}
	
	public function getProximidade($id)
  	{
    return ProximidadeGeografica::select('*')->where('id', $id)->get()->first();
	}
	
	public function update($request)
	{
		ProximidadeGeografica::where('id', $request->id)
						->update([
								'localidade' => $request->proximidade,
								]);
	}

	public function delete($id)
	{
		ProximidadeGeografica::where('id', $id)->delete();
	}


}
