<?php
namespace Apemesp\Composers;

use Auth;
use DB;
use Apemesp\Apemesp\Repositories\Admin\PropagandaRepository;

class PropagandasComposer
{
	public function compose($view)
    {

        $view->with('propagandas', $this->Propagandas())->with('propagandasAtivas', $this->PropagandasAtivas());
    }

	public function Propagandas()
	{
		$propagandasRepositoy = new PropagandaRepository;
		return $propagandas = $propagandasRepositoy->listAll();

	}

	public function PropagandasAtivas()
	{
		$propagandasRepositoy = new PropagandaRepository;
		return $propagandas_ativas = $propagandasRepositoy->getPropagandasAtivas();
	}
}
