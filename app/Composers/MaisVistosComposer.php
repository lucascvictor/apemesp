<?php 
namespace App\Composers;

use Auth;

use DB;

class MaisVistosComposer
{


public function compose($view)
    {
        $maisVistos = $this->MaisVistos();
        $view->with('maisVistos', $maisVistos);
    }

public function MaisVistos(){
		$titulos = DB::table('posts_views')
                     ->join('posts', 'posts.id', '=', 'posts_views.id')
                     ->select('posts.titulo', 'posts.id', 'posts_views.total_visitas')
                     ->where('posts.id_destino', '=', 1)
                     ->orderBy('posts_views.total_visitas', 'desc')
                     ->limit(5)
                     ->get();
       
		return $titulos;
	}


}