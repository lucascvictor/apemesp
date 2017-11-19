<?php

use Illuminate\Database\Seeder;

class ChatterPostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE POSTS

         \DB::table('chatter_post')->delete();

        \DB::table('chatter_post')->insert([
                    0 => [
                        'id'                    => 1,
                        'chatter_discussion_id' => 1,
                        'user_id'               => 303,
                        'body'                  => '<p>Bem-vindos ao forum da APEMESP nosso site se destina a orientar e promover musicoterapeutas do estado de São Paulo <a href="https://apemesp.com.br" target="_blank">APEMESP</a> Trabalhamos com uma equipe de profissionais qualificados para melhor atender Mt\'s e pacientes</p>
        <p>Você pode conferir nossa página no<a href="http://www.facebook.com/apemesp" target="_blank">Facebook</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
                    ],
                    1 => [
                        'id'                    => 2,
                        'chatter_discussion_id' => 2,
                        'user_id'               => 303,
                        'body'                  => '<p>Hey!</p>
        <p>Este é um forum dedicado à musicoterapeutas, por este motivo seu acesso como associado é necessário</p>',

                    'created_at' => '2016-08-18 14:39:36',
                    'updated_at' => '2016-08-18 14:39:36',
                ],

        ]);
    }
}
