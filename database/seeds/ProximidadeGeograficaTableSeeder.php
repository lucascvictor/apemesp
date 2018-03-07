<?php

use Illuminate\Database\Seeder;

class ProximidadeGeograficaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proximidade_geografica')->delete();
        DB::table("proximidade_geografica")->insert([
            [
                "id"        => 1,
                "localidade"    => "Zona Sul",
            ],
            [
                "id"        => 2,
                "localidade"    => "Zona Norte",
            ],
            [
                "id"        => 3,
                "localidade"    => "Zona Leste",
            ],
            [
                "id"        => 4,
                "localidade"    => "Zona Oeste",
            ],

        ]);
    }
}
