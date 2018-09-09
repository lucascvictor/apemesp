@section('extrastyle')

     {!! Html::style('css/bootstrap.min.css') !!}-->
    <link media="all" type="text/css" rel="stylesheet" href="http://www.apemesp.com/public/css/bootstrap.min.css">

@endsection
<?php

$dia = date('j');
$mes = date('F');
$ano = date('Y');

if($mes == 'January')
$mes = 'Janeiro';

if($mes == 'February')
$mes = 'Fevereiro';

if($mes == 'March')
$mes = 'Março';

if($mes == 'April')
$mes = 'Abril';

if($mes == 'May')
$mes = 'Maio';

if($mes == 'June')
$mes = 'Junho';

if($mes == 'July')
$mes = 'Junho';

if($mes == 'August')
$mes = 'Agosto';

if($mes == 'September')
$mes = 'Setembro';

if($mes == 'October')
$mes = 'Outubro';

if($mes == 'November')
$mes = 'Novembro';

if($mes == 'Dezember')
$mes = 'Dezembro';

?>
<div class="row">
    <div style="font-size: 15px; line-height: 25px; width: 700px;">
    <div class="row">
        <div class="col-md-4 col-lg-4">
          
        <center> {{  Html::image('images/posts/imagens/previas/apemesp.jpg', '', array('style' => 'width: 45%; height: 27%; margin-left: 10%;')) }}
        </center>
        </div>   
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div style="text-align: left; margin-left: 5%;">

            <h2>DECLARAÇÃO DE ASSOCIADO/A</h2> 

            <p>A Associação de Profissionais e Estudantes de Musicoterapia do Estado de São Paulo,
            inscrita no CNPJ 64.016.934/0001-02, registrada como associação civil, sem fins lucrativos,
            regida pela legislação brasileira em vigor, designada,conforme estatuto, como APEMESP,
            tendo por representante legal, {{ $representante->nome }}, {{ $representante->estado_civil }};{{ $representante->profissao }},
            portador do Documento de Identidade RG nº {{ $representante->rg }}; inscrito no CPF/MF sob
            o nº {{ $representante->cpf }}; residente e domiciliado em {{ $representante->endereco }};
            reconhece o vínculo de associada de {{ $associado->nome }}, inscrita na APEMESP sob o número {{ $numeroCarteirinha }},
            carteira de identidade nº {{ $associado->rg }}, CPF {{ $associado->cpf }},
            residente e domiciliado na {{ $associado->endereco }}, na cidade de
            {{ $associado->id_cidade }}, no estado de {{ $associado->id_estado }} e declara que o/a associado/a está em
            dia com suas obrigações financeiras e documentais junto a associação no ano de <?= $ano ?>.</p>
            <br>
           </div>
            <div style="margin-left: 5%;">
            São Paulo, <?php echo $dia; ?> de <?php echo $mes; ?> de <?php echo $ano; ?>.

            <p><img src="{{ url('images/Assinatura') }}/{{ $representante->assinatura }}" height="150px"></p>
            <p>{{ $representante->nome }}</p>
            <p>Presidente APEMESP Gestão {{ $representante->gestao }}</p>
         </div>
        </div>
    </div>
</div>


</div>