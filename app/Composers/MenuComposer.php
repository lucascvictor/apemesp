<?php 
namespace App\Composers;

use Auth;

use App\Apemesp\Models\Menu;

class MenuComposer
{

    public function compose($view)
    {
        $menus = $this->getMenus();
        $view->with('menus', $menus);
    }


    public function vPerfil($perfil)
    {

        if($perfil == 4){
            $menus = Menu::where('id_perfil', 4)->orWhere('id_perfil', 5)->get();
        }

        if(Auth::user()->id_perfil == 3){
            $menus = Menu::where('id_perfil', 4)->orWhere('id_perfil', 3)->orWhere('id_perfil', 5)->get();
        }

        if(Auth::user()->id_perfil == 2){
            $menus = Menu::where('id_perfil', 2)->orWhere('id_perfil', 5)->get();
        }

        if(Auth::user()->id_perfil == 1){
            $menus = Menu::where('id_perfil', 1)->orWhere('id_perfil', 2)->orWhere('id_perfil', 5)->get();
        }

        return $menus;
    }


    public function getMenus(){
        $id_perfil = Auth::user()->id_perfil;
        $menus = $this->vPerfil($id_perfil);
        $armenus = (array)$menus;
        return ($armenus);
    }
}