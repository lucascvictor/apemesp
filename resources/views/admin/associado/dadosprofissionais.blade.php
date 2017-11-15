@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<form class="form-horizontal">
		<fieldset>
				<legend>Formação Acadêmica</legend>

				<!-- Categorias -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="especialidade">Especialidade de atendimento:</label>
					<div class="col-md-4">
						<select id="assunto" name="assunto" class="form-control">
							@foreach($especialidades as $especialidade)
								<option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
							@endforeach
					 </select>
					 <a href="" data-toggle="modal" data-target="#myModal">Sua especialidade não está listatada? Clique aqui </a>


					</div>
      	</div>

                 <!-- Campo LinkedIn -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span></label>
					  <div class="col-md-4">
					  <input id="ies" name="ies" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" required="">
					  </div>
					</div>







				<!-- Botão -->
					<div class="form-group">

					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
					  </div>
					</div>


		</fieldset>
</form>

<div class="modal fade" id="myModal" role="dialog">
		 <div class="modal-dialog">

			 <!-- Modal content-->
					 <div class="modal-content">
							 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Adicionar especialidade</h4>
								 </div>
							 <div class="modal-body">
								 <form class="form-horizontal" method="POST" action="{{ url('associado/dadosprofissionais/especialidade')}}">

									{{ csrf_field() }}
									 <legend>Digite abaixo a sua especialidade</legenda>
									 <input name="especialidade" id="especialidade" type="text">


								 		<div class="modal-footer">
											 <button class="btn btn-success btn-block">
												 OK
											 </button>
									 </div>
							 </form>
							 </div>
					 </div>

		 </div>
</div>

@endsection
