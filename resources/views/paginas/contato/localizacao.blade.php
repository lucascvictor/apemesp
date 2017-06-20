@extends('main')

@section('titulo', '| Localização')

@section('conteudo')

	<div class="row">
		<div class="center">
		<center>
		<div style="width: 100%; height: 100%;">
		<h2> Estamos localizados em: </h2>
		<div style="width: 700px; height: 500px;">
    	{!! Mapper::render() !!}
    	</div>
    	 
    	<h2> Rua dos Buritis, 310, Pq Jabaquara - São Paulo</h2>
    	</div>
    	</center>
    	</div>
    	
	</div>

@endsection