<?php

use Illuminate\Database\Seeder;

class PerfisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('perfis')->delete();
        DB::table('perfis')->insert([
                0 => [
                    'id'             => 1,
                    'Perfil'           => 'Admin',
                    'Desc'          => 'Possui todos os poderes admnistrativos',
                ],

                1 => [
                    'id'             => 2,
                    'Perfil'           => 'Redator',
                    'Desc'          => 'Possui privilegios para redigir textos e posts',

                ],

                2 => [
                    'id'             => 3,
                    'Perfil'           => 'Associado',
                    'Desc'          => 'Possui privilegios para gerenciar sua própria conta e visualizar status de solicitações',

                ],

                3 => [
                    'id'             => 4,
                    'Perfil'           => 'Usuário',
                    'Desc'          => 'Acesso padrão a todos os solicitantes da página',

                ],

                4 => [
                    'id'             => 5,
                    'Perfil'           => 'Geral',
                    'Desc'          => 'Qualquer usuário pode ter acesso',

                ],


            ]);
    }
}
