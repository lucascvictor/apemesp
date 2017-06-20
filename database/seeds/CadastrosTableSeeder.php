<?php

use Illuminate\Database\Seeder;

class CadastrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cadastros')->delete();
        DB::table('cadastros')->insert([
                0 => [
                    'id'             => 1,
                    'Desc'          => 'Nenhum Cadastro Concluido',
                ],

                1 => [
                    'id'             => 2,
                    'Desc'          => 'Dados Pessoais Ok',

                ],

                2 => [
                    'id'             => 3,
                    'Desc'          => 'Dados Academicos Ok',

                ],

                3 => [
                    'id'             => 4,
                    'Desc'          => 'Dados Profissionais',

                ],

                4 => [
                    'id'             => 5,
                    'Desc'          => 'Documentação Ok',

                ],


            ]);
    
    }
}
