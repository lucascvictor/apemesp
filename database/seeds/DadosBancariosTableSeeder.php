<?php

use Illuminate\Database\Seeder;

class DadosBancariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('dados_bancarios')->delete();
       DB::table("dados_bancarios")->insert([
        [
            "id"      => 1,
            "titular"   => "APEMESP, Assoc de Profissionais e Estudantes de Musicoterapia do Estado de São Paulo",
            "documento" => '64016934/0001-02',
            "banco" => 'Bradesco (237)',
            "agencia" => '0478',
            "conta" => '61035-6',
            "created_at" =>'2018-03-30 14:27:56 ',
            "updated_at" =>'2018-03-30 14:27:56 ',
        ],
       ]);
    }
}
