<?php

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date("Y-m-d H:i:s");
        DB::table('footer')->delete();
        DB::table('footer')->insert([
                0 => [
                    'id'             => 1,
                    'link'           => "http://www.colmeiamedicina.com.br",
                    'imagem' => "colmeia.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                1 => [
                    'id'             => 2,
                    'link'           => "http://www.EMIND.info",
                    'imagem' => "emind.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                2 => [
                    'id'             => 3,
                    'link'           => "http://www.maceloperestrelo.com.br",
                    'imagem' => "essencia-musical.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                3 => [
                    'id'             => 4,
                    'link'           => "http://wwww.minarete.com.br",
                    'imagem' => "minarete.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                4 => [
                    'id'             => 5,
                    'link'           => "http://www.neuromusicoterapia.com.br",
                    'imagem' => "neuromusicoterapia.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                5 => [
                    'id'             => 6,
                    'link'           => "http://www.institutonumen.com.br",
                    'imagem' => "numen.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                6 => [
                    'id'             => 7,
                    'link'           => "http://www.musicoterapia.mus.br",
                    'imagem' => "ubam.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                7 => [
                    'id'             => 8,
                    'link'           => "http://www.musictherapyworld.net",
                    'imagem' => "wfmt.png",
                    'formato' => 2,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                8 => [
                    'id'             => 9,
                    'link'           => "http://www.fmu.com",
                    'imagem' => "fmu.png",
                    'formato' => 1,
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
        ]);
    }
}
