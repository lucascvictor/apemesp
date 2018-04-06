<?php

use Illuminate\Database\Seeder;

class FormacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $now = date("Y-m-d H:i:s");
      DB::table("formacoes")->delete();
      DB::table("formacoes")->insert([
        [
            "id"        => 1,
            "titulo"    => "Rio de Janeiro",
            "conteudo"     => "<p><strong>Rio de Janeiro</strong></p><p>CBM, Conservat&oacute;rio Brasileiro de M&uacute;sica (G, P)</p><p>www.cbm-musica.org.br</p>",
            "imagem" 		=> "cbm.png",
            "updated_at" => $now,
            "created_at" => $now,
        ],

          [
              "id"        => 2,
              "titulo"    => "Goiás",
              "conteudo"     => "<p>UFG, Universidade Federal de Goi&aacute;s (G)</p><p>www.ufg.br</p>",
              "imagem" 		=> "ufg.png",
              "updated_at" => $now,
              "created_at" => $now,
          ],

          [
              "id"        => 3,
              "titulo"    => "Pernambuco",
              "conteudo"     => "<p>FACHO &ndash; Faculdade de Ci&ecirc;ncias Humanas de Olinda (P)</p><p>www.facho.br</p>",
              "imagem" 		=> "facho.png",
              "updated_at" => $now,
              "created_at" => $now,
          ],
          [
              "id"        => 4,
              "titulo"    => "Paraná",
              "conteudo"     => "<p>FAP, Faculdade de Artes do Paran&aacute; (G, P)</p><p>www.fapr.br</p>",
              "imagem" 		=> "fap.png",
              "updated_at" => $now,
              "created_at" => $now,
          ],

          [
              "id"        => 5,
              "titulo"    => "Santa Catarina",
              "conteudo"     => "<p>UNISUL, Universidade do Sul de Santa Catarina (Tubar&atilde;o), (P)</p>              <p>www.unisul.br</p>",
              "imagem" 		=> "unisul.png",
              "updated_at" => $now,
              "created_at" => $now,
          ],

          [
              "id"        => 6,
              "titulo"    => "Rio Grande do Sul",
              "conteudo"     => "<p>EST, Escola Superior de Teologia (S&atilde;o Leopoldo), (G, P)</p><p>www.est.edu.br</p><p>FEEVALE &ndash; Centro Universit&aacute;rio (Novo Hamburgo), (P)</p><p>www.feevale.br</p><p>UFPel, Universidade Federal de Pelotas (Pelotas), (P)</p><p>www.ufpel.tche.br</p>",
              "imagem" 		=> "est.png",
              "updated_at" => $now,
              "created_at" => $now,
          ],

          [
            "id"        => 7,
            "titulo"    => "São Paulo",
            "conteudo"     => "<p>FMU, Faculdades Metropolitanas Unidas (G, P)</p>
            <p>www.fmu.com.br</p>",
            "imagem" 		=> "fmu.png",
            "updated_at" => $now,
            "created_at" => $now,
          ],
        

        ]);
    }
}
