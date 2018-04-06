<?php 
namespace Apemesp\Composers;

use Auth;

use Apemesp\Apemesp\Repositories\Apemesp\FooterRepository;

class FooterComposer
{

    public function compose($view)
    {
        $footer = $this->getFooters();
        $view->with('footer', $footer);
    }


    public function getFooters(){
        $footerRep = new FooterRepository;
        $footers = $footerRep->getAll();
        return $footers;
    }
}