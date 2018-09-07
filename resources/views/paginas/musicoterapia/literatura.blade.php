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
   <div class="col-md-4 col-lg-4">
   
   <div class="card">
  <img class="card-img-top" src="{{ url('/images/musicoterapia/literatura')}}/{{ $literatura->imagem }}">
  <div class="card-body">
    <h5 class="card-title">{{ $literatura->titulo }}</h5>
    <p class="card-text">{!! $literatura->conteudo !!}</p>
  </div>
</div>
</div>
   @endforeach
</div>
<div class="row">
<p> {{ $literaturas->render() }} </p>
</div>
@endsection

@section('extrastyle')

<style>
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	border-radius: 5px; 
	margin-top: 10%;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.card-body {
    padding: 2px 16px;
}

.card-img-top {
	width: 100%;
	heigth: 30%;
	border-radius: 5px 5px 0 0;
}

</style>
@endsection