<?php
namespace Apemesp\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Apemesp\Http\Controllers\Controller;
use Apemesp\Http\Requests;
use Apemesp\Apemesp\Models\Menu;
use Apemesp\Apemesp\Repositories\Admin\LiteraturaRepository;
use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;
use Auth;
use Session;
use View;

class LiteraturaController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
			'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
			'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);
    }
    public function addLiteratura()
    {
    	return view('admin.admin.paginas.add.literatura');
    }
    public function listLiteratura()
    {
        $repository = new LiteraturaRepository;
        $literaturas = $repository->listAll();
        return view('admin.admin.paginas.list.literatura')->with('literaturas', $literaturas);
    }
    public function storeLiteratura(Request $request)
    {
        $repository = new LiteraturaRepository;
        $id = $repository->store($request);
        $nomeArquivo = $this->storeImage($id, $request);
        $repository->updateImagem($nomeArquivo, $id);
      return redirect()->route('list.literatura');
    }
		public function storeImage($id, $request)
		{
			//Armazenamento da imagem
			$extensao = $request->file('imagem')->getClientOriginalExtension();
			$pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/images/musicoterapia/literatura/';
			$nomeArquivo ='literatura'. $id . '.' . $extensao;
			$request->file('imagem')->move($pastaDestino, $nomeArquivo);
			return $nomeArquivo;
		}
        public function destroyLiteratura($id)
        {
            $repository = new LiteraturaRepository;
            $repository->destroy($id);
            return redirect()->back();
        }

		public function editLiteratura($id)
		{
			$repository = new LiteraturaRepository;
			$literatura = $repository->getLiteratura($id);
			return view('admin.admin.paginas.edit.literatura')->with('literatura', $literatura);
        }
        
		public function updateLiteratura(Request $request, $id)
		{
			$repository = new LiteraturaRepository;
			$repository->update($request, $id);
			return redirect()->route('list.literatura');
        }
        
        public function adminIndex()
        {
            $repository = new LiteraturaRepository;
			$indicacoes = $repository->getIndicacoes();
            return view('admin.admin.literatura.index')->with('indicacoes', $indicacoes);
        }
        //INDICACOES LITERARIAS ABAIXO
        public function avaliar($id) 
        {
            $repository = new LiteraturaRepository;
			$indicacao = $repository->getIndicacao($id);
            return view('admin.admin.literatura.avaliacao')->with('indicacao', $indicacao);
        }

        public function aprovar($id)
        {
            $repository = new LiteraturaRepository;
            $idLiteratura = $repository->aprovarIndicacao($id);

            $indicacao = base_path() . DIRECTORY_SEPARATOR . 'public/images/indicacoes/indicacao' . $id;
            
            if (file_exists($indicacao . '.jpg') || file_exists($indicacao . '.jpeg') ) {
                $extensao = '.jpg';
            } elseif (file_exists($indicacao . '.bmp'))  {
                $extensao = '.bmp';
            } elseif (file_exists($indicacao . '.gif')) {
                $extensao = '.gif';
            }

            $indicacao = base_path() . DIRECTORY_SEPARATOR . 'public/images/indicacoes/indicacao' . $id . $extensao;
            $literatura = base_path() . DIRECTORY_SEPARATOR . 'public/images/musicoterapia/literatura/literatura' . $idLiteratura . $extensao;
            
            if (!Empty($extensao)) {
                copy($indicacao, $literatura ) && unlink( $indicacao );
            }
            $nomeArquivo = 'literatura' . $idLiteratura . $extensao;
            $repository->updateImagem($nomeArquivo, $idLiteratura);
            Session::flash('sucesso', 'Indicação aprovada com sucesso');
            return redirect()->route('list.literatura');
        }

        public function excluir($id)
        {
            return 0;
        }
    
}