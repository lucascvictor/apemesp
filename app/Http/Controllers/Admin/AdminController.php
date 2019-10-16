<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\AdminRepository;
use Apemesp\Apemesp\Repositories\Admin\PropagandaRepository;
use Apemesp\Apemesp\Repositories\Apemesp\UserRepository;
use Apemesp\Apemesp\Repositories\Admin\ChartRepository;
use Apemesp\Apemesp\Repositories\Associado\FinanceiroRepository;
use Apemesp\Apemesp\Repositories\Admin\FinanceiroRepository as FinanceiroAdmin;
use Apemesp\Apemesp\Repositories\Associado\CarteirinhaRepository;
use Apemesp\Apemesp\Repositories\Admin\RepresentanteLegalRepository;
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
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens'],
        ]);
    }

   
    /**
     * Retorna a pagina inicial do dashboard por perfil.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Todos os menus foram capturados no construct da classe
        $id_perfil = Auth::user()->id_perfil;
        $id_status = Auth::user()->id_status;
        $user = new UserRepository;
        $adminRepository = new AdminRepository;
        $chart = new ChartRepository;
        $carteirinhaRepository = new CarteirinhaRepository;
        $financeiro = new FinanceiroRepository;
        $admfim = new FinanceiroAdmin;
        $status6 = false;

        if ($id_perfil == 1) {
        $dados_dez = $chart->getIntervalo(10);
        $dados_vinte = $chart->getIntervalo(20);
        $dados_trinta = $chart->getIntervalo(30); 
        $meses = $chart->getMeses();
        $ano = date("Y");
        $anos = $chart->getAnos($ano);

            return view('admin.admin.index')
            ->with('dadosdez', $dados_dez)
            ->with('dadosvinte', $dados_vinte)
            ->with('dadostrinta', $dados_trinta)
            ->with('meses', $meses)
            ->with('anos', $anos)
            ->with('year', $ano);
        }

        if ($id_perfil == 2) {
            $views = $chart->getVisualizacoes();
            $maisVistos = $chart->getPostsMaisVistos();
            $views->setPath('views');
            return view('admin.redator.index')
            ->with('views', $views)
            ->with('maisVistos', $maisVistos);
        }

        if ($id_perfil == 3 || $id_perfil == 4) {
            if ($id_status == 1 || $id_status ==2) {

                if ($id_status == 2) {
                    Session::flash('cuidado', "Você tem pendências com a associação, por favor verifique ou entre em contato.");
                }

                if ($user->confirmCodeById(Auth::user()->id) == 2) {
                    Session::flash('cuidado', 'Seu e-mail não foi confirmado, por favor, verifique a caixa de entrada do e-mail cadastrado. 
                                    <a href="/reenviar"> Clique aqui para reenviar o e-mail de confirmação</a>');
                    Auth::logout();
                    return redirect()->back();
                }

               
                $dadospessoais = $adminRepository->getDadosPessoais(Auth::user()->id);
                $dadosprofissionais = $adminRepository->getDadosProfissionais(Auth::user()->id);

                $anuidades = $admfim->getAssociado(Auth::user()->id);
                
                foreach($anuidades as $anuidade) {
                    
                    if($anuidade->ano == date("Y") && $anuidade->status != 2  && $anuidade->status != 3) {
                    $status6 = false;
                    } else {
                    $status6 = true;
                    }
                }
                
    
                unset($adminRepository);
                return view('admin.associado.index')
                ->with('dadosbancarios', $financeiro->getDadosBancarios())
                ->with('statusCarteirinha', $carteirinhaRepository->getStatus(Auth::user()->id))
                ->with('status6',$status6)
                ->with('carteirinha', $carteirinhaRepository->getNumero(Auth::user()->id));
            } else {
                return view('admin.inadimplente');
            }
        }
    }

    public function indexChart(Request $request)
    {
        $id_perfil = Auth::user()->id_perfil;
        $chart = new ChartRepository;
        $dados_dez = $chart->getIntervalo(10);
        $dados_vinte = $chart->getIntervalo(20);
        $dados_trinta = $chart->getIntervalo(30); 
        $meses = $chart->getMeses($request->ano);
        $anos = $chart->getAnos();

        if ($id_perfil == 1) {
            return view('admin.admin.index')
            ->with('dadosdez', $dados_dez)
            ->with('dadosvinte', $dados_vinte)
            ->with('dadostrinta', $dados_trinta)
            ->with('meses', $meses)
            ->with('anos', $anos)
            ->with('year', $request->ano);
        }
    }

    public function getPaginas()
    {
        $adminRepository = new AdminRepository;
        $propagandasRepositoy = new PropagandaRepository;
        $representanteLegal = new RepresentanteLegalRepository;
        $paginas = $adminRepository->getPaginasIndex();
        $propagandas_ativas = $propagandasRepositoy->getPropagandasAtivas();
        unset($adminRepository);
        return view('admin.admin.paginas.paginas')
        ->with('paginas', $paginas)
        ->with('propagandasAtivas', $propagandas_ativas)
        ->with('representanteLegal', $representanteLegal->getLocalizacaoSede());
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

    public function updateEstatutoPdf(Request $request)
    {
        $extensao = $request->file('estatuto')->getClientOriginalExtension();
        $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/images/apemesp/estatuto/';
        $nomeArquivo ='estatuto.'. $extensao;
        if (file_exists($pastaDestino . $nomeArquivo)) {
			unlink($pastaDestino . $nomeArquivo);
		}
        $request->file('estatuto')->move($pastaDestino, $nomeArquivo);
        return redirect()->back();
    }
    
}
