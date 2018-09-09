@extends('admin.dashboard')

@section('titulo', 'Página Bloqueada Temporáriamente')

@section('conteudo')

<div class="panel panel-warning">
<div class="panel-heading">
		<h2 class="panel-title">Por favor conclua as etapas anteriores para liberar esta etapa de cadastro.</h2>
</div>
 <div class="panel-body">
    <h3>Você ainda não concluiu o passo <span style="color: red;">{{ Auth::user()->id_cadastro + 1 }}</span>
			@if (Auth::user()->id_cadastro + 1 == 2)
					: Cadastro de dados pessoais
			@endif
			@if (Auth::user()->id_cadastro + 1 == 3)
					: Cadastro de dados acadêmicos
			@endif
			@if (Auth::user()->id_cadastro + 1 == 4)
					: Cadastro de dados profissionais
			@endif

			@if (Auth::user()->id_cadastro + 1 == 5)
					: Upload de documentação
			@endif

			@if (Auth::user()->id_cadastro + 1 == 6)
					: Lançamento/Aprovação da anuidade
					<br><br><br><br>
					<p> Caso seja necessário entre em contato para solicitar a validação da anuidade</p>
			@endif
		</h3>
  </div>
</div>


@endsection
