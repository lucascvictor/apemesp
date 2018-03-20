@extends('main')

@section('titulo', 'material')

@section('conteudo')

<div class="row">
<h2> Materiais informativos APEMESP</h2>
</div>
<div class="row">
	@foreach($materiais as $material)

	<div class="col-md-6 col-lg-6">

		<!-- Adicionar botão para indicar Livros -->

		<p><h2>{{ $material->titulo }}</h2></p>

		<img alt="{{ $material->titulo }}" src="{{ url('/images/musicoterapia/material')}}/{{ $material->imagem }}" style="height:200px; width:280px" title="Revista Brasileira de Mt" />

		{!! $material->conteudo !!}

	</div>
	@endforeach
    
</div>
<div class="row">
    <p> {{ $materiais->render() }} </p>
</div>

@endsection
