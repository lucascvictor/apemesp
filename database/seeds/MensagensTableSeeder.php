<?php

use Illuminate\Database\Seeder;

class MensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date("Y-m-d H:i:s");
        DB::table('mensagens')->delete();
        DB::table('mensagens')->insert([
                0 => [
                    'id'             => 1,
                    'nome'           => 'Lucas',
                    'email'          => 'duvidas@apemesp.com',
                    'telefone'		 => '11953731059',
                    'mensagem' 		 => 'Minha duvida é uma duvida muito duvidosa',
                    'id_assunto'		=> 1,
                    'created_at'	=> $now,
                    'updated_at'	=> $now,
                ],

                1 => [
                    'id'             => 2,
             		'nome'           => 'Nicholas',
                    'email'          => 'nick@apemesp.com',
                    'telefone'		 => '11953731059',
                    'mensagem' 		 => 'Minha duvida é uma duvida muito duvidosa',
                    'id_assunto'		=> 1,
                    'created_at'	=> $now,
                    'updated_at'	=> $now,

                ],

                2 => [
                    'id'             => 3,
          	  		'nome'           => 'hupert',
                    'email'          => 'hupert@apemesp.com',
                    'telefone'		 => '11953731059',
                    'mensagem' 		 => 'Minha critica é uma duvida muito duvidosa',
                    'id_assunto'		=> 3,
                    'created_at'	=> $now,
                    'updated_at'	=> $now,

                ],

               


            ]);
    }
}
