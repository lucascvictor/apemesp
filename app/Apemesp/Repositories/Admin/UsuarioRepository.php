<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use DB;

class UsuarioRepository
{

	protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = date("d-m-Y H:i:s");
	}

	public function search($request)
	{
		$query = "%" . $request->input('q') . "%";
		return User::select('name', 'email')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

	public function getUsuarioIndex()
	{
		return User::where('id_perfil', 3)->orWhere('id_perfil', 4)->orderBy('name', 'asc')->paginate(6);
	}

	public function resetPassword($id)
	{
		$usuario = User::find($id);
		$usuario->password= '$2y$10$irM/9sn55aVw2UIQz05/Rek34fL2WFeaGiQolTRwrzWiHrNmODTMK';
		$usuario->save();
		return $usuario->name;
	}

}