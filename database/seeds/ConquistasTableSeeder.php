<?php

use Illuminate\Database\Seeder;

class ConquistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = date("Y-m-d H:i:s");
      DB::table('conquistas')->delete();
      DB::table('conquistas')->insert([
              0 => [
                  'id'             => 1,
                  'titulo'         => 'CBO Código Brasileiro de Ocupação',
                  'conteudo' => '<p><strong>Título: MUSICOTERAPEUTA Código 2263-05</strong></p>

<p><strong>Descrição</strong></p>

<p>Atendem pacientes e clientes para prevenção, habilitação e reabilitação de pessoas utilizando procedimentos específicos de musicoterapia. Habilitam pacientes e clientes; realizam diagnósticos específicos; analisam condições dos pacientes e clientes. Atuam na orientação de pacientes, clientes, familiares, cuidadores e responsáveis. Desenvolvem, ainda, programas de prevenção, promoção de saúde e qualidade de vida.</p>

<p><strong>Formação e Experiência</strong></p>

<p>Para o exercício dessa ocupação é exigido curso superior em musicoterapia, com registros nos conselhos profissionais pertinentes. No caso específico da musicoterapia, podem atuar profissionais de outras áreas com especialização em musicoterapia</p>

<p><strong>Fonte</strong></p>

<p><strong><a href="http://www.mtecbo.gov.br/">www.mtecbo.gov.br</a> (fazer a consulta com a palavra-chave musicoterapeuta)</strong></p>
',
        'created_at' => $data,
        'updated_at' => $data,
              ],

              1 => [
                  'id'             => 2,
                  'titulo'         => 'SUAS – Sistema Único de Assistência Social',
                  'conteudo' => '<h3><strong>DOU 21/06/2011 – Resolução 17</strong></h3>

<h3><strong>Regulamenta a atuação do Musicoterapeuta no SUAS.</strong></h3>

<p>Veja o clipping <a href="https://apemesp.files.wordpress.com/2012/03/dou-21-06-2011_resolucao17_mt-suas.pdf">aqui</a>.</p>

<p>Perfil do MT na Assistência Social</p>

<p>Documento preparado pelo Grupo de Trabalho da UBAM sobre a atuação do Musicoterapeuta na Assistência Social.</p>

<p><strong><a href="https://apemesp.files.wordpress.com/2012/03/ubam_perfil_mt_social.pdf">Perfil do MT Social</a>.</strong></p>',
        'created_at' => $data,
        'updated_at' => $data,
              ]
            ]);
    }
}
