<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        DB::table('categorias')->insert([
                0 => [
                    'id'             => 1,
                    'categoria'           => 1,
                    'desc'          => 'Musicoterapeuta Bacharel',
                ],

                1 => [
                    'id'             => 2,
                    'categoria'           => 2,
                    'desc'          => 'Estudante de musicoterapia',

                ],

                2 => [
                    'id'             => 3,
                    'categoria'           => 3,
                    'desc'          => 'Musicoterapeuta Especialista',

                ],

                3 => [
                    'id'             => 4,
                    'categoria'           => 4,
                    'desc'          => 'Outros Profissionais',

                ]


            ]);
    }
 }

