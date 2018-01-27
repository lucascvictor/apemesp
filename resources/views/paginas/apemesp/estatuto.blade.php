@extends('main')

@section('titulo', '| Estatuto APEMESP')

@section('conteudo')

<a class="btn btn-default" href="/apemesp/downloads/estatuto.pdf">Download do arquivo PDF</a>
<center>
<h2>{{ $pagina->titulo }}</h2>
</center>
<center>
<h3> {{ $pagina->subtitulo }}</h3>
</center>
<p>&nbsp;</p>

{!! $pagina->body !!}



@endsection
