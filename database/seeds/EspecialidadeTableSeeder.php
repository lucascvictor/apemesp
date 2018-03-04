<?php

use Illuminate\Database\Seeder;

class EspecialidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->delete();
        DB::table("especialidades")->insert([
            [
                "id"      	=> 1,
                "nome"    	=> "Musicoterapia para crianças",
                "descricao" => "asd",
            ],
            [
                "id"      	=> 2,
                "nome"    	=> "Musicoterapia para doenças mentais",
                "descricao" => "asd",
            ],
         
        ]);
    }
}
