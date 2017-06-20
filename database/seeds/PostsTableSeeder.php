<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            [
                "id"        => 1,
                "titulo"    => "Primeiro post de muitos",
                "subtitulo"     => "Primeiro Post",
                "id_user" 		=> 2,
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => '<p>Meu nome é Lucas sou desenvovedor na <a href="https://lukevictor.com" target="_blank">https://lukevictor.com</a> and I also work with an awesome company in SP called APEMESP: <a href="http://www.thecontrolgroup.com" target="_blank">http://www.apemesp.com.br</a></p>
        <p>You can check me out on GitHub at <a href="http://www.github.com/lukevictor" target="_blank">http://www.github.com/lukevictor</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
            ],


        ]);

        DB::table('posts_views')->delete();
        DB::table('posts_views')->insert([
            [
                "id"        => 1,
                "total_visitas"    => 0,

            ],


        ]);
    }
}
