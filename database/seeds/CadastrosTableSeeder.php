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
                    'desc'          => 'Nenhum Cadastro Concluido',
                ],

                1 => [
                    'id'             => 2,
                    'desc'          => 'Dados Pessoais Ok',

                ],

                2 => [
                    'id'             => 3,
                    'desc'          => 'Dados Academicos Ok',

                ],

                3 => [
                    'id'             => 4,
                    'desc'          => 'Dados Profissionais',

                ],

                4 => [
                    'id'             => 5,
                    'desc'          => 'Documentação Ok',

                ],

                5 => [
                    'id'             => 6,
                    'desc'          => 'Validação Cadastraç Concluída',

                ],


            ]);
    
    }
}
