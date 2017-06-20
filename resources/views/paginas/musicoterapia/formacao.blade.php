@extends('main')

@section('titulo', '| Formação')

@section('conteudo')

<div class="row">
	<div class="col-md-12">

	<h2> Formações </h2>
	<div class="col-md-6">
		<p><strong>S&atilde;o Paulo</strong></p>

<p>
{{  Html::image('images/musicoterapia/formacao/fmu.png',  '', array('style' => 'width: 90px; height: 70px;')) }}
</p>

<p>FMU, Faculdades Metropolitanas Unidas (G, P)</p>

<p>www.fmu.br</p>

<hr>
<p>{{  Html::image('images/musicoterapia/formacao/cmbb.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>CMBB, Centro de Musicoterapia Benenzon Brasil</p>

<p>Cursos de Extens&atilde;o em Musicoterapia</p>

<p>www.centrobenenzon.com.br</p>
<hr>
</div>

<div class="col-md-6">
<p><strong>Goi&aacute;s</strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/ufg.png',  '', array('style' => 'width: 90px; height: 70px;')) }}"</p>

<p>UFG, Universidade Federal de Goi&aacute;s (G)</p>

<p>www.ufg.br</p>
<hr>
</div>
<div class="col-md-6">
<p><strong>Rio de Janeiro</strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/cbm.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>CBM, Conservat&oacute;rio Brasileiro de M&uacute;sica (G, P)</p>

<p>www.cbm-musica.org.br</p>
<hr>
</div>

<div class="col-md-6">
<p><strong>Pernambuco</strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/facho.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>FACHO &ndash; Faculdade de Ci&ecirc;ncias Humanas de Olinda (P)</p>

<p>www.facho.br</p>
<hr>
</div>

<div class="col-md-6">
<p><strong>Paran&aacute;</strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/fap.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>FAP, Faculdade de Artes do Paran&aacute; (G, P)</p>

<p>www.fapr.br</p>
<hr>
</div>

<div class="col-md-6">
<p><strong>Santa Catarina </strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/unisul.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>UNISUL, Universidade do Sul de Santa Catarina (Tubar&atilde;o), (P)</p>

<p>www.unisul.br</p>
<hr>
</div>

<div class="col-md-6">
<p><strong>Rio Grande do Sul</strong></p>

<p>{{  Html::image('images/musicoterapia/formacao/est.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>EST, Escola Superior de Teologia (S&atilde;o Leopoldo), (G, P)</p>

<p>www.est.edu.br</p>

<p>{{  Html::image('images/musicoterapia/formacao/feevale.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>FEEVALE &ndash; Centro Universit&aacute;rio (Novo Hamburgo), (P)</p>

<p>www.feevale.br</p>

<p>{{  Html::image('images/musicoterapia/formacao/ufpel.png',  '', array('style' => 'width: 90px; height: 70px;')) }}</p>

<p>UFPel, Universidade Federal de Pelotas (Pelotas), (P)</p>

<p>www.ufpel.tche.br</p>
</div>
	</div>
</div>


@endsection