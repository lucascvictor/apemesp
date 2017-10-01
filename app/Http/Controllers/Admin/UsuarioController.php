<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Admin\UsuarioRepository;

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
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);  
         
        
    }

    public function index()
    {
        $usuarioRepository = new UsuarioRepository;
        $usuarios = $usuarioRepository->getUsuarioIndex();
        $usuarios->setPath('usuarios');
        unset($adminRepository);
        return view('admin.admin.usuarios')->with('usuarios', $usuarios);
    }

    public function search(Request $request)
    {
        $usuarioRepository = new UsuarioRepository;
        $usuarios = $usuarioRepository->search($request);
        $path = "search?q=" . $request->q;
        $usuarios->setPath($path);
        return view('admin.admin.usuarios')->with('usuarios', $usuarios);
    }

    public function resetPassword($id)
    {
        $usuarioRepository = new UsuarioRepository;
        $usuario = $usuarioRepository->resetPassword($id);
        Session::flash('sucesso', 'A senha foi reconfigurada para 123456');
        return redirect()->route('users.index');
    }

    public function createUser()
    {
        
    }

}