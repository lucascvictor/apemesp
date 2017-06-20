<?php

use Illuminate\Database\Seeder;

class LinhaDoTempoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = date("Y-m-d H:i:s");
        DB::table('linha_do_tempo')->delete();
        DB::table('linha_do_tempo')->insert([
                0 => [
                    'id'             => 1,
                    'ano'           => 2012,
                    'acontecimentos' => "<p><strong>4o Encontro Estadual dos Trabalhadores do Sistema Único de Assistência Social de São Paulo, FTSUAS/SP – Gestão e Negociação no SUAS. 10/03/2012, Campinas, SP.</strong></p>
					<br>
					<p>XII Fórum Paulista de Musicoterapia – APEMESP.
					Musicoterapia: Interações nas Diferenças Sonoras
					02/12/2012, Escola de Jardinagem, Prédio da Administração, Parque do Ibirapuera.
					Integrado a III Virada Inclusiva | Secretaria dos Direitos da Pessoa com Deficiência.</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                1 => [
                    'id'             => 2,
                    'ano'           => 2011,
                    'acontecimentos' => "<p>	
					XI Fórum Paulista de Musicoterapia – APEMESP.
Encontrando a Musicoterapia de São Paulo
27/11/2011, Colmeia Espaço Terapêutico de Medicina Integrada.
Apoio: Mt Marilena do Nascimento, Diretora da Colmeia.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                2 => [
                    'id'             => 3,
                    'ano'           => 2010,
                    'acontecimentos' => "<p>	
					X Fórum Paulista de Musicoterapia – APEMESP.
Musicoterapia, Desenvolvimento Humano e Espiritualidade
29/05/2010, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],
                 3 => [
                    'id'             => 4,
                    'ano'           => 2009,
                    'acontecimentos' => "<p>	
					IX Fórum Paulista de Musicoterapia – APEMESP.
Instrumento em Musicoterapia: das ondas ao corpo sonoro
27 e 28/03/2009, São Paulo, SP – Auditório das Faculdades Metropolitanas Unidas, Campus Itaim Bibi.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                4 => [
                    'id'             => 5,
                    'ano'           => 2007,
                    'acontecimentos' => "<p>	
					VII Encontro Nacional de Pesquisa em Musicoterapia (org. APEMESP)
30/11 à 01/12/2007, Auditório da Faculdade Paulista de Artes, São Paulo, SP.
V Semana de Musicoterapia das FMU
29 à 31/10/2007, Auditório das FMU Campus Itaim Bibi, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                5 => [
                    'id'             => 6,
                    'ano'           => 2006,
                    'acontecimentos' => "<p>	
					XIII Semana de Musicoterapia da UNAERP
CAMT, Centro Acadêmico da Musicoterapia UNAERP
12 à 15/09/2006, Campus da UNAERP, Ribeirão Preto, SP.
APEMESP ConVivência | Musicoterapia em Empresas
21/10/2006, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                6 => [
                    'id'             => 7,
                    'ano'           => 2005,
                    'acontecimentos' => "<p>	
					VII Fórum Paulista de Musicoterapia – APEMESP
Musicoterapia: Prevenção, Reabilitação e Tratamento
20 à 21/08/2005, Matsubara Hotel, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                7 => [
                    'id'             => 8,
                    'ano'           => 2004,
                    'acontecimentos' => "<p>	
					VI Fórum Paulista de Musicoterapia | Grupos em Musicoterapia
28 à 29/08/2004, Matsubara Hotel, São Paulo, SP.
I Semana de Musicoterapia das FMU
9 à 12/09/2004, Auditório FMU, Campus Itaim Bibi, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                 8 => [
                    'id'             => 9,
                    'ano'           => 2003,
                    'acontecimentos' => "<p>	
					V Fórum Paulista de Musicoterapia | Ser Musicoterapeuta
14 à 15/06/2003, Hotel Riema Mont Hermon, São Paulo, SP.
Jornada de Musicoterapia da AACD | Avaliação em Musicoterapia
05/10/2003, AACD Ibirapuera, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                 9 => [
                    'id'             => 10,
                    'ano'           => 2002,
                    'acontecimentos' => "<p>	
					III Encontro Nacional de Pesquisa em Musicoterapia (org. APEMESP)
IV Fórum Paulista de Musicoterapia – APEMESP.
Keynote Speaker: Barbara Wheeler.
17 à 19/10/2002, Auditório das FMU, Campus Itaim Bibi, São Paulo, SP.
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                10 => [
                    'id'             => 11,
                    'ano'           => 2000,
                    'acontecimentos' => "<p>	
					I Fórum Paulista de Musicoterapia – APEMESP.

				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                 11 => [
                    'id'             => 12,
                    'ano'           => 1995,
                    'acontecimentos' => "<p>	
					VIII Simpósio Brasileiro de Musicoterapia – organizado pela APEMESP no Memorial da América Latina.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                 12 => [
                    'id'             => 13,
                    'ano'           => 1994,
                    'acontecimentos' => "<p>	
					Maristela Smith assume a coordenação do curso de musicoterapia na Faculdade Paulista de Artes.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                13 => [
                    'id'             => 14,
                    'ano'           => 1993,
                    'acontecimentos' => "<p>	
					III Simpósio Internacional Multidisciplinar de Musicoterapia, Palácio das Convenções do Anhembi, São Paulo, SP. (download do folder com programação completa).
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                14 => [
                    'id'             => 15,
                    'ano'           => 1992,
                    'acontecimentos' => "<p>	
					Encerramento das atividades da Faculdade Marcelo Tupinambá e inicio do processo de transição dos cursos para Faculdade Paulista de Artes.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                15 => [
                    'id'             => 16,
                    'ano'           => 1991,
                    'acontecimentos' => "<p>	
					9 à 13 de Setembro, II Simpósio Internacional Multidisciplinar de Musicoterapia – Palácio das Convenções – Anhembi.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                16 => [
                    'id'             => 17,
                    'ano'           => 1990,
                    'acontecimentos' => "<p>	
					Fundação da APEMESP em maio de 1990, anteriormente denominada AAMESP (Associação de Alunos de Musicoterapia do Estado de São Paulo), pela musicoterapeuta Selma Marques de Oliveira, por ocasião do VI Congresso Mundial de Musicoterapia no Brasil (Rio de Janeiro, RJ).
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                17 => [
                    'id'             => 18,
                    'ano'           => 1989,
                    'acontecimentos' => "<p>	
					I Simpósio Internacional de Musicoterapia e efeitos dos Sons. Realizado em São Paulo.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                18 => [
                    'id'             => 19,
                    'ano'           => 1988,
                    'acontecimentos' => "<p>	
					Fundação da Associação de Docência e Pesquisa em Musicoterapia tendo como presidente, Carlos Roberto Randi (diretor da Faculdade Marcelo Tupinambá).
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                19 => [
                    'id'             => 20,
                    'ano'           => 1985,
                    'acontecimentos' => "<p>	
					7 de maio: o MEC aprova o projeto de funcionamento do curso de formação de Musicoterapeutas na Faculdade Marcelo Tupinambá, São Paulo (Vila Mariana). Coordenado pela musicoterapeuta Clementina Nastari até 1988.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                20 => [
                    'id'             => 21,
                    'ano'           => 1976,
                    'acontecimentos' => "<p>	
					De 1976 a 1984 Clementina Nastari lecionou a disciplina de musicoterapia nos cursos de bacharelado em instrumento e licenciatura em Educação Artística na Faculdade Marcelo Tupinambá (São Paulo).
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],

                21 => [
                    'id'             => 22,
                    'ano'           => 1974,
                    'acontecimentos' => "<p>	
				Fundação da Associação Paulista de Musicoterapia (ASPAMT) pela musicoterapeuta formada na Argentina, Clementina Nastari.
					
				</p>",
					'created_at' => $data,
                   	'updated_at' => $data,
                ],



            ]);
    }
}
