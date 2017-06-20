@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<form class="form-horizontal">
		<fieldset>

				
				<legend>Formação Acadêmica</legend>

				<!-- Categorias -->
				<div class="form-group">
                     <label class="col-md-4 control-label" for="nome">Especialidade de atendimento:</label> 

					 
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

@endsection