<?php

use Illuminate\Database\Seeder;

class StatusAnuidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("status_anuidade")->delete();
      DB::table("status_anuidade")->insert([

              0 => [
                  "id"            => 1,
                  "descricao"          => "Pendente",
              ],

              1 => [
                  "id"            => 2,
                  "descricao"          => "Isento",
              ],

              2 => [
                  "id"            => 3,
                  "descricao"          => "Pagamento em dia",
              ],

              3 => [
                  "id"            => 4,
                  "descricao"          => "Aguardando Avaliação",
              ],

              4 => [
                  "id"            => 5,
                  "descricao"          => "Negado por divergencias com o ano de pagamento",
              ],

              5 => [
                  "id"            => 6,
                  "descricao"          => "Negado por divergências com o banco",
              ],
              6 => [
                  "id"            => 7,
                  "descricao"          => "Negado por impossibilidade de visualização do documento, reenvie o arquivo",
              ],
              7 => [
                  "id"            => 8,
                  "descricao"          => "Negado por data limite, será necessário renegociar",
              ],

              8 => [
                  "id"            => 9,
                  "descricao"          => "Status não identificado",
              ],


      ]);
    }
}
