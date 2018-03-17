<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\UsuarioRepository;

use Auth;

use Session;

use View;

use DB;

class UsuarioController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

         View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);  
          
    }

    public function index()
    {
        $usuarioRepository = new UsuarioRepository;

        $usuarios = $usuarioRepository->getUsuarioIndex();
        unset($adminRepository);
        return View::make('admin.admin.usuarios.index', compact('usuarios', $usuarios));
    }

    public function search(Request $request)
    {
        $usuarioRepository = new UsuarioRepository;
        $usuarios = $usuarioRepository->search($request);

        return view('admin.admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function resetPassword($id)
    {
        $usuarioRepository = new UsuarioRepository;
        $usuario = $usuarioRepository->resetPassword($id);
        Session::flash('sucesso', 'A senha foi reconfigurada para 123456');
        return redirect()->route('users.index');
    }

    public function new()
    {
        return view('admin.admin.usuarios.new');
    }

    public function newAdmin()
    {
        return view('admin.admin.usuarios.new_admin');
    }

    public function newComum()
    {
        return view('admin.admin.usuarios.new_comum');
    }

}