@extends('admin.dashboard')
@section('titulo', 'Indicações literárias')
@section('conteudo')

<div class="row">
<div class="col-md-12">
   <div class="row">
      <div class="col-lg-10">
      <img src="{{ url('images/indicacoes')}}/{{ $indicacao->imagem }}"/>

      <p><b>Titulo:</b> {{ $indicacao->titulo }} </p>
      <p><b>Descricao:</b> {{ $indicacao->descricao }} </p>
      <hr>
      <br>
      <p>Nome: {{ $indicacao->nome }} </p>
      <p>Email para contato: {{ $indicacao->email }} </p>
      <a class="btn btn-success" href="{{ url('/admin/indicacoesliterarias/aprovar') }}/{{$indicacao->id}}">Aprovar</a>
      <a class="btn btn-danger" href="{{ url('/admin/indicacoesliterarias/excluir') }}/{{$indicacao->id}}">Excluir</a>
      </div>
   </div>
   <div class="row">
      <p>  </p>
   </div>
</div>
@endsection

