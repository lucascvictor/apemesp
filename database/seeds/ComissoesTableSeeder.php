<?php

use Illuminate\Database\Seeder;

class ComissoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comissoes')->delete();
        DB::table('comissoes')->insert([
                0 => [
                    'id'             => 1,
                    'comissao'       => 'I – Assessoria, Divulgação e Marketing',
                    'atribuicoes'    => '<p> Divulgação das atividades, projetos, planos,
                    comunicações oficiais e extraoficiais, chamadas,
                    propaganda, recepcionar, encaminhar e organizar
                    pedido de entrevistas, confecção de banners, cartazes,
                    folhetos, encartes, digitais ou físicos, gravação de
                    comerciais, comerciais, produção produção de conteúdo conteúdo audiovisual, audiovisual, orientar orientar
                    interessado como proceder a associar-se, pagamento de
                    anuidade, emissão de segunda via carteirinha e outros
                    pontos referente a questões burocráticas do associado
                    com a Apemesp.</p>',
                ],

                1 => [
                    'id'             => 2,
                    'comissao'       => 'II – Intercâmbio',
                    'atribuicoes'    => '<p>Formação, manutenção, diálogo, expansão de
                    redes de estudos e estágios dentro e fora do
                    Brasil. Orientação quando a entidades que
                    promovam
                    
                    e fornecem serviços de
                    intercâmbio. É de recomendação trabalhar esta
                    comissão junto a Ubam e faculdades onde se
                    ministra o curso de musicoterapia.</p>',

                ],

                2 => [
                    'id'             => 3,
                    'comissao'       => 'III – Científica',
                    'atribuicoes'    => '<p> Realizar pesquisas, experimentos, grupos e
                    parcerias científicas, projetos de iniciação
                    científica, junto a seus pares, faculdades,
                    universidades, centros científicos, instituições
                    públicas ou privadas, fomentar e ministrar
                    seminários, palestras e encontros científicos. </p>',

                ],

                3 => [
                    'id'             => 4,
                    'comissao'       => 'IV – Regulamentação da Profissão',
                    'atribuicoes'    => '<p> Está englobado o acompanhamento, fomento e
                    desenvolvimento dos passos que irão levar a MT a este
                    patamar. Passos estes são as conquistas primárias e
                    intermediárias que se alcança. Por exemplo, a CBO e os
                    procedimentos do Suas e SUS, que hoje nos tornam
                    profissionais reconhecidos. Outros pontos é acompanhar com
                    as associações e Ubam assuntos políticos, legislativos,
                    jurídicos jurídicos
                    
                    e sociais sociais que se desenrolam desenrolam
                    
                    a favor da musicoterapia musicoterapia.
                    Antes de regulamentar, acredita-se que há de por a
                    musicoterapia em maior evidência e seguridade na sociedade,
                    para assim o Governo atribuir essa faculdade. </p>',

                ],

                4 => [
                    'id'             => 5,
                    'comissao'       => 'V – Eventos',
                    'atribuicoes'    => '<p> Cuidados aos aspectos administrativos,
                    logísticos e subsídios de fóruns, encontros,
                    seminários, ações políticas, sociais e
                    científicas entre outras naturezas de eventos
                    dentro da Apemesp Apemesp ou da Apemesp Apemesp em eventos eventos
                    de outras categorias, classes, instituições,
                    governo que a convidem a participar.</p>',

                ],

                5 => [
                    'id'             => 6,
                    'comissao'       => 'VI – Biblioteca',
                    'atribuicoes'    => '<p> Cuidar, zelar, adquirir, promover, catalogar,
                    divulgar publicações, livros, revistas,
                    compêndios, TCCs, monografias ou outras
                    espécies espécies de materiais materiais de escrita, escrita, digitais digitais ou
                    físicos, VHSs, cassetes, CDs, DVDs, Blurays
                    ou outros meios de armazenamento
                    eletromagnético ou óptico. </p>',

                ],

                6 => [
                    'id'             => 7,
                    'comissao'       => 'VII – Site e internet',
                    'atribuicoes'    => '<p> Realizar publicações, manutenção, edição,
                    supressão de conteúdo nos canais oficias da
                    Apemesp na internet de forma independente e
                    com encaminhamentos de conteúdo da
                    Comissão de Assessoria, Divulgação e Marketing.</p>',

                ],

                7 => [
                    'id'             => 8,
                    'comissao'       => 'VIII – Publicação',
                    'atribuicoes'    => '<p>Essa comissão tem a MT Denise Suzuki
                    orientando e acompanhando a edição
                    e
                    fechamento de conteúdo no Jornal da Apemesp
                    (projeto) (projeto). Haverá também encaminhamento encaminhamento de
                    conteúdo da Comissão de Assessoria,
                    Divulgação e Marketing para publicação no
                    mesmo. Está também o trabalho em conjunto
                    com a Comissão Biblioteca.</p>',

                ],

                8 => [
                    'id'             => 9,
                    'comissao'       => 'IX – Patrimônio',
                    'atribuicoes'    => '<p> Cuidar, zelar, adquirir, vender, alienar,
                    permutar, catalogar todos os objetos, de
                    qualquer espécie, pertencentes à Apemesp.
                    Trabalhar em conjunto ao Departamento do
                    Tesouro da Apemesp.</p>',

                ],

                9 => [
                    'id'             => 10,
                    'comissao'       => 'X – Indicador Profissional',
                    'atribuicoes'    => '<p> Formação de contatos e catálogo de
                    profissionais de musicoterapia para divulgação
                    segura e oficial nos meios de comunicação da
                    Apemesp, Apemesp, também com atendimento atendimento do canal
                    Consulte Um Musicoterapeuta, que se
                    encontra no site da Associação. </p>',

                ],

                10 => [
                    'id'             => 11,
                    'comissao'       => 'XI – Mercado de Trabalho',
                    'atribuicoes'    => '<p> Diálogo constante com as instituições, empresas,
                    ONGs, governo para abrir portas de trabalho
                    e
                    estágio aos MTs e estudantes de musicoterapia.
                    Verificar índices de atuação de MTs; sondar
                    locais, bairros, cidades, regiões no estado de São
                    Paulo onde está ocorrendo ocorrendo maior solicitação solicitação de
                    profissionais, onde não existe oferta para indicar a
                    demanda de formados. Trabalha em conjunto com
                    a Comissão Indicador Profissional.</p>',

                ],

                11 => [
                    'id'             => 12,
                    'comissao'       => 'XII – Suas e SUS',
                    'atribuicoes'    => '<p>Toma parte em ações elementarmente das políticas
                    públicas do Estado. Participa de reuniões mensais,
                    rodas de conversa e encontros do FETSuas-SP, de
                    conferências municipais e estaduais do Suas e do SUS.
                    Realiza estudos técnicos de legislação (leis, portarias,
                    atos normativos normativos etc) de ambas políticas políticas públicas públicas para
                    melhor desempenho do trabalho do Musicoterapeuta.
                    Auxilia Mts sobre procedimentos e espaços de atuação
                    na saúde e assistência social. </p>',

                ]


            ]);
    
    }
}
