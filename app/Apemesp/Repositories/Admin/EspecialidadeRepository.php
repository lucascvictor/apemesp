<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Especialidade;

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
    return Especialidade::select('*')->paginate(10);
	}
	
	public function getEspecialidade($id)
  {
    return Especialidade::select('*')->where('id', $id)->get()->first();
	}
	
	public function update($request)
	{
		Especialidade::where('id', $request->id)
						->update([
								'nome' => $request->especialidade,
								]);
	}

	public function delete($id)
	{
		Especialidade::where('id', $id)->delete();
	}

}
