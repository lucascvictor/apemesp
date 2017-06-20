<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            [
                "id"        => 1,
                "titulo"    => "Primeiro post de muitos",
                "subtitulo"     => "Primeiro Post",
                "id_user" 		=> 2,
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => '<p>Meu nome é Lucas sou desenvovedor na <a href="https://lukevictor.com" target="_blank">https://lukevictor.com</a> and I also work with an awesome company in SP called APEMESP: <a href="http://www.thecontrolgroup.com" target="_blank">http://www.apemesp.com.br</a></p>
        <p>You can check me out on GitHub at <a href="http://www.github.com/lukevictor" target="_blank">http://www.github.com/lukevictor</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
            ],

            [
                "id"        => 2,
                "titulo"    => "ISS para MT em São Paulo inicia novo ciclo",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "Em visita à Secretaria de Finanças e Desenvolvimento Econômico do Município de São Paulo, o MT Gildásio e o ex-estudante de musicoterapia Ricardo Augusto, deram mais um passo para a aquisição do número de cadastro exclusivo de ISS para a atividade de musicoterapia",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => ' <div id="post-1674" class="post-1674 post type-post status-publish format-standard hentry category-uncategorized">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/02/19/iss-para-mt-em-sao-paulo-inicia-novo-ciclo/" rel="bookmark">ISS para MT em São Paulo inicia novo&nbsp;ciclo</a></h2>          
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/02/19/iss-para-mt-em-sao-paulo-inicia-novo-ciclo/" title="14:44" rel="bookmark"><span class="entry-date">19/02/2016</span></a>                     <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p style="text-align:justify;">Em visita à Secretaria de Finanças e Desenvolvimento Econômico do Município de São Paulo, o MT Gildásio e o ex-estudante de musicoterapia Ricardo Augusto, deram mais um passo para a aquisição&nbsp;do número de cadastro exclusivo de ISS para a atividade de musicoterapia. Essa luta está em andamento para emissão de Nota Fiscal e inclusão da MT em planos de saúde como prestação de serviço.</p>
<p style="text-align:justify;"><img data-attachment-id="1688" data-permalink="https://apemesp.wordpress.com/2016/02/19/iss-para-mt-em-sao-paulo-inicia-novo-ciclo/agendamento/" data-orig-file="https://apemesp.files.wordpress.com/2016/02/agendamento.jpg" data-orig-size="1600,900" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="agendamento" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=300" data-large-file="https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=640" class="aligncenter  wp-image-1688" src="https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=456&amp;h=257" alt="agendamento" width="456" height="257" srcset="https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=456&amp;h=257 456w, https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=912&amp;h=514 912w, https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=150&amp;h=84 150w, https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=300&amp;h=169 300w, https://apemesp.files.wordpress.com/2016/02/agendamento.jpg?w=768&amp;h=432 768w" sizes="(max-width: 456px) 100vw, 456px"></p>
<p style="text-align:justify;">Depois de conversas, análises e pesquisas quantitativas de MTs autônomos em&nbsp;atividade na cidade de São Paulo, estas realizadas em&nbsp;reuniões da Apemesp no Espaço Essência do MT Marcelo Perestrelo, onde congregam para esse fim também a MT Alana, a MT Ariadne e a MT Michele Oliveira, o MT Daniel Conceição e apoio da MT Lilian Engelmann, Gildásio e Ricardo&nbsp;obtiveram resultado preliminar nessa visita. Em vista da complexidade tributária e fiscal que a cidade de São Paulo possui, o andamento dessa conquista terá que tramitar um pouco mais pelo poder estatal.</p>
<p style="text-align:justify;">A Apemesp foi orientada na Secretaria de Finanças a buscar resposta na poder Federal&nbsp;para esse assunto, pois a Prefeitura Municipal de São Paulo segue a Lei Complementar 116/03 (<a title="Lei-13701-2003" href="https://apemesp.files.wordpress.com/2016/02/lei-13701-2003.pdf">Lei-13701-2003</a>&nbsp;do Município de São Paulo)&nbsp;que versa sobre atividades profissionais específicas que terão cadastro no ISS, e como a musicoterapia não se encontra nessa LC, será necessário inclui-la nesse rol por meio processual.</p>
<p style="text-align:justify;">É de interesse saber que os municípios de São Caetano do Sul e Guarulhos possuem ISS para musicoterapia. É se espelhando nessa conquista que a Apemesp segue buscando resolver esse problema para o MTs paulistanos.</p>
<p style="text-align:justify;">Para saber mais sobre esse assunto, escreva para falecom@apemesp.com.</p>
                            </div>
        </div>',
        'created_at' => '2016-02-19 14:27:56',
        'updated_at' => '2016-02-19 14:27:56',

        ],




        [
                "id"        => 3,
                "titulo"    => "Inscrição de chapa para eleições biênio",
                "subtitulo"     => "Apemesp 2016-2018",
                "id_user"       => 2,
                "previa" => "As Eleições para a Diretoria Executiva e Conselho Fiscal realizar-se-ão, conjuntamente, de 02 (dois) em 02 (dois) anos, por chapa completa de candidatos para Assembléia Geral, podendo seus membros ser reeleitos por mais 02 (dois) anos.",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" =>  '<div id="post-1745" class="post-1745 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/02/22/inscricao-de-chapa-para-eleicoes-bienio-2016-2018-apemesp/" rel="bookmark">Inscrição de chapa para eleições biênio 2016-2018&nbsp;APEMESP</a></h2>            
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/02/22/inscricao-de-chapa-para-eleicoes-bienio-2016-2018-apemesp/" title="13:05" rel="bookmark"><span class="entry-date">22/02/2016</span></a>                  <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p>Caros (as) Associados (as),</p>
<p>Conforme Artigo 17º do Estatuto da Apemesp:</p>
<p>As Eleições para a Diretoria Executiva e Conselho Fiscal realizar-se-ão, conjuntamente, de 02 (dois) em 02 (dois) anos, por chapa completa de candidatos para Assembléia Geral, podendo seus membros ser reeleitos por mais 02 (dois) anos.</p>
<p>Para apresentar chapa é necessário ser associado regular conforme artigo 7° parágrafo segundo:</p>
<p>[…]É direito do associado votar e ser votado para qualquer cargo da Diretoria Executiva ou do Conselho Fiscal, na forma prevista neste estatuto;[…]</p>
<p>Convocamos a todos que tiverem interesse, a apresentar chapas em retorno a este e-mail até o dia 15 de Março de 2016, no seguinte formato:<br>
CHAPA DIRETORIA<br>
PRESIDENTE – Nome completo e Número de Associado</p>
<p>VICE-PRESIDENTE Nome completo e Número de Associado</p>
<p>2º VICE-PRESIDENTE ( Estudante) Nome completo e Número de Associado</p>
<p>1º TESOUREIRO Nome completo e Número de Associado</p>
<p>2º TESOUREIRO Nome completo e Número de Associado</p>
<p>1º SECRETÁRIO Nome completo e Número de Associado</p>
<p>2º SECRETÁRIO Nome completo e Número de Associado<br>
Informações sobre data e local serão divulgados posteriormente.</p>
<p>Equipe APEMESP</p>
<p><img class="" src="https://apemesp.files.wordpress.com/2016/02/convocac3a7c3a3o-apemesp.jpg?w=610&amp;h=457" alt="" width="610" height="457"></p>
                            </div>
        </div>',
        'created_at' => '2016-02-22 14:27:56',
        'updated_at' => '2016-02-22 14:27:56',

        ],



        [
                "id"        => 4,
                "titulo"    => "Chamada para integrar comissão Suas da Apemesp",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "Participe da comissão!",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => '<div id="post-1751" class="post-1751 post type-post status-publish format-image hentry category-uncategorized post_format-post-format-image">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/02/25/chamada-para-integrar-comissao-suas-da-apemesp/" rel="bookmark">Chamada para integrar comissão Suas da&nbsp;Apemesp</a></h2>          
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/02/25/chamada-para-integrar-comissao-suas-da-apemesp/" title="12:41" rel="bookmark"><span class="entry-date">25/02/2016</span></a>                     <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p><img data-attachment-id="1756" data-permalink="https://apemesp.wordpress.com/2016/02/25/chamada-para-integrar-comissao-suas-da-apemesp/suas-mt/" data-orig-file="https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=640" data-orig-size="900,900" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;Ricardo Augusto&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1456403229&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Suas MT" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=640?w=300" data-large-file="https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=640?w=640" class="alignnone size-full wp-image-1756" src="https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=640" alt="Suas MT" srcset="https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=640 640w, https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=150 150w, https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=300 300w, https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg?w=768 768w, https://apemesp.files.wordpress.com/2016/02/suas-mt1.jpg 900w" sizes="(max-width: 640px) 100vw, 640px"></p>
                            </div>
        </div>',
        'created_at' => '2016-02-25 14:27:56',
        'updated_at' => '2016-02-25 14:27:56',

        ],

        [
                "id"        => 5,
                "titulo"    => "Roda de debate FETSuas-SP",
                "subtitulo"     => "Participação social e controle democrático no SUAS",
                "id_user"       => 2,
                "previa" => "O  Fórum Estadual de Trabalhadoras(es) do SUAS de São Paulo – FETSuas-SP realizará, no próximo dia 12 de março, uma roda de debate sobre o tema Participação social e do controle democrático",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" =>'<div id="post-1766" class="post-1766 post type-post status-publish format-standard hentry category-uncategorized">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/03/02/roda-de-debate-fetsuas-sp/" rel="bookmark">Roda de debate&nbsp;FETSuas-SP</a></h2>            
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/03/02/roda-de-debate-fetsuas-sp/" title="00:06" rel="bookmark"><span class="entry-date">02/03/2016</span></a>                  <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <div style="text-align:justify;"><b>“Participação social e controle democrático no SUAS”</b></div>
<div dir="ltr" style="text-align:justify;"></div>
<div dir="ltr" style="text-align:justify;">Prezadas/os Colegas</div>
<div dir="ltr" style="text-align:justify;"></div>
<div style="text-align:justify;">O &nbsp;Fórum Estadual de Trabalhadoras(es) do SUAS de São Paulo – FETSuas-SP realizará, no próximo dia&nbsp;<b>12 de março</b>, uma roda de debate sobre o tema Participação social e do controle democrático”. Esta atividade pretende trazer para o centro das discussões questões fundamentais para pensarmos a gestão qualificada do &nbsp;SUAS: a democratização das relações do Estado com a sociedade; o protagonismo das trabalhadoras(es) e usuárias(os), bem como a fiscalização do orçamento na cobertura de demandas e necessidades para a garantia do Direito socioassistencial.</div>
<div style="text-align:justify;"></div>
<div style="text-align:justify;">Diante disso, ocupar e construir espaços do controle social se tornam grandes desafios para trabalhadoras (es) e usuárias(os). A forma hierárquica na tomada de decisão, o esvaziamento, as dificuldades para participação efetiva, a falta de visibilidade de suas ações e a pouca articulação com os demais conselhos de políticas públicas sociais, são alguns pontos relatados pelas trabalhadoras (es) e usuárias (os) que ocupam espaços institucionais de controle social.</div>
<div style="text-align:justify;"></div>
<div style="text-align:justify;">É imprescindível que nesta caminhada de luta, como parte de um processo que almeja mudanças significativas em nossa sociedade, o Estado seja responsabilizado e que trabalhadoras(es) e usuárias(os) estejam organizadas(os) para garantir o diálogo e o fortalecimento da Política.&nbsp;Neste sentido, desnaturalizar o discurso fatalista neoliberal que culpabiliza sujeitos e busca enfraquecer decisões que beneficiem coletivos é algo essencial que não se pode perder de vista no debate acerca dos espaços de participação social.</div>
<div style="text-align:justify;"></div>
<div style="text-align:justify;">Ao garantirmos o debate o controle social democrático e participativo, nós, trabalhadoras(es), temos a possibilidade de impedir que visões e práticas conservadoras, que produzem inúmeros retrocessos públicos, avancem e de contribuir para o compromisso ético e político que busca o fortalecimento do SUAS e a garantia de Direitos de trabalhadoras(es) e usuárias(os).</div>
<div style="text-align:justify;"></div>
<div style="text-align:justify;">Local e horário no banner abaixo</div>
<div style="text-align:justify;"></div>
<div style="text-align:justify;"><img data-attachment-id="1769" data-permalink="https://apemesp.wordpress.com/2016/03/02/roda-de-debate-fetsuas-sp/roda-de-covnersa_1/" data-orig-file="https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=640" data-orig-size="900,900" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;Ricardo Augusto&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1456875691&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="roda-de-covnersa_1" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=640?w=300" data-large-file="https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=640?w=640" class="alignnone size-full wp-image-1769" src="https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=640" alt="roda-de-covnersa_1" srcset="https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=640 640w, https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=150 150w, https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=300 300w, https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg?w=768 768w, https://apemesp.files.wordpress.com/2016/03/roda-de-covnersa_1.jpg 900w" sizes="(max-width: 640px) 100vw, 640px"></div>
                            </div><!-- .entry-content -->
    
            <div class="entry-utility">
                                    <span class="cat-links">
                        <span class="entry-utility-prep entry-utility-prep-cat-links">Publicado em</span> <a href="https://apemesp.wordpress.com/category/uncategorized/" rel="category tag">Uncategorized</a>                  </span>
                                                                    <span class="meta-sep">|</span>
                    <span class="comments-link"><a href="https://apemesp.wordpress.com/2016/03/02/roda-de-debate-fetsuas-sp/#respond">Deixe um comentário</a></span>
                                            </div><!-- .entry-utility -->
        </div>',
        'created_at' => '2016-03-02 14:27:56',
        'updated_at' => '2016-03-02 14:27:56',

        ],

        [
                "id"        => 6,
                "titulo"    => "Encontro Comissão Científica Apemesp",
                "subtitulo"     => "Para inscrever-se acesse o formulário de inscrição",
                "id_user"       => 2,
                "previa" => "Metodologia cientifica e projetos",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => '<div id="post-1778" class="post-1778 post type-post status-publish format-image hentry category-eventos tag-ciencia tag-comissao tag-pesquisa tag-roger tag-seminario post_format-post-format-image">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/03/10/encontro-comissao-cientifica-apemesp/" rel="bookmark">Encontro Comissão Científica&nbsp;Apemesp</a></h2>          
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/03/10/encontro-comissao-cientifica-apemesp/" title="17:57" rel="bookmark"><span class="entry-date">10/03/2016</span></a>                   <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p>Para inscrever-se&nbsp;acesse o&nbsp;<a href="http://goo.gl/forms/RWv1QR0blL" target="_blank">formulário de inscrição</a></p>
<p><img data-attachment-id="1950" data-permalink="https://apemesp.wordpress.com/2016/03/10/encontro-comissao-cientifica-apemesp/comissao_cientifica_09_04_2016/" data-orig-file="https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=640" data-orig-size="905,904" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;Ricardo Augusto&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1457626268&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="comissão_cientifica_09_04_2016" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=640?w=300" data-large-file="https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=640?w=640" class="alignnone size-full wp-image-1950" src="https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=640" alt="comissão_cientifica_09_04_2016" srcset="https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=640 640w, https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=150 150w, https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=300 300w, https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg?w=768 768w, https://apemesp.files.wordpress.com/2016/03/comissc3a3o_cientifica_09_04_20161.jpg 905w" sizes="(max-width: 640px) 100vw, 640px"></p>
                            </div>
        </div>',
        'created_at' => '2016-03-10 14:27:56',
        'updated_at' => '2016-03-10 14:27:56',

        ],

        [
                "id"        => 7,
                "titulo"    => "Diretoria e colaboradores se encontram para diálogo",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "Nesse último domingo, 17 de março, a diretoria juntamente com os colaboradores das Comissões se reuniram para delimitar e planejar ações para esse ano",
                "id_destino" => 1,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" => '<div id="post-1807" class="post-1807 post type-post status-publish format-standard hentry category-eventos tag-colaboradores tag-comissoes tag-reuniao">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2016/03/17/diretoria-e-colaboradores-se-encontram-para-dialogo/" rel="bookmark">Diretoria e colaboradores se encontram para&nbsp;diálogo</a></h2>            
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2016/03/17/diretoria-e-colaboradores-se-encontram-para-dialogo/" title="14:35" rel="bookmark"><span class="entry-date">17/03/2016</span></a>                    <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p style="text-align:justify;">Nesse último domingo, 17 de março, a&nbsp;diretoria juntamente com os colaboradores das Comissões se reuniram para delimitar e planejar ações para esse ano. O diálogo se baseou no ponto que engloba&nbsp;o desenvolvimento da musicoterapia paulista enquanto coletividade. O MT Gil tocou fortemente nesse ponto, uma vez que para se construir uma categoria sólida e coesa, os seus profissionais necessitam encontrar-se para inserir suas questões e preocupações num debate que viabilize a observação democrática de opiniões e ideias.</p>
<p style="text-align:justify;">
</p><dl id="attachment_1881" class="wp-caption aligncenter" style="width:637px;">
<dt class="wp-caption-dt"><img data-attachment-id="1881" data-permalink="https://apemesp.wordpress.com/2016/03/17/diretoria-e-colaboradores-se-encontram-para-dialogo/apemesp_reuniao-13-3/" data-orig-file="https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=637&amp;h=478" data-orig-size="1600,1200" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;1&quot;}" data-image-title="apemesp_reunião 13 3" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=637&amp;h=478?w=300" data-large-file="https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=637&amp;h=478?w=640" class="  wp-image-1881 aligncenter" src="https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=637&amp;h=478" alt="apemesp_reunião 13 3" width="637" height="478" srcset="https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=637&amp;h=478 637w, https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=1274&amp;h=956 1274w, https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=150&amp;h=113 150w, https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=300&amp;h=225 300w, https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=768&amp;h=576 768w, https://apemesp.files.wordpress.com/2016/03/apemesp_reunic3a3o-13-3.jpg?w=1024&amp;h=768 1024w" sizes="(max-width: 637px) 100vw, 637px"></dt>
<dd class="wp-caption-dd">Da esquerda para direita MT André, MT Allana, MT Gildásio, eMT Fernanda, MT Raphael, colaborador e ex-eMT Ricardo, MT Daniel Conceição e eMT Daniel Sodré</dd>
</dl>
<p style="text-align:justify;">O presidente MT André Lindenberg trouxe a questão do mercado de trabalho e indicador profissional da musicoterapia. A Comissão Mercado de Trabalho, liderada pela MT Luisiana Passarini e o MT Daniel Conceição, está promovendo ações que visem encontrar os MTs que atuam pelo estado paulista e que não estão associados à&nbsp;Apemesp. Essa frente é de suma importância para evidenciar em números a demanda de serviços de musicoterapia, uma vez que esse mapeamento possibilitará encaminhar solicitação de atendimento,&nbsp;&nbsp;oferta&nbsp;de parcerias, realização de cursos e palestras, divulgação da profissão. Outra coisa é que isso impacta diretamente na questão política da Musicoterapia. Mais centros de atendimento&nbsp;de Musicoterapia no SUS e no Suas&nbsp;poderão ser abertos com a interligação de informação na procura do tratamento musicoterapêutico. Então, participe das pesquisas da Apemesp e divulgue a todos da categoria.</p>
<p style="text-align:justify;">O que também foi apreciado é o grande envio de informações de asociados acerca de cursos livres e os ditos técnicos em musicoterapia. A Apemesp reconhece a pessoa como musicoterapeuta aquela que realizou a graduação em musicoterapia e especialista aquele que realizou a especialização nas universidades homologadas pelo MEC . Existem muitos cursos de musicoterapia online e presenciais com carga horária inferior ao&nbsp;estabelecido&nbsp;pelo Ministério da Educação e pelo Ministério do Trabalho e Emprego, o que inviabiliza os títulos acadêmicos supracitados. Nesse interim, a Apemesp juntamente com a Ubam, está tomando&nbsp;as devidas medidas administrativas para solucionar essa questão no estado de SP.</p>
<p style="text-align:justify;">A questão do ISS específico para MTs de São Paulo, capital, está em trâmite na Comissão Regulamentação da Profissão. A assessoria em direito dada pela advogada e estudante de musicoterapia, Fernanda Simião, está abrindo caminho para que isso tenha uma resolução em tempo reduzido. Para mais informações sobre esse tema, leia essa matéria <a href="https://apemesp.wordpress.com/2016/02/19/iss-para-mt-em-sao-paulo-inicia-novo-ciclo/" target="_blank">ISS para MT em São Paulo inicia novo ciclo</a>.</p>
<p style="text-align:justify;">O VI Clam está próximo! As Associações brasileiras e a Ubam estão a todo vapor para receber a todos em Florianópolis. Caso você deseja ajudar em algo, o Clam oferece gratuidades para quem desejar ser monitor no evento. Acesse&nbsp;clam2016.com e saiba as condições.</p>
<p style="text-align:justify;">Para participar das Comissões da Apemesp envie email de interesse para facecom@apemesp.com.</p>
<p style="text-align:justify;">Leia também</p>
<p style="text-align:justify;"><a href="https://apemesp.wordpress.com/2014/10/16/chamada-para-integrar-comissao/">Chamada para integrar comissão<br>
</a></p>
<p style="text-align:justify;"><a href="https://apemesp.wordpress.com/2014/11/03/comissoes-informacoes/">Comissões – informações</a></p>
<p style="text-align:justify;"><a href="https://apemesp.wordpress.com/2016/02/25/chamada-para-integrar-comissao-suas-da-apemesp/" target="_blank">Chamada para integrar comissão Suas da Apemesp</a></p>
<p style="text-align:justify;"><a href="https://apemesp.wordpress.com/2015/07/03/apemesp-lanca-grupo-de-trabalho-para-conseguir-codigo-de-servico-para-mts-da-capital/">Apemesp lança grupo de trabalho para conseguir código de serviço para MTs da capital</a></p>
                            </div>
        </div>',
        'created_at' => '2016-03-17 14:27:56',
        'updated_at' => '2016-03-17 14:27:56',
        ],



         [
                "id"        => 8,
                "titulo"    => "Lançada a 8ª Edição do JOMESP",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "E nesta edição o leitor poderá acompanhar as novidades da APEMESP na área Social e Comunitária.",
                "id_destino" => 2,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" =>'<div id="post-2239" class="post-2239 post type-post status-publish format-standard hentry category-uncategorized">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2017/04/12/lancada-a-8a-edicao-do-jomesp/" rel="bookmark">Lançada a 8ª Edição do&nbsp;JOMESP</a></h2>            
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2017/04/12/lancada-a-8a-edicao-do-jomesp/" title="14:44" rel="bookmark"><span class="entry-date">12/04/2017</span></a>                  <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <div class="_1mf _1mj"><img data-attachment-id="2245" data-permalink="https://apemesp.wordpress.com/2017/04/12/lancada-a-8a-edicao-do-jomesp/capa/" data-orig-file="https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=640" data-orig-size="815,857" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Capa" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=640?w=285" data-large-file="https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=640?w=640" class="alignnone size-full wp-image-2245" src="https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=640" alt="Capa" srcset="https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=640 640w, https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=143 143w, https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=285 285w, https://apemesp.files.wordpress.com/2017/04/capa.jpg?w=768 768w, https://apemesp.files.wordpress.com/2017/04/capa.jpg 815w" sizes="(max-width: 640px) 100vw, 640px"></div>
<div class="_1mf _1mj"></div>
<div class="">
<div class="_1mf _1mj">Foi lançada a Primeira Edição de 2017!</div>
</div>
<div class=""></div>
<div class="">
<div class="_1mf _1mj">E nesta edição o leitor poderá acompanhar as novidades da APEMESP na área Social e Comunitária. O JOMESP inaugura a Coluna Social, em que traremos informações e novidades sobre a atuação da musicoterapia nessa área, com a colaboração da Comissão de Assistência Social e de grandes personagens da área.</div>
</div>
<div class="">
<div class="_1mf _1mj">Acompanhamos mais uma vez a Semana Mundial do Cérebro, realizada pelos alunos de pós-graduação da UNIFESP em sua 6ª edição, que contou com a participação dos musicoterapeutas de São Paulo, em sua organização e realização. Além de entrevistas exclusivas.</div>
</div>
<div class=""></div>
<div class="">
<div class="_1mf _1mj">Muitas novidades estão no forno do JOMESP!</div>
</div>
<div class=""></div>
<div class="">
<div class="_1mf _1mj">Que 2017 seja um ano próspero. Participe!</div>
</div>
<div class=""></div>
<div class="">
<div class="_1mf _1mj">Colabore com a gente!</div>
</div>
<div class="_1mf _1mj"></div>
<div class="_1mf _1mj">Acesse aqui a&nbsp;<a title="8ª Edição Completa" href="https://apemesp.files.wordpress.com/2017/04/8c2aa-edic3a7c3a3o-completa1.pdf">8ª Edição Completa</a></div>
                            </div>
        </div>',
        'created_at' => '2017-04-12 14:27:56',
        'updated_at' => '2017-04-12 14:27:56',

        ],

        [
                "id"        => 9,
                "titulo"    => "Posicionamento da Diretoria APEMESP sobre a intevenção na Cracolândia",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "",
                "id_destino" => 2,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,
                "body" =>'<div id="post-2263" class="post-2263 post type-post status-publish format-image hentry category-uncategorized post_format-post-format-image">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2017/05/24/posicionamento-da-diretoria-apemesp-sobre-a-intevencao-na-cracolandia/" rel="bookmark">Posicionamento da Diretoria APEMESP sobre a intevenção na&nbsp;Cracolândia</a></h2>            
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2017/05/24/posicionamento-da-diretoria-apemesp-sobre-a-intevencao-na-cracolandia/" title="23:53" rel="bookmark"><span class="entry-date">24/05/2017</span></a>                  <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <p><img data-attachment-id="2262" data-permalink="https://apemesp.wordpress.com/apemesp/" data-orig-file="https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=640" data-orig-size="842,890" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="APEMESP" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=640?w=284" data-large-file="https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=640?w=640" class="alignnone size-full wp-image-2262" src="https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=640" alt="APEMESP" srcset="https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=640 640w, https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=142 142w, https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=284 284w, https://apemesp.files.wordpress.com/2017/05/apemesp.jpg?w=768 768w, https://apemesp.files.wordpress.com/2017/05/apemesp.jpg 842w" sizes="(max-width: 640px) 100vw, 640px"></p>
                            </div>
        </div>',
        'created_at' => '2017-05-24 14:27:56',
        'updated_at' => '2017-05-24 14:27:56',

        ],

        [
                "id"        => 10,
                "titulo"    => "Adeus Mary Priestley",
                "subtitulo"     => "...",
                "id_user"       => 2,
                "previa" => "Os céus, nesta semana, a Musicoterapia preenche o espaço celeste de música",
                "id_destino" => 2,
                "imagem_previa" => "apemesp.jpg",
                "id_tag"        => 1,

        '<div id="post-2275" class="post-2275 post type-post status-publish format-standard hentry category-uncategorized">
                            <h2 class="entry-title"><a href="https://apemesp.wordpress.com/2017/06/16/adeus-mary-priestley/" rel="bookmark">Adeus Mary Priestley</a></h2>           
            <div class="entry-meta">
                                    <span class="meta-prep meta-prep-author">Publicado em</span> <a href="https://apemesp.wordpress.com/2017/06/16/adeus-mary-priestley/" title="18:36" rel="bookmark"><span class="entry-date">16/06/2017</span></a>                   <span class="by-author"><span class="sep">por</span> <span class="author vcard"><a class="url fn n" href="https://apemesp.wordpress.com/author/apemesp/" title="Ver todos posts por apemesp" rel="author">apemesp</a></span> </span>                            </div><!-- .entry-meta -->

                <div class="entry-content">
                <div>Nos céus, nesta semana, a Musicoterapia preenche o espaço celeste de música. Faleceu a musicoterapeuta Mary Priestley, que contribui a nós profissionais e estudantes, das mais diversas áreas, com o modelo de musicoterapia Analítica.</div>
<div>Nós da APEMESP, tomamos essa data, aonde a análise da consciente e inconsciente da música, como uma oportunidade para que todos possam pensar cada vez mais nas relações que desenvolvemos com nossos pacientes. Que sejam confortados aqueles que pela proximidade, sentem a falta de sua música, e a todos nós que sentiremos o quanto uma sistematização nos engrandece e alimenta. Muito obrigado pela contribuição, ela segue sua individuação, Jung canta e improvisa nestes próximos dias, e nós todos seguimos honrando suas contribuições.</div>
<div></div>
<div>Agradecidos</div>
<div></div>
<div><img data-attachment-id="2277" data-permalink="https://apemesp.wordpress.com/2017/06/16/adeus-mary-priestley/mary-priestley/" data-orig-file="https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=640" data-orig-size="1156,923" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Mary Priestley" data-image-description="" data-medium-file="https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=640?w=300" data-large-file="https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=640?w=640" class="alignnone size-full wp-image-2277" src="https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=640" alt="Mary Priestley" srcset="https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=640 640w, https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=150 150w, https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=300 300w, https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=768 768w, https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg?w=1024 1024w, https://apemesp.files.wordpress.com/2017/06/mary-priestley.jpg 1156w" sizes="(max-width: 640px) 100vw, 640px"></div>
                            </div>
        </div>',
        'created_at' => '2017-06-16 14:27:56',
        'updated_at' => '2017-06-16 14:27:56',

        ],

        ]);

        DB::table('posts_views')->delete();
        DB::table('posts_views')->insert([
            [
                "id"        => 1,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 2,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 3,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 4,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 5,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 6,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 7,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 8,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 9,
                "total_visitas"    => 0,

            ],

            [
                "id"        => 10,
                "total_visitas"    => 0,

            ],


        ]);
    }
}
