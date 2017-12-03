@extends('main')

@section('titulo', '| Formação')

@section('conteudo')

<div class="row">
	<div class="col-md-12">

	<h2> Formações </h2>
	@foreach($formacoes as $formacao)
	<div class="col-md-6">
		<p><strong>{{ $formacao->titulo }}</strong></p>

		<p>
			{{  Html::image('images/musicoterapia/formacao/'. $formacao->imagem,  '', array('style' => 'width: 90px; height: 70px;')) }}
		</p>
		{!! $formacao->conteudo !!}
	<hr>
	</div>
	@endforeach
	</div>
</div>


@endsection
