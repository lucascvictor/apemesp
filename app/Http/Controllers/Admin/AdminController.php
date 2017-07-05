<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Admin\AdminRepository;

use Auth;

use Session;

use View;

use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);
    }

    public function perfil()
    {
        return view('admin.perfil');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        //Todos os menus foram capturados no construct da classe
        $id_perfil = Auth::user()->id_perfil;
        $id_status = Auth::user()->id_status;
        $mensagem = "";
        

        if ($id_perfil == 1) {
            return view('admin.admin.index');
        }
        if ($id_perfil == 2) {
            return view('admin.redator.index');
        }
        if ($id_perfil == 3 || $id_perfil == 4) {
            if ($id_status == 1 || $id_status ==2) {
                if ($id_status == 2) {
                    $mensagem = "Você tem pendências com a associação, por favor verifique ou entre em contato.";
                }
                $adminRepository = new AdminRepository;
                $dadospessoais = $adminRepository->getDadosPessoais(Auth::user()->id);
                $dadosprofissionais = $adminRepository->getDadosProfissionais(Auth::user()->id);
                unset($adminRepository);
                return view('admin.associado.index')->with('mensagem', $mensagem);
            } else {
                return view('admin.inadimplente');
            }
        }
    }





    public function getPaginas()
    {
        $adminRepository = new AdminRepository;
        $paginas = $adminRepository->getPaginasIndex();
        unset($adminRepository);
        return view('admin.admin.paginas.paginas')->with('paginas', $paginas);
    }

    public function updatePagina(Request $request, $id)
    {
        $adminRepository = new AdminRepository;
        $adminRepository->updatePagina($request, $id);
        unset($adminRepository);
        Session::flash('sucesso', 'A página foi atualizada com sucesso');
            //flash para esta request e put para salvar na sessao
            
            return redirect()->route('paginas.show');
    }

    public function editPagina($id)
    {
        $adminRepository = new AdminRepository;
        $pagina = $adminRepository->editPagina($id);
        unset($adminRepository);
        if ($pagina == null) {
            return abort(404);
        } else {
            return view('admin.admin.paginas.editarpagina')
                        ->with('pagina', $pagina);
        }
    }
}
