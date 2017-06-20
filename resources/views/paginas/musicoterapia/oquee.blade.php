@extends('main')

@section('titulo', '| O que é Musicoterapia')

@section('conteudo')


<h2> {{ $pagina->titulo }} </h2>
<h3> {{ $pagina->subtitulo }} </h3>


{!! $pagina->body !!}


@endsection