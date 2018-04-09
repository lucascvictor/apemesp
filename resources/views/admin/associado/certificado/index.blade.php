<?php

$dia = date('j');
$mes = date('F');
$ano = date('Y');

if($mes == 'January')
$mes = 'Janeiro';

if($mes == 'April') {
$mes = 'Abril';
}
?>
<div style="font-size: 15px; line-height: 25px; width: 700px;">
    {{  Html::image('images/posts/imagens/previas/apemesp.jpg', '', array('style' => 'width: 50%; height: 20%; margin-left: 10%;')) }}
    <p style="text-align: left;">

    <h2>DECLARAÇÃO DE ASSOCIADO/A</h2>

    <p>A Associação de Profissionais e Estudantes de Musicoterapia do Estado de São Paulo,
    inscrita no CNPJ 64.016.934/0001-02, registrada como associação civil, sem fins lucrativos,
    regida pela legislação brasileira em vigor, designada,conforme estatuto, como APEMESP,
    tendo por representante legal, Daniel Santana, solteiro;Musicoterapeuta,
    portador do Documento de Identidade RG nº 99.999.999-x; inscrito no CPF/MF sob
    o nº 999.999.999-99; residente e domiciliado em Rua do presidente, 1000;
    reconhece o vínculo de associada de [nome d@ associad@], *[profissão d@ associad@]*
    inscrita na APEMESP sob o número [número d@ associad@],
    carteira de identidade nº xx.xxx.xxx-x [órgão de emissão], CPF xxx.xxx.xxx-xx,
    residente e domiciliado na [endereço d@ associad@], na cidade de
    xxxxxxxxxxx, no estado de xxxxxxxxxxxx; e declara que o/a associado/a está em
    dia com suas obrigações financeiras e documentais junto a associação no ano de <?= $ano ?>.</p>

    <br>
    <br>

    <div style="margin-left: 15%;">
    São Paulo, <?php echo $dia; ?> de <?php echo $mes; ?> de <?php echo $ano; ?>.

    <p>____________ (espaço para assinatura)</p>
    <p>[nome do presidente]</p>
    <p>Presidente APEMESP Gestão 2018 – 2022</p>
</div>



</div>