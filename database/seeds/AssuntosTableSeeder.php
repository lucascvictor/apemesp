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
                    'email'          => 'contato.apemesp@gmail.com',
                ],

                1 => [
                    'id'             => 2,
                    'assunto'           => 'Sugestões',
                    'email'          => 'site.apemesp@gmail.com',

                ],

                2 => [
                    'id'             => 3,
          	        'assunto'           => 'Reclamação',
                    'email'          => 'reclamacoes@apemesp.com',

                ],

                3 => [
                    'id'             => 4,
                     'assunto'           => 'Anuidade',
                    'email'          => 'anuidade@apemesp.com',

                ],

                4 => [
                    'id'             => 5,
                   'assunto'           => 'Eventos',
                    'email'          => 'eventos@apemesp.com',
                ],


            ]);
    }
}
