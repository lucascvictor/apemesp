@extends('admin.dashboard')

@section('titulo', 'Página Bloqueada Temporáriamente')

@section('conteudo')

<div class="panel panel-warning">
<div class="panel-heading">
		<h2 class="panel-title">Por favor conclua as etapas anteriores para liberar esta etapa de cadastro.</h2>
</div>
 <div class="panel-body">
    <h3>Você ainda não concluiu o passo <span style="color: red;">{{ Auth::user()->id_cadastro + 1 }}</span></h3>
  </div>
</div>


@endsection