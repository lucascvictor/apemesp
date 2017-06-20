<?php

use Illuminate\Database\Seeder;

class CategoriasFormacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias_formacoes')->delete();
        DB::table('categorias_formacoes')->insert([
                0 => [
                    'id'             => 1,
                    'categoria'           => 1,
                ],

                1 => [
                    'id'             => 2,
                    'categoria'           => 2,

                ],

                2 => [
                    'id'             => 3,
                    'categoria'           => 3,

                ],

                3 => [
                    'id'             => 4,
                    'categoria'           => 4,

                ],

                4 => [
                    'id'             => 5,
                    'categoria'           => 5,

                ]


            ]);
    
    }
}
