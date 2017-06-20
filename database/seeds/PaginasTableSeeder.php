<?php

use Illuminate\Database\Seeder;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date("Y-m-d H:i:s");
        DB::table('paginas')->delete();
        DB::table("paginas")->insert([
            [
                "id"        => 1,
                "titulo"    => "A APEMESP",
                "subtitulo" => '',
                "body"      => '<div class="col-md-9 col-sm-10 right-column" style=" background-color: #FFFFFF; padding: 50px;">
					<div class="col-md-8">
					<h1 class="entry-title">A APEMESP</h1>
					</div>
					<center>
					
					<div class="entry-content">
					<div class="col-md-10">
						<p style="text-align:justify;"><b>A</b> APEMESP (Associação de Profissionais e Estudantes de Musicoterapia do Estado de São Paulo) antiga AAMESP (Associação de Alunos de Musicoterapia do Estado de São Paulo), foi fundada em maio de 1990 pela Musicoterapeuta Selma Marques de Oliveira, por ocasião do VI Congresso Mundial de Musicoterapia realizado no Rio de Janeiro.</p>
						<br><br><br>
					</div>
					<div class="col-md-10">
						<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/IyxEK6WAamY?ecver=2" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen="" width="320" height="180" frameborder="0"></iframe></div>
						<br><br><br>
						</div>
						<br><br><br>
					<div class="col-md-10">
						<p><b>D</b>esde então, a necessidade de unir forças e interesses comuns na luta pelo estudo da fundamentação teórica da Musicoterapia, pela regulamentação da profissão e pela união entre alunos e profissionais fez com que a Apemesp atuasse cada vez mais não somente no Estado de São Paulo mas, também, em outros estados e cidades auxiliando associações, profissionais e estudantes,informando a população e divulgando a profissão.</p>

						<p><b>A</b> Apemesp tem participado ativamente no meio científico e profissional da Musicoterapia através de seus representantes em cursos, palestras, congressos, simpósios, feiras, etc, procurando sempre divulgar a profissão e fundamentá-la cientificamente. Seus representantes têm participado, também, das reuniões e projetos da União Brasileira das Associações de Musicoterapia (UBAM), do Comitê Latino Americano de Musicoterapia (CLAM) e da Federação Mundial de Musicoterapia (World  Federation of Music Therapy).</p>
						</div>	
				</div>
			</center>
			<br><br><br>
            </div>
                ',
                "id_user" => 2,
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                "id"        => 2,

                "titulo"    => "ESTATUTO SOCIAL DA APEMESP -ASSOCIAÇÂO DE PROFISSIONAIS E ESTUDANTES DE MUSICOTERAPIA DO ESTADODE SÃO PAULO",

                "subtitulo" => 'Leis 10.406(2002 e 11.127, de 28 de Junho de 2005), ARTIGO 1° DENOMINAQ, SEDE,FINALIDADE E DURAÇÃO',

                "body"      => '
                <center>
<p>A Associa&ccedil;&atilde;o de Profissionais e Estudantes de Musicoterapia do <strong>Estado de </strong>S&atilde;o <strong>Paulo, </strong>CNPJ 644.016.934/0001-02. constitu&iacute;da em 26 de Maio de 1990, registrada como associa&ccedil;&atilde;ci civil, sem fins lucrativos, &eacute; regida peia legisla&ccedil;&atilde;o em vigor, neste estatuto designada simplesmente corno APEMESP, fundada em data de 24/08/1990, com sede e foro nesta capital_ na Rua Visconde de Parnaiba, 1461 apto 171 bloco 2 Mcoca, S&atilde;o Paulo. no Estado de S&atilde;o Paulo, &eacute; uma associa&ccedil;&atilde;o de direito privado, constitu&iacute;da por tempo indeterminado, sem fins econ&ocirc;micos, de car&aacute;ter organizacional. filantr&oacute;pico, assistencial; promodonal, recreativo e educacional: sem cunho pol&iacute;tico ou partid&aacute;rio. com a finalidade de atender a todos que a ela se dirigirem, independente de classe social, nacionalidade, sexo: ra&ccedil;a, cor ou cren&ccedil;a religiosa.</p>
</center>

<center><p><strong> ARTIGO 2</strong><strong>&ordm;</strong><strong> - S&Atilde;O PRERROGATIVAS DA ASSOCIA&Ccedil;&Atilde;O:</strong></p></center>

<p>No desenvolvimento de suas atividades, a APEMESP observar&aacute; os principias de legalidade, impessoalidade, moralidade, publicidade, economicidade e da efici&ecirc;ncia, com as seguintes prerrogativas.</p>

<p>I - Contribuir para e melhoria das condi&ccedil;&otilde;es de sa&uacute;de e educa&ccedil;&atilde;o do ser humano atrav&eacute;s do desenvolvimento ata Musicoterapia;</p>

<p>II - Congregar todos os musicoterapeutas do Estado de S&atilde;o Paulo;</p>

<p>III - Promover a forma&ccedil;&atilde;o, capacita&ccedil;&atilde;o e o aprimoramento profissional e cultural dos seus associados:</p>

<p><strong>IV </strong><strong>- </strong>Facilitar o interc&acirc;mbio de conhecimentos e experi&ecirc;ncias dos musicoterapeutas entre si, com profissionais de &aacute;reas afins e com outras institui&ccedil;&otilde;es no Brasil e no exterior;</p>

<p><strong>V </strong><strong>- </strong>Orientar o exerc&iacute;cio da Profiss&atilde;o, garantindo que a musicoterapia seja exercida por profissional qualificado,</p>

<p><strong>VI </strong><strong>- </strong>Exercer a fiscaliza&ccedil;&atilde;o das condi&ccedil;&otilde;es de trabalho do musicoterapeuta,</p>

<p><strong>VII-</strong> Zelar pela manuten&ccedil;&atilde;o do pagamento de um piso salarial m&iacute;nimo ao musicoterapeuta, para o<strong> </strong>bom exerc&iacute;cio das suas atividades em organiza&ccedil;&otilde;es p&uacute;blicas ou privadas;</p>

<p><strong>VIII - </strong>Propor urna margem de valor a ser cobrado para o atendimento musicoterap&ecirc;utico em consult&oacute;rio particular:</p>

<p><strong>IX </strong><strong>- </strong>Orientar e fiscalizar os musicoterapeutas do Estado de S&atilde;o Paulo sobre o cumprimento do C&oacute;digo de &Eacute;tica Nacional de Musicoterapia.</p>

<p>A <strong>APEMESP </strong>tem as seguintes fun&ccedil;&otilde;es:</p>

<p><strong>I -</strong> Criar cursos de forma&ccedil;&atilde;o e capacita&ccedil;&atilde;o em musicoterapia:</p>

<p><strong>II </strong><strong>- </strong>Contribuir para a melhoria das grades curriculares dos cursos de gradua&ccedil;&atilde;o e p&oacute;s-gradua&ccedil;&atilde;o em musicoterapia:</p>

<p><strong>III -</strong> Promover eventos que visem facilitar o desenvolvimento dos associados;</p>

<p><strong>IV</strong><strong> -</strong> Incentivar e <strong>apoiar </strong>a aprova&ccedil;&atilde;o e a melhoria de leis que regem o exerc&iacute;cio profissional dos musicoterapeutas;</p>

<p>- Estabelecer e manter v&iacute;nculos de coopera&ccedil;&atilde;o com outras entidades e organiza&ccedil;&otilde;es <em>&mdash;7&mdash;</em><em> </em>cong&ecirc;neres; ..---&#39;</p>

<p><strong>VI</strong><strong> -</strong> Representar os musicoterapeutas no Estado de S&atilde;o Paulo;</p>

<p><strong>VII - </strong>Delegar e organizar representantes regionais no Estado de S&atilde;o Paulo;</p>

<p><strong>VIII - </strong>Desenvolver e promover outras atividades de interesse dos associados;</p>

<p><strong>IX - </strong>Editar publica&ccedil;&otilde;es que visem divulgar a n-iusicchterapia no campo te&oacute;rico e pr&aacute;tico: como disciplina da &aacute;rea da sa&uacute;de.</p>

<p>&nbsp;</p>

<p><strong>Par&aacute;grafo &Uacute;nico</strong><strong> - </strong>Para cumprir suas finalidades sociais, a APEMESP se organizar&aacute; em tantas unidades quantas se fizerem necess&aacute;rias, em todo o territ&oacute;rio nacional, as quais funcionar&atilde;o mediante delega&ccedil;&atilde;o expressa da matriz, e se reger&atilde;o peias disposi&ccedil;&otilde;es contidas neste estatuto <em>e, </em>ainda, por um regimento interno aprovado pela Assembl&eacute;ia Geral.</p>

<center><p><strong> ARTIGO 3&deg; - DOS COMPROMISSOS </strong><strong>DA ASSOCIA&Ccedil;&Atilde;Q</strong></p></center>

<p>A APEMESP se dedicar&aacute; &agrave;s suas atividades atrav&eacute;s de seus administradores e associados. e adotar&aacute; pr&aacute;ticas de gest&atilde;o administrativa, suficientes a coibir a obten&ccedil;&atilde;o; de forma individual ou coletiva de beneficias ou vantagens, licitas ou il&iacute;citas, de qualquer forma, em decorr&ecirc;ncia da participa&ccedil;&atilde;o nos processos decis&oacute;rios, e suas rendas ser&atilde;o integralmente aplicadas em territ&oacute;rio nacional, na consecu&ccedil;&atilde;o e no desenvolvimento de seus objetivos sociais.</p>

<center><p><strong> ARTIGO 4&ordm; </strong><strong>&ndash; DA ASSEMBL&Eacute;IA GERAL</strong></p></center>

<p>A Assembl&eacute;ia Geral Deliberativa &eacute; o &oacute;rg&atilde;o m&aacute;ximo e soberano da APEIVIESP, e ser&aacute; constitu&iacute;da pelos seus associados em pleno gozo de seus direitos. Reunir-se-&aacute; na segunda quinzena de janeiro, para tornar conhecimento das a&ccedil;&otilde;es da Diretoria Executiva e, extraordinariamente, quando devidamente convocada_ Constituir&aacute; em primeira convoca&ccedil;&atilde;o com a maioria absoluta dos associados e, em segunda convoca&ccedil;&atilde;o, meia hora ap&oacute;s a primeira: com qualquer n&uacute;mero, deliberando pela maioria simples dos votos dos presentes, salvo nos casos previsto neste estatuto, tendo as seguintes prerrogativas:</p>

<p>&nbsp;</p>

<p>1. Fiscalizar os membros da APEMESP, na consecu&ccedil;&atilde;o de seus objetivos:</p>

<p>Eleger e destituir os administradores;</p>

<p>111. Deliberar sobre a previs&atilde;o or&ccedil;ament&aacute;ria e a presta&ccedil;&atilde;o de contas;</p>

<ol>
	<li>
	<p>Estabelecer o valor das anuidades dos associados;</p>
	</li>
	<li>
	<p>Deliberar quanto &agrave; compra e venda de im&oacute;veis da APEMESP;</p>
	</li>
	<li>
	<p>Aprovar o regimento interno; que disciplinar&aacute; os v&aacute;rios setores de atividades da APEMESP; &bull;</p>
	</li>
</ol>

<p>V11. Alterar; no todo ou em parte, o presente estatuto social;</p>

<p>V111. Deliberar quanto &agrave; dissolu&ccedil;&atilde;o da APEMESP:</p>

<p>I. Decidir, em ultima inst&acirc;ncia, sobre todo e qualquer assunto de interesse social, bem como sobre os casos omissos no presente estatuto_</p>

<p><strong>Par&aacute;grafo Primeiro - </strong>As Assembl&eacute;ias Gerais poder&atilde;o ser ordin&aacute;rias ou extraordin&aacute;rias, e ser&atilde;o convocadas, pelo Presidente ou por 2/3 dos associados, mediante edital afixado no site da APEMESP, e por comunicado enviado a todos os associados e integrantes da diretoria, com anteced&ecirc;ncia m&iacute;nima de 30 (trinta) dias de sua realiza&ccedil;&atilde;o, onde constar&aacute;: local, dia, m&ecirc;s, ano, hora da primeira e segunda chamada, ordem do dia, e o nome de quem a convocou;</p>

<p><strong>Par&aacute;grafo Segundo</strong><strong> -</strong> Quando a Assembl&eacute;ia Geral for convocada pelos associados, dever&aacute; o Presidente convoc&aacute;-la no prazo de 3 (tr&ecirc;s) dias, contados da data entrega do requerimento, que dever&aacute; ser encaminhado ao presidente atrav&eacute;s de notifica&ccedil;&atilde;o extrajudicial. Se o Presidente n&atilde;o convocar a assembl&eacute;ia, aqueles que deliberam por sua realiza&ccedil;&atilde;o, far&atilde;o a convoca&ccedil;&atilde;o;</p>

<p><strong>Par&aacute;grafo Terceiro - </strong>Ser&atilde;o tornadas por escrut&iacute;nio secreto as delibera&ccedil;&otilde;es que envolvam elei&ccedil;&otilde;es da diretoria e conselho fiscal e o julgamento dos atos da diretoria quanto &agrave; aplica&ccedil;&atilde;o de penalidades.</p>

<p><strong>Par&aacute;grafo Quarto &mdash; </strong>As Assembl&eacute;ias ser&atilde;o presididas pelo Presidente, ou pelos 1rl ou 2&deg; Vice-Presidentes da APEMESP, conforme o estabelecido neste estatuto.</p>

<p><strong>Par&aacute;grafo Quinto &mdash; </strong>As Assembl&eacute;ias Gerais Ordin&aacute;rias deliberar&atilde;o os assuntos discutidos mediante o voto da maioria simples dos associados presentes, e as Extraordin&aacute;rias, com a aprova&ccedil;&atilde;o de 2/3 (dois ter&ccedil;os) dos associados presentes.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 5&deg;</strong><strong> -</strong><strong> DOS ASSOCIADOS</strong></p></center>

<p>S&atilde;o considerados associados aqueles que tendo solicitado por escrito sua inscri&ccedil;&atilde;o, foram aceitos peia diretoria de acordo com o estabelecido nos presentes estatutos.</p>

<p>Os associados ser&atilde;o divididos nas seguintes categorias:</p>

<p>I &mdash; Associados colaboradores:</p>

<p>II - Associados efetivos:</p>

<p>III - Associados honor&aacute;rios.</p>

<p><strong>Par&aacute;grafo Primeiro - </strong>S&atilde;o associados colaboradores os profissionais graduados nos diversos campos do conhecimento, institui&ccedil;&otilde;es e organiza&ccedil;&otilde;es que se interessem pela musicoterapia; desde que se inscrevam por escrito e que suas inscri&ccedil;&otilde;es sejam aceitas pela Diretoria, de acordo com o estabelecido no presente Estatuto_</p>

<p><strong>Par&aacute;grafo Segundo - </strong>S&atilde;o associados efetivos:</p>

<p>I - os que tiverem sido aceitos pela Diretoria at&eacute; a presente data de 27 de Julho de 2008 e aqueles que ainda poder&atilde;o vir a participar da APENIESP de acordo com o estabelecido no presente estatuto.</p>

<p>II - os portadores de t&iacute;tulo de gradua&ccedil;&atilde;o e/ou p&oacute;s-gradua&ccedil;&atilde;o em musicoterapia; <strong>111 - </strong>os graduandos e p&ocirc;s-graduandos em musicoterapia.</p>

<p><strong>Par&aacute;grafo Terceiro - </strong>S&atilde;o associados honor&aacute;rios os que, por alto grau de atua&ccedil;&atilde;o junto a &oacute;rg&atilde;os p&uacute;blicos, privados ou a esta associa&ccedil;&atilde;o justifiquem o t&iacute;tulo, a ju&iacute;zo da Assembl&eacute;ia Geral, mediante proposta da Diretor&iacute;a.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 6&ordm; - DA ADMISS&Atilde;O E EXCLUS&Atilde;O </strong><strong> DOS ASSOCIADOS</strong></p></center>

<p>&nbsp;</p>

<p>A admiss&atilde;o dos associados, excetuada a dos associados honor&aacute;rios, &eacute; feita mediante a an&aacute;lise e aprova&ccedil;&atilde;o dos pedidos de inscri&ccedil;&atilde;o pela Diretoria ou por Comiss&atilde;o especificamente designada</p>

<p>Ser&atilde;o exclu&iacute;dos, pela Diretoria, do quadro de associados da APEMESP, os que:</p>

<p>I - tiverem agido contra as finalidades da entidade:</p>

<p>II - tiverem procedido contra as normas do C&oacute;digo de &Eacute;tica da sua profiss&atilde;o:</p>

<p>III - tiverem deixado de pagar as contribui&ccedil;&otilde;es fixadas pela Diretoria, por dois anos consecutivos;</p>

<p>IV - tiverem fornecido informa&ccedil;&otilde;es falsas para efeito de admiss&atilde;o e classifica&ccedil;&atilde;o no quadro de associados;</p>

<p>V tiverem praticado atos p&uacute;blicos que o desabonem;</p>

<p>VI - tiverem participado de extravio de bens e valores da entidade.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 7&deg; - DOS DIREITOS E DEVERES DOS ASSOCIADOS</strong></p>
</center>

<p>S&atilde;o direitos do associado;</p>

<p>I - participar das Assembl&eacute;ias Gerais;</p>

<p>II - votar e ser votado para qualquer cargo da Diretoria Executiva ou do Conselho Fiscai, na forma prevista neste estatuto:</p>

<p>III - recorrer&aacute; Assembl&eacute;ia Geral contra qualquer ato irregular da Diretoria ou do Conselho Fiscal da forma prevista neste presente estatuto;</p>

<p>III - participar das atividades promovidas pela APEIVIESP;</p>

<p>IV - receber as publica&ccedil;&otilde;es e comunica&ccedil;&otilde;es da APEMESP;</p>

<p>V - sugerir medidas e atividades de interesse dos associados;</p>

<p>VI - usufruir os benef&iacute;cios oferecidos pela APEMESP, na forma prevista neste presente estatuto.</p>

<p>&nbsp;</p>

<p><strong>Par&aacute;</strong><strong>grafo </strong><strong>&Uacute;nico &mdash; </strong>O item 11 s&oacute; se aplica aos associados efetivos.</p>

<p>S&atilde;o deveres do associado:</p>

<p><strong>I </strong>- cumprir e fazer cumprir o presente estatuto;</p>

<p><strong>II</strong> - respeitar e cumprir as decis&otilde;es da Assembl&eacute;ia Geral;</p>

<p><strong>III</strong> - zelar pelo bom nome da Associa&ccedil;&atilde;o;</p>

<p><strong>IV</strong> - defender o patrim&ocirc;nio e os<strong> </strong>interesses da Associa&ccedil;&atilde;o;</p>

<p><strong>V</strong> - comparecer e participar das reuni&otilde;es quando convocado:</p>

<p><strong>VI </strong>- votar por ocasi&atilde;o das elei&ccedil;&otilde;es</p>

<p><strong>VIl</strong> - efetuar o pagamento das contribui&ccedil;&otilde;es estabelecidas pontualmente;</p>

<p><strong>VIII - </strong>interessar-se pelo desenvolvimento pessoal e profissional:</p>

<p><strong>IX - </strong>observar o C&oacute;digo de &Eacute;tica Profissional;</p>

<p><strong>X </strong>- apoiar as atividades relacionadas ao desempenho das fun&ccedil;&otilde;es da APEIVIESP.</p>

<p><strong>Par&aacute;grafo Primeiro &mdash; </strong>O item V1 s&oacute; se aplica aos associados efetivos. <strong>Par&aacute;grafo Segundo &mdash; </strong>O item VII n&atilde;o se aplica aos associados honor&aacute;rios_</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 8</strong><strong>&ordm;</strong><strong> &mdash; DA ADMISS&Atilde;O</strong><strong> DO ASSOCIADO</strong></p>
</center>

<p>Poder&atilde;o filiar-se somente pessoas maiores de 18 (dezoito) anos, ou maiores de 16 (dezesseis) e menores de 18 (dezoito) legalmente autorizadas, independente de classe social, nacionalidade, sexo, ra&ccedil;a, cor ou cren&ccedil;a religiosa e, para seu ingresso, o interessado dever&aacute; preencher ficha de inscri&ccedil;&atilde;o na secretaria da entidade, que a submeter&aacute; &agrave; Diretoria Executiva e, uma vez aprovada, ter&aacute; seu nome, imediatamente, lan&ccedil;ado no livro de associados, com indica&ccedil;&atilde;o de seu n&uacute;mero de matr&iacute;cula e categoria &agrave; qual pertence, devendo o interessada</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
<center><p><strong> ARTIGO 9&deg; - DA </strong><strong>DEMISS&Atilde;O DO ASSOCIADO</strong></p>
</center>

<p>&Eacute; direito do associado demitir-se do quadro social: quando julgar necess&aacute;rio. protocolando seu pedido junto &agrave; Secretaria da APENIESP, desde que n&atilde;o esteja em d&eacute;bito com suas obriga&ccedil;&otilde;es associativas.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 10&deg; - DA EXCLUS&Atilde;O </strong><strong>DO ASSOCIADO</strong></p>
</center>

<p>A perda da qualidade de associado ser&aacute; determinada pela Diretoria Executiva: sendo admissivel somente havendo justa causa, assim reconhecida em procedimento disciplinar, em que fique assegurado o direito da ampla defesa, quando ficar comprovada a ocorr&ecirc;ncia de:</p>

<ol>
	<li>
	<p>Viola&ccedil;&atilde;o do estatuto social;</p>
	</li>
	<li>
	<p>Difama&ccedil;&atilde;o da APEMESP, de seus membros ou de seus associados;</p>
	</li>
	<li>
	<p>Atividades contr&aacute;rias &agrave;s decis&otilde;es das Assembl&eacute;ias Gerais;</p>
	</li>
	<li>
	<p>Desvio dos bons costumes;</p>
	</li>
	<li>
	<p>Conduta duvidosa, mediante a pr&aacute;tica de atos il&iacute;citos ou imorais;</p>
	</li>
	<li>
	<p>Falta de pagamento, por parte dos &#39;associados contribuintes&#39;&#39;, de tr&ecirc;s parcelas consecutivas das contribui&ccedil;&otilde;es associativas.</p>
	</li>
</ol>

<p><strong>Par&aacute;grafo Primeiro - </strong>Definida a justa causa, o associado ser&aacute; devidamente notificado dos fatos a ele imputados, atrav&eacute;s de notifica&ccedil;&atilde;o extrajudicial, para que apresente sua defesa pr&eacute;via no prazo de 20 (vinte) dias a contar do recebimento da comunica&ccedil;&atilde;o;</p>

<p><strong>Par&aacute;grafo Segundo - </strong>Ap&oacute;s o decurso do prazo descrito no par&aacute;grafo anterior, independentemente da apresenta&ccedil;&atilde;o de defesa, a representa&ccedil;&atilde;o ser&aacute; decidida em reuni&atilde;o extraordin&aacute;ria da Diretoria Executiva, por maioria simples de votos dos .diretores presentes;</p>

<p><strong>Par&aacute;grafo Terceiro - </strong>Aplicada a pena de exclus&atilde;o; caber&aacute; recurso, por parte do associado exclu&iacute;do, &agrave; Assembl&eacute;ia Geral, o qual dever&aacute;, no prazo de 30 (trinta) dias contados da decis&atilde;o de sua exclus&atilde;o, atrav&eacute;s de notifica&ccedil;&atilde;o extrajudicial, manifestar a inten&ccedil;&atilde;o de ver a decis&atilde;o da Diretoria Executiva ser objeto de delibera&ccedil;&atilde;o, em &uacute;ltima inst&acirc;ncia, por parte da Assembl&eacute;ia Geral;</p>

<p><strong>Par&aacute;grafo Quarto - </strong>Uma vez exclu&iacute;do; qualquer que seja o motivo, n&atilde;o ter&aacute; o associado o direito de pleitear indeniza&ccedil;&atilde;o ou compensa&ccedil;&atilde;o de qualquer natureza, seja a que t&iacute;tulo for;</p>

<p><strong>Par&aacute;grafo Quinto - </strong>O associado exclu&iacute;do por falta de pagamento, poder&aacute; ser readmitido, mediante o pagamento de seu d&eacute;bito junto &agrave; tesouraria da Associa&ccedil;&atilde;o.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 11&ordm; &mdash; DA APLICA &Atilde;O DAS PENAS</strong></p>
</center>

<p>As penas ser&atilde;o aplicadas pela Diretoria Executiva e poder&atilde;o constituir-se em:</p>

<p><strong>I. </strong>Advert&ecirc;ncia por escrito:</p>

<p>Suspens&atilde;o de 30 (trinta) dias at&eacute; 01 (um) ano.</p>

<p>Elimina&ccedil;&atilde;o do quadro social.</p>

<center><p><strong> ARTIGO 12&ordm; - </strong><strong>DOS ORG&Atilde;OS </strong><strong>ADMINISTRATIVOS DA INSTITUI&Ccedil;&Atilde;O</strong></p>
</center>

<p>S&atilde;o &oacute;rg&atilde;os da Associa&ccedil;&atilde;o<strong>:</strong></p>

<p><strong>I. </strong>Diretoria Executiva<br />
<br />
II. Conselho Fiscal</p>

<center><p><strong> ARTIGO 13&deg; - DA DIRETORIA EXECUTIVA</strong></p>
</center>

<p>A APEMESP &eacute; administrada por uma Diretoria Executiva eleita em Assembl&eacute;ia Geral. A Diretoria reunir-se-&aacute;: ordinariamente, uma vez por m&ecirc;s e; extraordinariamente, quando convocada pelo presidente ou pela maioria de seus membros.</p>

<p>A Diretoria Executiva da Associa&ccedil;&atilde;o ser&aacute; constitu&iacute;da por 07 (sete) membros; os quais ocupar&atilde;o os cargos de:</p>

<p>I- Presidente, graduado em musicoterapia;</p>

<p>Il - Primeiro Vice-Presidente: graduado ou p&aacute;s-graduado em musicoterapia;</p>

<p><strong>III </strong><strong>- </strong>Segundo Vice-Presidente, graduando em musicoterapia;</p>

<p>IV - Primeiro Tesoureiro. em musicoterapia;</p>

<p>V - Segundo Tesoureiro, graduado em rnusicoterapia;</p>

<p>VI - Primeiro Secret&aacute;rio; graduado em musicoterapia;</p>

<p><strong>VII </strong><strong>- </strong>Segundo Secret&aacute;rio, graduado ou p&oacute;s-graduado em musicoterapia.</p>

<p>O mandato da Diretoria, eleita pelos associados da APEMESP, ser&aacute; de 2 (dois) anos, podendo ser renovada por mais 2 (dois) anos_ Ao t&eacute;rmino da renova&ccedil;&atilde;o, a Diretoria poder&aacute; ser mantida no caso da inexist&ecirc;ncia de uma nova chapa.</p>

<p>Os cargos de Diretoria n&atilde;o ser&atilde;o remunerados,</p>

<p>As vagas para os cargos de Diretoria poder&atilde;o ser preenchidas ou permanecerem abertas em metade do total das vagas at&eacute; a pr&oacute;xima Assembl&eacute;ia Geral, a crit&eacute;rio da pr&oacute;pria Diretoria.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 14&ordm; </strong><strong>- </strong><strong>DA </strong><strong>COMPET&Ecirc;NCIA &Eacute;TICA</strong><strong> DA </strong><strong>DIRETORIA</strong><strong>.</strong></p>
</center>

<p>A Diretoria tem as seguintes fun&ccedil;&otilde;es:</p>

<p><strong>I-</strong> administrar e gerir os bens e interesses da APEMESP;</p>

<p>II- executar as atividades necess&aacute;rias &agrave; obten&ccedil;&atilde;o dos objetivos da APEMESP;</p>

<p>III - aprovar os pedidos de admiss&atilde;o de novos associados, segundo os crit&eacute;rios estabelecidos neste estatuto;</p>

<p>IV - propor &aacute; Assembl&eacute;ia Geral, a admiss&atilde;o de s&oacute;cios honor&aacute;rios;</p>

<p>V - propor &agrave; Assembl&eacute;ia Geral o valor das contribui&ccedil;&otilde;es a serem pagas pelos associados;</p>

<p>VI - propor, escolher e organizar os representantes regionais da associa&ccedil;&atilde;o pelo Estado de S&atilde;o Paulo:</p>

<p>VII - propor, escolher e organizar as comiss&otilde;es da associa&ccedil;&atilde;o;</p>

<p>VIII - propor, escolher e organizar a assessoria on-line da associa&ccedil;&atilde;o,</p>

<p>X - propor &agrave; Assembl&eacute;ia Geral, as emendas do estatuto:</p>

<p>X - cumprir e fazer cumprir este estatuto;</p>

<p>XI - fixar, de acordo com o estatuto: as diretrizes b&aacute;sicas da Administra&ccedil;&atilde;o da APEMESP;</p>

<p>XII - reunir-se sempre que se considerar necess&aacute;ria</p>

<p>A Diretoria reunir-se-&aacute; ordinariamente uma vez por m&ecirc;s e, extraordinariamente, por ocasi&atilde;o dos Eventos e sempre que e Presidente julgar necess&aacute;rio.</p>

<p><strong>Compete ao Presidente:</strong></p>

<p><strong>I - </strong>representar a APEMESP ativa e passivamente, perante os &oacute;rg&atilde;os p&uacute;blicos, judiciais e extrajudiciais, inclusive em ju&iacute;zo ou fora dele, podendo delegar poderes e constituir procuradores e advogados para o fim que julgar necess&aacute;rio;</p>

<p>II - convocar e presidir as reuni&otilde;es da Diretoria Executiva;</p>

<p>III - convocar e presidir as Assembl&eacute;ias Ordin&aacute;rias e Extraordin&aacute;rias;</p>

<p>IV - gerir e fiscalizar os servi&ccedil;os e atividades da APEMESP;</p>

<p>V - fixar normas de organiza&ccedil;&atilde;o dos servi&ccedil;os, elaborar regulamentos, regimentos internos, instru&ccedil;&otilde;es e outros atos necess&aacute;rios;</p>

<p>VI - cumprir e fazer cumprir as resolu&ccedil;&otilde;es das Assembl&eacute;ias e da Diretoria;</p>

<p>VII - juntamente com o Primeiro ou Segundo Tesoureiro, abrir e manter contas banc&aacute;rias; assinar cheques e documentos banc&aacute;rios e cont&aacute;beis;</p>

<p>VI - assinar com o Primeiro ou Segundo Tesoureiros, contratos, cheques, escrituras e outros documentos que impliquem em obriga&ccedil;&otilde;es sociais e financeiras;</p>

<p>VII - constituir procuradores em nome da APEMESP para fins espec&iacute;ficos e com prazos determinados: num m&aacute;ximo de 1 (um) ano;</p>

<p>VIII - contratar funcion&aacute;rios ou auxiliares especializados, fixando seus vencimentos, podendo licenci&aacute;-los, suspend&ecirc;-los ou demiti-los;</p>

<p>IX - criar departamentos patrimoniais, culturais, sociais, de sa&uacute;de e outros que julgar necess&aacute;rios ao cumprimento das finalidades sociais, nomeando e destituindo os respectivos respons&aacute;veis;</p>

<p>X - selecionar e orientar os representantes regionais;</p>

<p>XI - selecionar e orientar os coordenadores das comiss&otilde;es:</p>

<p>XII - selecionar e orientar os assessores on-line;</p>

<p>XIII - autorizar o estabelecimento de parcerias;</p>

<p>XIV - organizar relat&oacute;rio contendo o balan&ccedil;o do exerc&iacute;cio financeiro e os principais eventos do ano anterior, apresentando-o &aacute; Assembl&eacute;ia Geral Ordin&aacute;ria;</p>

<p>XV - organizar o relat&oacute;rio anual das atividades sociais, submetendo-o juntamente com o balan&ccedil;o anual, &aacute; aprova&ccedil;&atilde;o da Assembl&eacute;ia Geral Ordin&aacute;ria:</p>

<p>XVI - ter sempre o voto de desempate na vota&ccedil;&atilde;o de qualquer resolu&ccedil;&atilde;o.</p>

<p>&nbsp;</p>

<p><strong>Par&aacute;grafo &Uacute;nico</strong><strong> &mdash; </strong>Compete ao Vice-Presidente, substituir legalmente o Presidente, em suas faltas e impedimentos, assumindo o cargo em caso de vac&acirc;ncia.</p>

<p><strong>Compete</strong><strong> ao </strong><strong>Primeiro Vice-Presidente:</strong></p>

<p><strong>1 - </strong>substituir o Presidente em suas aus&ecirc;ncias elou impedimentos;</p>

<p>II - colaborar com o Presidente nas suas atribui&ccedil;&otilde;es;</p>

<p>III - servir de intermedi&aacute;rio entre o Presidente e os relatores de Comiss&otilde;es.</p>

<p><strong>Compete ao Se ando Vice-Presidente:</strong></p>

<p><strong>I- </strong>substituir o Presidente em suas aus&ecirc;ncias efou impedimentos, mediante a impossibilidade da atua&ccedil;&atilde;o do Primeiro Vice-Presidente;</p>

<p>II - colaborar com o presidente e o Vice-Presidente na administra&ccedil;&atilde;o da APEIVIESP; I11- servir de intermedi&aacute;rio entre o Presidente e a classe acad&ecirc;mica estudantil;</p>

<p><strong>Compete</strong><strong> ao Primeiro Tesoureiro:</strong></p>

<p><strong>I- </strong>manter, em estabelecimentos banc&aacute;rios, juntamente com <strong>o </strong>Presidente, os valores da APEMESP, podendo aplic&aacute;-los. ouvida a Diretoria Executiva;</p>

<p>II <strong>- </strong>assinar, em conjunto com o Presidente, os cheques e demais documentos banc&aacute;rios e cont&aacute;beis;</p>

<p>III - realizar semestralmente a previs&atilde;o or&ccedil;ament&aacute;ria;</p>

<p><strong>VI - </strong>arrecadar a receita e efetuar os pagamentos dentro das normas e regulamentos estabelecidos;</p>

<p><strong>VI - </strong>ter sob a sua guarda e em ordem, a escritura&ccedil;&atilde;o da tesouraria;</p>

<p>VII - preparar, periodicamente, previs&atilde;o de despesas e receitas de forma a facilitar as decis&otilde;es administrativas;</p>

<p><strong>VIII - </strong>apresentar &agrave; Diretoria o balancete mensal;</p>

<p><strong>IX - </strong>apresentar ao Conselho Fiscal, os balancetes semestrais e o balan&ccedil;o anual;</p>

<p><strong>X - </strong>preparar os documentos e enviar a contabilidade;</p>

<p>X1&mdash; supervisionar e fiscalizar o trabalho da tesouraria e da contabilidade da APEMESP;</p>

<p>XII - estabelecer parcerias entre APEMESP e institui&ccedil;&otilde;es de sa&uacute;de, educa&ccedil;&atilde;o e afins;</p>

<p>XIII - estabelecer e manter contato com contador, fornecedores e patrocinadores.</p>

<p><strong>XIV - </strong>elaborar, anualmente, a rela&ccedil;&atilde;o dos bens da APEMESP, apresentando-a, quando solicitado, &agrave; Assembl&eacute;ia Geral.</p>

<p>&nbsp;</p>

<p>&mdash; Compete ao 2&ordm; Tesoureiro, substituir o Tesoureiro, em suas faltas e impedimentos, assumindo o cargo em caso de vac&acirc;ncia.</p>

<p><strong>Segundo Tesoureiro:</strong></p>

<p><strong>- </strong>substituir o Primeiro Tesoureiro em suas aus&ecirc;ncias ou impedimentos; <strong>II - </strong>colaborar com o primeiro tesoureiro nas suas atribui&ccedil;&otilde;es.</p>

<p><strong>Compete</strong><strong> ao Primeiro Secret&aacute;rio:</strong></p>

<p><strong>I- </strong>auxiliar o Presidente em tudo o que for necess&aacute;rio;</p>

<p><strong>II - </strong>convocar por determina&ccedil;&atilde;o do Presidente, as reuni&otilde;es das Assembl&eacute;ias Gerais, da Diretoria, dos Representantes Regionais, dos Assessores On-Line e das Comiss&otilde;es Administrativas;</p>

<p>III - secretariar as Assembl&eacute;ias Gerais e as reuni&otilde;es de Diretoria;</p>

<p>IV - redigir e manter: em dia transcri&ccedil;&atilde;o das atas das Assembl&eacute;ias Gerais e das reuni&otilde;es da Diretoria Executiva:</p>

<p>VI - organizar e manter atualizada toda a documenta&ccedil;&atilde;o da APEMESP;</p>

<p>V &mdash; redigir e assinar, sempre que solicitado, as correspond&ecirc;ncias da APEMESP;</p>

<p>VI - organizar e manter atualizada e sob sua guarda, toda a documenta&ccedil;&atilde;o referente aos associados;</p>

<p>VII - manter sob sua guarda, as atas da Diretoria, das Assembl&eacute;ias Gerais, dos representantes regionais, dos assessores On-line e das Comiss&otilde;es,</p>

<p>VIII - dirigir e supervisionar todo o trabalho da Secretaria;</p>

<p>&mdash; Compete ao 2&deg; Secret&aacute;rio, substituir o 1&deg; Secret&aacute;rio, em suas faltas e impedimentos, assumindo o cargo em caso de vac&acirc;ncia</p>

<p><strong>Compete ao Segundo Secret&aacute;rio:</strong></p>

<p><strong>I- </strong>substituir o Primeiro Secret&aacute;rio em suas aus&ecirc;ncias efou impedimentos;</p>

<p><strong>II - </strong>colaborar com o primeiro secret&aacute;rio nas suas atribui&ccedil;&otilde;es.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO</strong><strong> 15&deg; - COMPETE</strong><strong> A DIRETORIA </strong><strong>EXECUTIVA</strong><strong> </strong></p>
</center>

<ol>
	<li>
	<p>Dirigir a APEIE P, de acordo com o presente estatuto, e administrar o patrim&ocirc;nio social_</p>
	</li>
	<li>
	<p>Cumprir e fazer cumprir o presente estatuto e as decis&otilde;es da Assembl&eacute;ia Geral</p>
	</li>
	<li>
	<p>Promover e incentivar a cria&ccedil;&atilde;o de comiss&otilde;es, com a fun&ccedil;&atilde;o de desenvolver cursos profissionalizantes e atividades culturais;</p>
	</li>
</ol>

<p>I. Representar e defender os interesses de seus associados;</p>

<ol>
	<li>
	<p>Elaborar o or&ccedil;amento anual;</p>
	</li>
	<li>
	<p>Apresentar a Assembl&eacute;ia Geral, na reuni&atilde;o anual, o relat&oacute;rio de sua gest&atilde;o e prestar .contas referentes ao exerc&iacute;cio anterior;</p>
	</li>
	<li>
	<p>Admitir pedido de inscri&ccedil;&atilde;o de associados;</p>
	</li>
	<li>
	<p>Acatar pedido de demiss&atilde;o volunt&aacute;ria de associados.</p>
	</li>
</ol>

<p><strong>Par&aacute;grafo &Uacute;nico</strong><strong> - </strong>As decis&otilde;es da diretora dever&atilde;o ser tomadas por maioria de votos, devendo estar presentes,. na reuni&atilde;o, a maioria absoluta de seus membros. cabendo ao Presidente, em caso de empate: o voto de qualidade.</p>

<center><p><strong> ARTIGO 16&ordm; - DO </strong><strong>CONSELHO FISCAL</strong></p>
</center>

<p>O Conselho Fiscal, que ser&aacute; composto por 2 (dois) membros, e tem por objetivo, indeleg&aacute;vel, fiscalizar e dar parecer sobre todos os atos da Diretoria Executiva da APEMESP, com as seguintes atribui&ccedil;&otilde;es:</p>

<ol>
	<li>
	<p>Examinar os livros de escritura&ccedil;&atilde;o da APEMESP;</p>
	</li>
	<li>
	<p>Opinar e dar pareceres sobre balan&ccedil;os e relat&oacute;rios financeiro e cont&aacute;bil, submetendo-os a Assembl&eacute;ia Geral Ordin&aacute;ria ou Extraordin&aacute;ria;</p>
	</li>
	<li>
	<p>Requisitar ao 1&deg; Tesoureiro, a qualquer tempo, a documenta&ccedil;&atilde;o comprobat&oacute;ria das opera&ccedil;&otilde;es econ&ocirc;mico-financeiras realizadas pela APENIESP;</p>
	</li>
	<li>
	<p>Acompanhar o trabalho de eventuais auditores externos independentes;</p>
	</li>
	<li>
	<p>Convocar Extraordinariamente a Assembl&eacute;ia Geral.</p>
	</li>
</ol>

<p><strong>Par&aacute;grafo &Uacute;nico - </strong>O Conselho Fiscal n&atilde;o poder&aacute; pertencer a Diretoria, reunir-se-&aacute; ordinariamente, 2 (duas) vezes por ano, sendo a primeira em qualquer dia do primeiro quadrimestre do ano civil, que coincide com o exerc&iacute;cio social. A segunda reuni&atilde;o anual obrigat&oacute;ria ser&aacute; realizada dentro dos 2 (dois) &uacute;ltimos meses de cada ano. E extraordinariamente sempre que o Presidente convocar.</p>

<p><strong><center></strong><strong> - DO MANDATO</strong></p>
</center>

<p>As eleic&otilde;es para a Diretoria Executiva e Conselho Fiscal realizar-se-&atilde;o, conjuntamente,</p>

<p>de 02 (dois) em 02 (dois) anos, por chapa completa de candidatos apresentada &agrave; Assembl&eacute;ia Geral, podendo seus membros ser reeleitos por mais 2 (dois) anos.</p>

<p>&nbsp;</p>

<p><strong><center> ARTIGO</strong><strong> 18&deg; - DA PERDA DO MANDATO</strong></p>
</center>

<p>A perda da qualidade de membro da Diretoria Executiva ou do Conselho Fiscal ser&aacute; determinada peia Assembl&eacute;ia Geral, sendo admissivel somente havendo justa causa; assim reconhecida em procedimento ciis-ciplinar, quando ficar comprovado:</p>

<ol>
	<li>
	<p>Malversa&ccedil;&atilde;o ou dilapida&ccedil;&atilde;o do patrim&ocirc;nio social;</p>
	</li>
	<li>
	<p>Grave viola&ccedil;&atilde;o deste estatuto;</p>
	</li>
</ol>

<p>111. Abandono do cargo; assim considerada a aus&ecirc;ncia n&atilde;o justificada em 03 (tr&ecirc;s) reuni&otilde;es ordin&aacute;rias consecutivas, sem expressa comunica&ccedil;&atilde;o dos motivos da aus&ecirc;ncia, &agrave; secretaria da Associa&ccedil;&atilde;o;</p>

<p>1V. Aceita&ccedil;&atilde;o de cargo ou fun&ccedil;&atilde;o incompat&iacute;vel com o exerc&iacute;cio do cargo que exerce na APETVESP.,</p>

<p>V. Conduta duvidosa</p>

<p><strong>Par&aacute;grafo Primeiro </strong><strong>&mdash; </strong>Definida a justa causa, o diretor ou conselheiro ser&aacute; comunicado, atrav&eacute;s de notifica&ccedil;&atilde;o extrajudicial, dos fatos a ele imputados, para que apresente sua defesa pr&eacute;via &agrave; Diretoria Executiva, no prazo de 20 (vinte) dias, contados do recebimento da comunica&ccedil;&atilde;o:</p>

<p><strong>Par&aacute;grafo Segundo </strong><strong>&mdash; </strong>Ap&oacute;s o decurso do prazo descrito no par&aacute;grafo anterior; independentemente da apresenta&ccedil;&atilde;o de defesa, a representa&ccedil;&atilde;o ser&aacute; submetida &aacute; Assembl&eacute;ia Geral Extraordin&aacute;ria, devidamente convocada para esse fim, composta de associados contribuintes em dia com suas obriga&ccedil;&otilde;es sociais, n&atilde;o podendo ela deliberar sem voto concorde de 2/3 (dois ter&ccedil;os) dos presentes, sendo em primeira chamada, com a maioria absoluta dos associados e em segunda chamada, uma hora ap&oacute;s a primeira, com qualquer n&uacute;mero de associados, onde ser&aacute; garantido o amplo direito de defesa.</p>

<p>&nbsp;</p>

<p><strong><center> ARTIGO </strong><strong>19&deg; </strong><strong>- </strong><strong>DA REN&Uacute;NCIA</strong></p>
</center>

<p>Em caso ren&uacute;ncia de qualquer membro da Diretoria Executiva ou do Conselho Fiscal, o cargo ser&aacute; preenchido pelos suplentes_</p>

<p><strong>Par&aacute;grafo Primeiro </strong><strong>&mdash; </strong>O pedido de ren&uacute;ncia se dar&aacute; por escrito, devendo ser protocolado na secretaria da APEMESP, a qual, no prazo m&aacute;ximo de 60 (sessenta) dias, contado da data do protocolo; o submeter&aacute; &aacute; delibera&ccedil;&atilde;o da Assembl&eacute;ia Geral;</p>

<p><strong>Par&aacute;grafo Segundo </strong><strong>- </strong>Ocorrendo ren&uacute;ncia coletiva da Diretoria e Conselho Fiscal,. o Presidente renunciante, qualquer membro da Diretoria Executiva ou, em &uacute;ltimo caso, qualquer dos associados; poder&aacute; convocar a Assembl&eacute;ia Geral Extraordin&aacute;ria, que eleger&aacute; uma comiss&atilde;o provis&oacute;ria composta por 05 (cinco) membros; que administrar&aacute; a entidade e far&aacute; realizar novas elei&ccedil;&otilde;es, no prazo m&aacute;ximo de 60 (sessenta) dias; contados da data de realiza&ccedil;&atilde;o da referida assembl&eacute;ia. Os diretores e conselheiros eleitos, nestas condi&ccedil;&otilde;es, complementar&atilde;o o mandato dos renunciantes.</p>

<p><strong><center> ARTIGO </strong><strong>20&ordm; - </strong><strong>DAS COMPET&Ecirc;NCIAS</strong><strong> E </strong><strong>FUN&Ccedil;&Otilde;ES DOS</strong><strong> REPRESENTANTES</strong><strong> REGIONAIS</strong></p>
</center>

<p>&nbsp;</p>

<p>Os Representantes Regionais ser&atilde;o constitu&iacute;dos por s&oacute;cios efetivos e em dia com as obriga&ccedil;&otilde;es e deveres estabelecidos pelo presente estatuto, escolhidos e orientados peo Presidente da Diretoria</p>

<p>Compete aos Representantes Regionais:</p>

<p>I - representar a APEMESP na regi&atilde;o do interior de S&atilde;o Paulo, onde mora;</p>

<p>II - apoiar e orientar o associado dessa regi&atilde;o;</p>

<p>III- intermediar a comunica&ccedil;&atilde;o entre os associados destas regi&otilde;es com a APEMESP;</p>

<p><strong>IV- </strong>manter a APEMESP informada sobre o que se refere &agrave; Musicoterapia nestas regi&otilde;es.</p>

<p>Os Representantes Regionais possuem as seguintes fun&ccedil;&otilde;es:</p>

<p>I - responder pela categoria dos Musicoterapeutas na regi&atilde;o;</p>

<p><strong>II </strong><strong>- </strong>fiscalizar a utiliza&ccedil;&atilde;o da Musicoterapia por profissional n&atilde;o qualificado, esclarecendo-o dos riscos da utiliza&ccedil;&atilde;o indevida da Musicoterapia, notificando-o atrav&eacute;s de oficio da APEMESP sobre a atitude ilegal e informando-o de que ser&atilde;o tomadas medidas legais por uso de falsa identidade profissional</p>

<p>Ill - participar de eventos, congressos, projetos de a&ccedil;&atilde;o social e afins, como representante da classe de musicoterapeutas pela APEMESP:</p>

<p><strong>IV </strong><strong>- </strong>efetuar parcerias com universidades, hospitais, escolas, clinicas e afins, em nome da APEMESP, visando a amplia&ccedil;&atilde;o do campo de atua&ccedil;&atilde;o e mercado de trabalho do profissional na regi&atilde;o;</p>

<p>V - esclarecer d&uacute;vidas e orientar os associados da regi&atilde;o:</p>

<p><strong>VI</strong><strong> -</strong> esclarecer sobre a import&acirc;ncia de ser um associado da APEMESP;</p>

<p><strong>VII </strong><strong>- </strong>manter a APEMESP informada sobre o que acontece em sua cidade e regi&atilde;o, no que se refere ao mercado de trabalho, &oacute;rg&atilde;os elou institui&ccedil;&otilde;es canveniados, profissionais atuantes e estudantes de Musicoterapia:</p>

<p>VIII - enviar relat&oacute;rio semestral com informa&ccedil;&otilde;es colhidas em sua cidade e regi&atilde;o.</p>

<p>&nbsp;</p>

<p><strong>ARTIGO 21&deg; - DAS ASSESSORIAS ONLINE</strong></p>

<p>As assessorias on-line ter&atilde;o corno finalidade realizar orienta&ccedil;&otilde;es b&aacute;sicas e esclarecimento de d&uacute;vidas aos associados, via internei, que estejam em dia com seus deveres e obriga&ccedil;&otilde;es junto a APEMESP</p>

<p>A APEMESP contar&aacute; cem as seguintes assessorias on-line: 1 - Assessoria Jur&iacute;dico-tribut&aacute;ria;</p>

<p>II - Assessoria tecnol&oacute;gica de apoio ao musicoterapeuta;</p>

<p>III - Assessoria a abertura de consult&oacute;rios e afins,</p>

<p><strong><center> ARTIGO</strong><strong> 22&ordm;</strong><strong>- </strong><strong>DAS COMISS&Otilde;ES</strong></p>
</center>

<p>A APEMESP contar&aacute; com as seguintes Comiss&otilde;es:</p>

<p>I - Assessoria, Divulga&ccedil;&atilde;o e Marketing;</p>

<p><strong>II </strong><strong>- </strong>Interc&acirc;mbio;</p>

<p>III - Cientifica</p>

<p>IV - Regulamenta&ccedil;&atilde;o da Profiss&atilde;o;</p>

<p>V - Eventos</p>

<p><strong>VI </strong><strong>- </strong>Biblioteca;</p>

<p><strong>VII </strong><strong>- </strong>Site e Internet:</p>

<p>VIII - Publica&ccedil;&atilde;o;</p>

<p><strong>IX &ndash;</strong><strong> </strong>Patrim&ocirc;nio:</p>

<p>XI - Mercado de trabalho.</p>

<p>As Comiss&otilde;es ser&atilde;o regidas por regulamentos pr&oacute;prios.</p>

<p>As Comiss&otilde;es dever&atilde;o prestar contas ao Presidente da APEMESP sempre que se fizer necess&aacute;rio ou em reuni&otilde;es pr&eacute;-determinadas pelo mesmo.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 23</strong><strong>&ordm;</strong><strong> DA REMUNERA&Ccedil;&Atilde;O </strong></p>
</center>

<p>Os membros da Diretoria Executiva e do Conselho Fiscal n&atilde;o perceber&atilde;o nenhum tipo de remunera&ccedil;&atilde;o, de qualquer esp&eacute;cie ou natureza, pelas atividades exercidas na APEMESP.</p>

<center><p><strong> ARTIGO 24&deg; &mdash; DA</strong><strong> RESPONSABILIDADE DOS MEMBROS</strong></p>
</center>

<p>Os associados, mesmo que investidos na condi&ccedil;&atilde;o de membros da diretoria executiva e conselho fiscal, n&atilde;o respondem, riem mesmo subsidiariamente, pelos encargos e obriga&ccedil;&otilde;es sociais da APEMESP_</p>

<center><p><strong> ARTIGO 25&ordm; - DO </strong><strong>PATRIM&Oacute;NIO SOCIAL</strong></p>
</center>

<p>O patrim&ocirc;nio da APEMESP ser&aacute; constitu&iacute;do e mantido por:</p>

<p><strong>I. </strong>Contribui&ccedil;&otilde;es anuais dos associados contribuintes</p>

<p>Doa&ccedil;&otilde;es, legados, bens, direitos e valores adquiridos, e suas poss&iacute;veis rendas e, ainda, pela arrecada&ccedil;&atilde;o dos valores obtidas atrav&eacute;s da realiza&ccedil;&atilde;o de festas e outros eventos, da comercializa&ccedil;&atilde;o de publica&ccedil;&otilde;es, instrumentos musicais, equipamentos e outros produtos de interesse, da presta&ccedil;&atilde;o de servi&ccedil;os de assessoria junto a institui&ccedil;&otilde;es de sa&uacute;de, educa&ccedil;&atilde;o, empresarial e social, desde que revertidos totalmente em beneficio da APEIvlESP;</p>

<ol>
	<li>
	<p>Alugu&eacute;is de im&oacute;veis e juros de t&iacute;tulos ou dep&oacute;sitos;</p>
	</li>
	<li>
	<p>Havendo rec&iacute;proca conveni&ecirc;ncia poder&aacute; a APEIVIESP, com pr&eacute;vio consentimento da Assembl&eacute;ia Geral e das autoridades competentes, incorporar institui&ccedil;&otilde;es ou entidades cujos fins, sejam de seu interesse.</p>
	</li>
</ol>

<center><p><strong> ARTIGO </strong><strong>26&ordm; - DA VENDA</strong></p>
</center>

<p>Os bens m&oacute;veis e im&oacute;veis poder&atilde;o ser alienados, mediante pr&eacute;via autoriza&ccedil;&atilde;o de Assembl&eacute;ia Geral Extraordin&aacute;ria, especialmente convocada para este fim, devendo o valor apurado ser integralmente aplicado no desenvolvimento das atividades sociais ou no aumento do patrim&oacute;nio social da APEIVIESP.</p>

<p>&nbsp;</p>

<center><p><strong> ARTIGO 27&ordm; - DA REFORMA ESTATUT&Aacute;RIA</strong></p>
</center>

<p>&nbsp;</p>

<p>O presente estatuto social poder&aacute; ser reformado no tocante &agrave; administra&ccedil;&atilde;o, no todo ou em parte, a qualquer tempo, por delibera&ccedil;&atilde;o da Assembl&eacute;ia Geral Extraordin&aacute;ria, especialmente convocada para este fim. composta de associados contribuintes em dia com suas obriga&ccedil;&otilde;es sociais, n&atilde;o podendo ela deliberar sem voto concorde de 2/3 (dois ter&ccedil;os) dos presentes, sendo em primeira chamada, com a maioria absoluta dos associados e em segunda chamada, urna hora ap&oacute;s a primeira, com qualquer n&uacute;mero de associados.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<center>
<p><strong> ARTIGO 28&deg; - DA DISSOLU&Ccedil;&Atilde;O</strong></p>
</center>

<p><strong>A APEMESP poder&aacute; ser dissolvida. a qualquer tempo. urna vez constatada a </strong><strong>impossibilidade de sua sobreviv&ecirc;ncia, face &agrave; impossibilidade da manuten&ccedil;&atilde;o de seus </strong><strong>objetivos sociais</strong><strong>;</strong><strong> ou desvirtuamento de suas finalidades estatut&aacute;rias ou, ainda, por </strong><strong>car&ecirc;ncia de recursos financeiros e humanos, mediante delibera&ccedil;&atilde;o de Assembl&eacute;ia Gerai </strong><strong>Extraordin&aacute;ria. especialmente convocada para este fim, composta de associados </strong><strong>contribuintes em dia cem suas obriga&ccedil;&otilde;es sociais, n&atilde;o podendo ela deliberar sem voto </strong><strong>concorde de 213 (dois ter&ccedil;as) dos presentes, sendo em primeira chamada</strong><strong>;</strong><strong> com a </strong><strong>totalidade dos associados e em segunda chamada, uma hora ap&oacute;s a primeira, com a </strong><strong>presen&ccedil;a de, no m&iacute;nimo, 1/3 (um ter&ccedil;o) dos associados,</strong></p>

<p><strong>Par&aacute;grafo &Uacute;nico</strong><strong> - </strong><strong>Em caso de dissolu&ccedil;&atilde;o social da APEMESP, liquidado o passivo, </strong><strong>os bens remanescentes, ser&atilde;o destinados para outra entidade assistencial cong&ecirc;nere</strong><strong>:</strong><strong> </strong><strong>com personalidade jur&iacute;dica comprovada, sede e atividade preponderante nesta capital e </strong><strong>devidamente registrada nos &oacute;rg&atilde;os p&uacute;blicos competentes.</strong></p>

<center>
<p><strong> ARTIGO 29&ordm; &ndash; DO EXERCICIO SOCIAL</strong></p>
</center>

<p><strong>O exerc&iacute;cio social terminar&aacute; em 31 de dezembro de cada ano, quando ser&atilde;o elaboradas </strong><strong>as demonstra&ccedil;&otilde;es financeiras da entidade</strong><strong>;</strong><strong> de conformidade com </strong><em>as </em><strong>disposi&ccedil;&otilde;es legais.</strong></p>

<center><p><strong> ARTIGO 30&ordm; - DAS DISPOSI&Ccedil;&Otilde;ES GERAIS</strong></p>
</center>

<p><img hspace="12" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMYAAAABCAYAAACFdtFRAAAACXBIWXMAAA7DAAARwQHiIy6rAAAAGUlEQVR4nGP59esX24YN6xMYRsEoGAVwAACqywVoQgTRiQAAAABJRU5ErkJggg==" style="float:left" /><strong>A APEMESP n&atilde;o distribui lucros, bonifica&ccedil;&otilde;es ou vantagens a qualquer t&iacute;tulo, para </strong><strong>dirigentes, associados ou mantenedores, sob nenhuma forma </strong><strong>ou </strong><strong>pretexto, devendo suas </strong><strong>rendas ser aplicadas, exclusivamente, no territ&oacute;rio nacional.</strong></p>

<p><strong>ARTIGO </strong><strong> 31</strong><strong>0</strong><strong> - DAS OMISS&Otilde;ES</strong></p>

<p><strong>Os casos omissos no presente Estatuto ser&atilde;o resolvidos pela Diretoria Executiva, &quot;ad </strong><strong>referendum!&#39; da Assembl&eacute;ia Geral;</strong></p>

<p>&nbsp;</p>

<p><strong>S&atilde;o Paulo, 27 de Julho de 2.008</strong></p>
                ',
                "id_user" => 2,
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                "id"        => 3,
                "titulo"    => "O que é Musicoterapia?",
                "subtitulo" => '',
                "body"      => '<p>Musicoterapia &eacute; a utiliza&ccedil;&atilde;o da m&uacute;sica e/ou seus elementos (som, ritmo, melodia e harmonia) por um musicoterapeuta qualificado, com um cliente ou grupo, num processo para facilitar, e promover a comunica&ccedil;&atilde;o, rela&ccedil;&atilde;o, aprendizagem, mobiliza&ccedil;&atilde;o, express&atilde;o, organiza&ccedil;&atilde;o e outros objetivos terap&ecirc;uticos relevantes, no sentido de alcan&ccedil;ar necessidades f&iacute;sicas, emocionais, mentais, sociais e cognitivas.</p>

<p>A Musicoterapia objetiva desenvolver potenciais e/ou restabelecer fun&ccedil;&otilde;es do indiv&iacute;duo para que ele/ela possa alcan&ccedil;ar uma melhor integra&ccedil;&atilde;o intra e/ou interpessoal e, conseq&uuml;entemente, uma melhor qualidade de vida, pela preven&ccedil;&atilde;o, reabilita&ccedil;&atilde;o ou tratamento. (Federa&ccedil;&atilde;o Mundial de Musicoterapia Inc. 1996).</p>

<p>Musicoterapia surgiu oficialmente durante a Segunda Guerra Mundial, quando a m&uacute;sica passou a ser utilizada cientificamente e com fins terap&ecirc;uticos na reabilita&ccedil;&atilde;o e recupera&ccedil;&atilde;o dos soldados feridos.</p>

<p>Primeiro plano de estudos acerca dos efeitos terap&ecirc;uticos da m&uacute;sica (como e porque eles eram alcan&ccedil;ados) &nbsp;&nbsp;&nbsp; foi elaborado em 1944, em Michigam (EUA). Em 1950 foi fundada a Associa&ccedil;&atilde;o Nacional para Terapia Musical nos EUA e em 1968, na Argentina, houve a primeira Jornada Latino-Americana de Musicoterapia.</p>

<p>No Brasil, os cursos realizados com esse fim foram fundados em 1971, no Paran&aacute; e Rio de Janeiro, e em 1980 a Universidade Federal do Rio de Janeiro iniciou a Pr&aacute;tica Cl&iacute;nica da Musicoterapia.</p>

<p>A Musicoterapia &eacute; uma carreira de n&iacute;vel superior (gradua&ccedil;&atilde;o e p&oacute;s-gradua&ccedil;&atilde;o) e &eacute; reconhecida pelo Conselho Federal de Educa&ccedil;&atilde;o desde 1978 atrav&eacute;s do parecer 829/78.</p>

<div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden"><iframe allowfullscreen="" frameborder="0" height="360" src="https://www.youtube.com/embed/tGEZFDrqt4Y" style="position:absolute;top:0;left:0;width:100%;height:100%" width="640"></iframe></div>

<p>&nbsp;</p>

<p><strong>Atua&ccedil;&atilde;o da Musicoterapia</strong></p>

<ul>
	<li>
	<p>Cl&iacute;nicas e Hospitais Psiqui&aacute;tricos</p>
	</li>
</ul>

<ul>
	<li>
	<p>Cl&iacute;nicas Multidisciplinares</p>
	</li>
</ul>

<ul>
	<li>
	<p>Cl&iacute;nicas Geri&aacute;tricas</p>
	</li>
</ul>

<ul>
	<li>
	<p>Hospitais Cl&iacute;nicos-Gerais</p>
	</li>
</ul>

<ul>
	<li>
	<p>Hospitais Dia</p>
	</li>
</ul>

<ul>
	<li>
	<p>Centro e Institui&ccedil;&otilde;es de Reabilita&ccedil;&atilde;o</p>
	</li>
</ul>

<ul>
	<li>
	<p>Escolas Regulares e Especiais</p>
	</li>
</ul>

<ul>
	<li>
	<p>Institui&ccedil;&otilde;es Sociais e P&uacute;blicas</p>
	</li>
</ul>

<ul>
	<li>
	<p>Consult&oacute;rios Particulares</p>
	</li>
</ul>

<ul>
	<li>
	<p>Empresas</p>
	</li>
</ul>',
                "id_user" => 2,
                "created_at" => $now,
                "updated_at" => $now,
            ],
       ]);
    }
}
