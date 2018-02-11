<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Illuminate\Support\Facades\Response;

use Apemesp\Apemesp\Repositories\Apemesp\PagesRepository;

use Apemesp\Apemesp\Repositories\Admin\PostRepository;

use Apemesp\Apemesp\Repositories\Admin\PropagandaRepository;

use Apemesp\Apemesp\Repositories\Admin\ComissaoRepository;

use View;

use Apemesp\Http\Controllers\Controller;



use Session;

use Cache;

class PagesController extends Controller{

	public function __construct()
    {

         View::composers([
            'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar']
        ]);

         View::composers([
            'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar']
        ]);
     }

	public function getIndex() {
		$page = new PagesRepository;
		$posts = $page->getIndex();
		$posts->setPath('/');
		$tags = $page->getTags();
		$propagandasRepositoy = new PropagandaRepository;
		$propagandas_ativas = $propagandasRepositoy->getPropagandasAtivas();
		unset($page);
		unset($propagandasRepositoy);
		if(count($posts) == 0) {
			return view('errors.404');
		} else {
    	return view('paginas.welcome')->with('posts', $posts)->with('tags', $tags)->with('propagandasAtivas', $propagandas_ativas);
		}
    //return view('paginas.manutencao');
	}



	public function getPost($id)
	{

		$page = new PagesRepository;
		$post = $page->getPost($id);
	  $view = $page->getPostView($id);

	    if ($post == null){
	    	return view('errors.post');
	    } else {
		    if (Cache::has($id) == false) {
		        Cache::add($id, 'contador', 0.30);
		        $view->total_visitas++;
		        $view->save();
		    }
		    unset($page);

				if(count($post) == 0) {
					return view('errors.404');
				} else {
		    	return view('paginas.posts.show')->with('post', $post);
				}
		}

	}

	public function getSobre(){
		$primeiro = "Lucas";
		$ultimo = "Victor";
		$full = $primeiro . " " . $ultimo;
		$dados = [];
		$dados['primeiro'] = $primeiro;
		$dados['ultimo'] = $ultimo;
		return view('paginas.sobre')->with("dados", $dados);
	}


	public function getAcoes() {
		return view('paginas.apemesp.acoes');
	}

	public function getComissoes() {
		$comissaoRepository = new ComissaoRepository;
		$comissoes = $comissaoRepository->list();
		return view('paginas.apemesp.comissoes')->with('comissoes', $comissoes);
	}

	public function getDocumentos() {
		return view('paginas.apemesp.documentos');
	}

	public function getQuemSomos() {
		$page = new PagesRepository;
		$pagina = $page->getQuemSomos();
		unset($page);
		if ($pagina == null) {
			return view('errors.404');
		} else {
			return view('paginas.apemesp.quemsomos')->with('pagina', $pagina);
		}

	}

	public function getEstatuto()
	{
		$page = new PagesRepository;
		$pagina = $page->getEstatuto();
		unset($page);
		return view('paginas.apemesp.estatuto')->with('pagina', $pagina);
	}

	public function downloadEstatuto()
    {
        $file= public_path(). "/images/apemesp/estatuto/estatuto.pdf";
        $headers = array('Content-Type: application/pdf',);
        if (file_exists($file)) {
          return Response::download($file, 'estatuto.pdf', $headers);
		}
    }

	public function search(Request $request)
	{
		$postRepository = new PostRepository;
        $posts = $postRepository->search($request, 1);

        $path = "search?q=" . $request->q;
        $posts->setPath($path);

        $page = new PagesRepository;
		$tags = $page->getTags();

		unset($page);
        unset($postRepository);
        return view('paginas.welcome')->with('posts', $posts)->with('tags', $tags);
	}

	public function getPostsTag($id)
	{
		$page = new PagesRepository;
		$postsTag = $page->getPostsTag($id);
		$postsTag->setPath('/');
		$tags = $page->getTags();
		unset($page);

		return view('paginas.welcome')->with('posts', $postsTag)->with('tags', $tags);


	}



}
