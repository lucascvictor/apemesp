<?php
namespace App\Composers;

use Auth;
use DB;

class PropagandasComposer
{
	public function compose($view)
    {
        $propagandas = $this->Propagandas();
        $view->with('propagandas', $propagandas);
    }

	public function Propagandas()
	{
		$propagandas = DB::table('propagandas')
                     ->select('*')
                     ->get();
       
		return $propagandas;
	}
}