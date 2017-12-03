@extends('main')

@section('titulo', '| Conquistas')

@section('conteudo')

@foreach ($conquistas as $conquista)
<ul>
	<li>
	<h2><strong>{{ $conquista->titulo }}</strong></h2>
	</li>
</ul>

{!! $conquista->conteudo !!}

<hr>

@endforeach


@endsection
