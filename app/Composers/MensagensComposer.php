<?php 
namespace Apemesp\Composers;

use Auth;

use Apemesp\Apemesp\Models\Mensagens;

class MensagensComposer
{

    public function compose($view)
    {
        $mensagens = $this->getMenus();
        $view->with('mensagens', $mensagens);
    }


    public function getMenus(){

        $mensagens = $this->vMensagens();
        $armensagens = (array)$mensagens;
        return ($armensagens);
    }

    public function vMensagens()
    {
        $i = 0;
        $mensagens = array();
        $msgs = Mensagens::where('email', Auth::user()->email)->select('*')->get();

       /* foreach($msgs as $msg){
            if (strtotime($msg->updated_at) >= strtotime(date())) {
                $mensagens[$i] = $msg;
            }
            $i++;
        }*/
        return $mensagens;
    }
}