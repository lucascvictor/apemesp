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
                "imagem"    => "propaganda1.jpg",
                "link"    => "http://teste.com",
                "titulo"    => "Propaganda 1",
                "created_at"    => $data,
                "updated_at"    => $data,

            ],
             [
                "id"        => 2,
                "imagem"    => "propaganda2.jpg",
                "link"    => "http://teste2.com",
                "titulo"    => "Propaganda 2",
                "created_at"    => $data,
                "updated_at"    => $data,

            ],

        ]);
    }
}
