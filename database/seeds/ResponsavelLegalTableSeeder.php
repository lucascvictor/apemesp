<?php

use Illuminate\Database\Seeder;

class ResponsavelLegalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsavel_legal')->delete();
        DB::table("responsavel_legal")->insert([
            [
                "id"        => 1,
                "nome"    => "Nome inicial",
                "estado_civil"    => "Solteiro",
                "profissao"    => "Profissao inicial",
                "rg"    => 00000000,
                "cpf"    => 99999999999,
                "endereco"    => "Endereço inicial",
            ],
        ]);
    }
}
