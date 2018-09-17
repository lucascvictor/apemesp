@extends('main')
@section('titulo', '| Encontre um Musicoterapeuta')
@section('conteudo')
<h2>Informações de atendimento para {{ $dadosPess[0]->name }}</h2>
<br><br>
<div class="row">
    <div class="col-md-8">
    <h3> Localização: </h3>
    <h4>
    <p> Endereço: {{ $dadosPro[0]->endereco }} </p>
    <p> Complemento: {{ $dadosPro[0]->complemento }} </p>
    <p> Bairro: {{ $dadosPro[0]->bairro }} </p>
    <p> CEP: {{ $dadosPro[0]->cep }} </p>
    </h4>
    <h3> Contato: </h3>
    <h4>
    <p> E-mail: {{ $dadosPro[0]->email }} </p>
    <p> Telefone: {{ $dadosPro[0]->telefone }} </p>

    <h3> Atendimento: </h3>
    <h4>
    @foreach ($especialidades as $especialidade)
        @if ($especialidade->id == $dadosPro[0]->id_especialidade)
            <p> Especialidade: {{ $especialidade->nome }} </p>
        @endif
    @endforeach
    @foreach ($escalas as $escala)
        @if ($escala->id == $dadosPro[0]->id_dias_atendimento)
            <p> Dias de atendimento: {{ $escala->escala }} </p>
        @endif
    @endforeach
    @foreach ($proximidades as $proximidade)
        @if ($proximidade->id == $dadosPro[0]->id_proximidade)
            <p> Região: {{ $proximidade->localidade }} </p>
        @endif
    @endforeach
    </h4>
   </div>
</div>
@endsection