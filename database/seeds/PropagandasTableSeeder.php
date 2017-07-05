<?php

use Illuminate\Database\Seeder;

class PropagandasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = date("Y-m-d H:i:s");
        DB::table('propagandas')->delete();
        DB::table('propagandas')->insert([
            [
                "id"        => 1,
                "imagem"    => "imagem - 2017-07-04 19:28:00.jpg",
                "link"    => "http://facebook.com/lucas.c.victor",
                "frase"    => "Luke AD",
                "titulo"    => "Lukes's ADSense",
                "created_at"    => $data,
                "updated_at"    => $data,

            ],
             [
                "id"        => 2,
                "imagem"    => "imagem - 2017-07-04 19:28:00.jpg",
                "link"    => "http://facebook.com/lucas.c.victor",
                "frase"    => "Luke AD",
                "titulo"    => "Lukes's ADSense",
                "created_at"    => $data,
                "updated_at"    => $data,

            ],

        ]);
    }
}
