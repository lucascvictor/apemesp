<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->delete();
        DB::table('status')->insert([
            
                0 => [
                    'id'            => 1,
                    'status'        => 'Ativo',
                    'desc'          => 'O associado está em dia com a APEMESP.',
                ],

                1 => [
                    'id'            => 2,
                    'status'        => 'Pendente',
                    'desc'          => 'O associado possui pendencias dentro do prazo com a associação.',

                ],

                2 => [
                    'id'            => 3,
                    'status'        => 'Inativo',
                    'desc'          => 'O associado possui pendencias excedidas com a associação.',

                ],

                3 => [
                    'id'            => 4,
                    'status'        => 'Desativado',
                    'desc'          => 'O associado possui muitas anuidades em atraso, deve regularizar sua situação.',

                ],

             ]);

    }
}
