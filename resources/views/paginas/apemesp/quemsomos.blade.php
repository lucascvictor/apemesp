@extends('main')

@section('titulo', '| História')

@section('conteudo')

					<div class="col-md-8">
					<h1 class="entry-title">{{ $pagina->titulo }}</h1>
					<h1 class="entry-title">{{ $pagina->subtitulo }}</h1>
					</div>
					
					
						{!! $pagina->body !!}

			
			

@endsection



