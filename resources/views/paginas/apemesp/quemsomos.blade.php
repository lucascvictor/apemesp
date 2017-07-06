@extends('main')

@section('titulo', '| História')

@section('conteudo')
					<h1 class="entry-title">{{ $pagina->titulo }}</h1>
					<h1 class="entry-title">{{ $pagina->subtitulo }}</h1>
					
					
					
						{!! $pagina->body !!}

			
			

@endsection



