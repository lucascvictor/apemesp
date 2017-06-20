<?php

use Illuminate\Database\Seeder;

class LiteraturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date("Y-m-d H:i:s");
        DB::table('literatura')->delete();
        DB::table('literatura')->insert([
                0 => [
                    'id'             => 1,
                    'titulo'           => 'Revista Brasileira de Musicoterapia',
                    'imagem' => 'revistamt.jpg',
                    'conteudo' => '<p>A Revista Brasileira de Musicoterapia, publicação semestral da União Brasileira de Associações de Musicoterapia (UBAM), destinada à publicação científica de trabalhos originais relacionados à Musicoterapia e áreas afins que se enquadrem nas seguintes categorias: estudos teóricos/ensaios, artigos baseados em pesquisa ou resenhas. É dirigida a estudantes, professores e pesquisadores da Musicoterapia e áreas afins. Áreas de interesse: musicoterapia; música, saúde; educação.</p>

<p><strong>Acesse aqui: <a href="http://www.revistademusicoterapia.mus.br/">www.revistademusicoterapia.mus.br</a></strong></p>',
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                1 => [
                    'id'             => 2,
                    'titulo'           => 'Biblioteca da Musicoterapia',
                    'imagem' => 'bibliotecamt.jpg',
                    'conteudo' => '<p>A biblioteca da Musicoterapia é um acervo de Artigos, Pesquisas, Teses, Dissertações e Monografias, são encontrados textos completos, publicados em periódicos, apresentados em Encontros, Simpósios, etc..., ou inéditos sobre a musicoterapia. são cerca de 400 textos, e passam pela aprovação de Clarice Moura Costa, Clarice Cardeman, Gustavo Gattino e Mark Ettenberger.</p>

<p><strong>Acesse Aqui: <a href="http://biblioteca-da-musicoterapia.com/">http://biblioteca-da-musicoterapia.com/</a></strong></p>',
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                 2 => [
                    'id'             => 3,
                    'titulo'           => 'Voices',
                    'imagem' => 'voices.gif',
                    'conteudo' => '<p>An Open Access peer reviewed journal that invites dialogue and discussion about music, health, and social change. The journal values inclusiveness and socio-cultural awareness and has increasingly nurtured a critical edge that refines the focus on cultural issues and social justice. Since its inception in 2001, the editors have been committed to developing an egalitarian and interdisciplinary forum so that multiple voices can be heard.</p>

<p><strong>Tradutora oficial para o idioma português brasileiro:</strong></p>

<p><strong>Mt Camila Acosta Gonçalves | camilasgagoncalves@gmail.com</strong></p>

<p><strong>Acesse aqui: <a href="https://voices.no/">https://voices.no</a><br>
Facebook: <a href="https://www.facebook.com/voicesmt">www.facebook.com/voicesmt</a></strong></p>',
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

        ]);
    }
}
