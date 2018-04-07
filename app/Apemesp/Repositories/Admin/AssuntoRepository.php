<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Assunto;

use DevDojo\Chatter\Models\Category;

use DB;

class AssuntoRepository
{

	public function getAssuntos()
	{
		return Assunto::Select('*')->orderBy('id', 'desc')->paginate(6);
	}

	public function getAssuntosForum()
	{
		return Category::Select('*')->orderBy('id', 'desc')->paginate(6);
	}

	public function getAssunto($id)
	{
		return DB::table('assuntos')->select('*')->where('id', '=',$id)->get();
	}

	public function getAssuntoForum($id)
	{
		dd(DB::table('chatter_categories')->select('*')->where('id', '=',$id)->first());
		return DB::table('chatter_categories')->select('*')->where('id', '=',$id)->first();
	}


	public function updateAssunto($request, $id)
	{
		Assunto::where('id', $id)
            ->update([
                'assunto' => $request->assunto,
                'email' => $request->email,
                ]);
	}

	public function updateAssuntoForum($request, $id)
	{
		Assunto::where('id', $id)
            ->update([
                'name' => $request->name,
                'slug' => $request->name,
                ]);
	}

	public function deleteAssunto($id)
	{
		Assunto::where('id', $id)->delete();
	}

	public function deleteAssuntoForum($id)
	{
		Category::where('id', $id)->delete();
	}

	public function setAssunto($assunto, $email)
	{
		$table = new Assunto;
        $table->assunto = $assunto;
        $table->email = $email;
        $table->save();
	}

	public function setAssuntoForum()
	{
		$table = new Category;
        $table->name = $assunto;
		$table->slug = $email;
		$table->color = $email;
        $table->save();
	}

}
