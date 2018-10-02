<?php 
namespace Apemesp\Composers;

use Auth;

use Apemesp\Apemesp\Repositories\Apemesp\FooterRepository;
use Apemesp\Apemesp\Repositories\Admin\RepresentanteLegalRepository;

class FooterComposer
{

    public function compose($view)
    {
        $footer = $this->getFooters();
        $representante = $this->getLocal();
        $view->with('footer', $footer)
             ->with('representante', $representante);
    }


    public function getFooters(){
        $footerRep = new FooterRepository;
        $footers = $footerRep->getAll();
        return $footers;
    }

    public function getLocal(){
        $rep = new RepresentanteLegalRepository;
        return $rep->getLocalizacaoSede();
    }
}