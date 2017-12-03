@extends('main')

@section('titulo', 'Literatura')

@section('conteudo')

<div class="row">
<a href="{{ url('/musicoterapia/literatura/indicacao') }}">
{{ Form::button('Indique um item para o acervo', array('class' => 'btn btn-success btn-md btn-block')) }}
</a>
</div>
<div class="row">
	@foreach($literaturas as $literatura)

	<div class="col-md-6 col-lg-6">

		<!-- Adicionar botão para indicar Livros -->

		<p><h2>{{ $literatura->titulo }}</h2></p>

		<img alt="{{ $literatura->titulo }}" src="{{ url('/images/musicoterapia/literatura')}}/{{ $literatura->imagem }}" style="height:200px; width:280px" title="Revista Brasileira de Mt" />

		{!! $literatura->conteudo !!}



	</div>
	@endforeach
	<p> {{ $literaturas->links() }} </p>

	</div>

@endsection
