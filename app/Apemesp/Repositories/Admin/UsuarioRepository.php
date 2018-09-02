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
		return DB::table('users')->select('id','id_status','name', 'email')->where('name', 'LIKE', $query)->orderBy('name', 'asc')->paginate(6);
	}

	public function getUsuarioIndex()
	{
		return User::where('id_perfil', 3)->orWhere('id_perfil', 4)->orderBy('name', 'asc')->paginate(10);
	}

	public function resetPassword($id)
	{
		$usuario = User::find($id);
		$usuario->password = bcrypt('apemesp123');
		$usuario->save();
		return $usuario->name;
	}

	public function resetPasswordPerfil($id, $senha)
	{
		$senha = bcrypt($senha);
		$usuario = User::find($id);
		$usuario->password= $senha;
		$usuario->save();
		return $usuario->name;
	}

	public function orderByUpdate()
	{
		return DB::table('users')
		->join('aditional_users_data', 'aditional_users_data.id_user', '=', 'users.id')
		->select('users.*', 'aditional_users_data.updated_at')
		->orderBy('aditional_users_data.updated_at', 'asc')->paginate(10);
	}

	public function destroy($id)
	{
		return User::where('id', $id)->delete();
	}

	public function desativar($id)
	{
		$usuario = User::find($id);
		$usuario->id_status = 4;
		$usuario->save();
		return $usuario->name;
	}
}