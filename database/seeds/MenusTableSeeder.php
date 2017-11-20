<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();
        DB::table("menus")->insert([
            [
                "id"        => 1,
                "titulo"    => "Dashboard",
                "icone"     => "fa-dashboard",
                "link" 		=> "/admin",
                "id_perfil" => 5,
            ],
            [
                "id"        => 2,
                "titulo"    => "Dados Pessoais",
                "icone"     => "fa-file-text-o",
                "link" 		=> "/associado/dadospessoais",
                "id_perfil" => 4,
            ],
            [
                "id"        => 3,
                "titulo"    => "Dados Acadêmicos",
                "icone"     => "fa-history",
                "link"      => "/associado/dadosacademicos",
                "id_perfil" => 4,
            ],
            [
                "id"        => 4,
                "titulo"    => "Dados Profissionais",
                "icone"     => "fa-file-text",
                "link" 		=> "/associado/dadosprofissionais",
                "id_perfil" => 4,
            ],
            [
                "id"        => 5,
                "titulo"    => "Documentação",
                "icone"     => "fa-file-text",
                "link" 		=> "/associado/documentacao",
                "id_perfil" => 4,
            ],
            [
                "id"        => 6,
                "titulo"    => "Carteirinha",
                "icone"     => "fa-book",
                "link" 		=> "/associado/carteirinha",
                "id_perfil" => 3,
            ],
            [
                "id"        => 7,
                "titulo"    => "Comissões",
                "icone"     => "fa-user",
                "link" 		=> "/associado/comissoes",
                "id_perfil" => 3,
            ],
            [
                "id"        => 8,
                "titulo"    => "Posts",
                "icone"     => "fa-bars",
                "link"      => "/admin/posts",
                "id_perfil" => 2,
            ],
             [
                "id"        => 9,
                "titulo"    => "Usuários",
                "icone"     => "fa-users",
                "link"      => "/admin/usuarios",
                "id_perfil" => 1,
            ],
             [
                "id"        => 10,
                "titulo"    => "Associados",
                "icone"     => "fa-ticket",
                "link"      => "/admin/associados",
                "id_perfil" => 1,
            ],
            [
                "id"        => 11,
                "titulo"    => "Páginas",
                "icone"     => "fa-desktop",
                "link"      => "/admin/paginas",
                "id_perfil" => 2,
            ],

            [
                "id"        => 12,
                "titulo"    => "Configurações",
                "icone"     => "fa-wrench",
                "link"      => "/admin/configs",
                "id_perfil" => 1,
            ],


            [
                "id"        => 13,
                "titulo"    => "Financeiro",
                "icone"     => "fa-usd",
                "link"      => "/admin/financeiro",
                "id_perfil" => 1,
            ],

             [
                "id"        => 14,
                "titulo"    => "Financeiro",
                "icone"     => "fa-usd",
                "link"      => "/associado/financeiro",
                "id_perfil" => 4,
            ],

            [
               "id"        => 15,
               "titulo"    => "Carteirinha",
               "icone"     => "fa-file-o",
               "link"      => "/associado/carteirinha",
               "id_perfil" => 4,
           ],




        ]);
    }
}
