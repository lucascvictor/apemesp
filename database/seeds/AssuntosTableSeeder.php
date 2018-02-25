<?php

use Illuminate\Database\Seeder;

class AssuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assuntos')->delete();
        DB::table('assuntos')->insert([
                0 => [
                    'id'             => 1,
                    'assunto'           => 'Dúvidas',
                    'email'          => 'contato@apemesp.com',
                ],

                1 => [
                    'id'             => 2,
                    'assunto'           => 'Sugestões',
                    'email'          => 'contato@apemesp.com',

                ],

                2 => [
                    'id'             => 3,
          	        'assunto'           => 'Reclamação',
                    'email'          => 'contato@apemesp.com',

                ],

                3 => [
                    'id'             => 4,
                     'assunto'           => 'Anuidade',
                    'email'          => 'financeiro@apemesp.com',

                ],

                4 => [
                    'id'             => 5,
                   'assunto'           => 'Eventos',
                    'email'          => 'contato@apemesp.com',
                ],

                5 => [
                    'id'             => 6,
                    'assunto'           => 'Comissões',
                    'email'          => 'comissoes@apemesp.com',
                ],

                6 => [
                    'id'             => 7,
                    'assunto'           => 'Documentação',
                    'email'          => 'secretaria@apemesp.com',
                ],

                7 => [
                    'id'             => 8,
                    'assunto'           => 'Fale com o presidente',
                    'email'          => 'falapresidente@apemesp.com',
                ],

                8 => [
                    'id'             => 9,
                    'assunto'           => 'Representante estudantil',
                    'email'          => 'rep.estudantil@apemesp.com',
                ],


            ]);
    }
}
