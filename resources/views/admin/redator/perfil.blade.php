@extends('admin.dashboard')

@section('titulo', 'Perfil')

@section('conteudo')

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/dadospessoais')}}">

	{{ csrf_field() }}
		<fieldset>

				
				<legend>Dados da conta de acesso</legend>

				
				<!-- Campo Nome -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">Nome Completo:</label>  
					  <div class="col-md-4">
					  <input id="name" name="name" type="text" placeholder="{{ Auth::user()->name }}" class="form-control input-md" readonly="">
					  </div>
					</div>

					<!-- E-mail -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="email">E-mail:</label>  
					  <div class="col-md-4">
					  <input id="email" name="email" type="text" placeholder="{{ Auth::user()->email }}" class="form-control input-md" readonly="">
					  <a class="btn btn-warning" href=""> Alterar e-mail</a>
					  </div>
					</div>

					<!-- senha -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Senha:</label>  
					  <div class="col-md-4">
					  <input id="password" name="password" type="password" placeholder="***************" class="form-control input-md" readonly="">
					  <a class="btn btn-warning" href=""> Alterar senha</a>
					  </div>
					</div>

				

				


		</fieldset>
</form>


@endsection