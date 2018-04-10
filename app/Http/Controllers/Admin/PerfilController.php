<?php
namespace Apemesp\Http\Controllers\Admin;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Repositories\Admin\AdminRepository;

use Illuminate\Http\Request;

use Auth;

use View;

class PerfilController extends Controller
{
  
    public function __construct()
    {
    	$this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }

    public function perfil()
    {
      $id_perfil = Auth::user()->id_perfil;
      $id_status = Auth::user()->id_status;

      if ($id_perfil == 1) {
          return view('admin.perfil');
      }
      if ($id_perfil == 2) {
          return view('admin.redator.perfil');
      }
      if ($id_perfil == 3 || $id_perfil == 4) {
          if ($id_status == 1 || $id_status ==2) {
              if ($id_status == 2) {
                Session::flash('cuidado', "Você tem pendências com a associação, por favor verifique ou entre em contato.");
              }
            
              $adminRepository = new AdminRepository;
              $dadospessoais = $adminRepository->getDadosPessoais(Auth::user()->id);
              $dadosprofissionais = $adminRepository->getDadosProfissionais(Auth::user()->id);
              unset($adminRepository);
              return view('admin.associado.perfil.index');
          } else {
              return view('admin.inadimplente');
          }
      }
    }


    public function alterarSenha(Request $request)
    {

    }

    public function alterarEmail(Request $request)
    {

    }


}
