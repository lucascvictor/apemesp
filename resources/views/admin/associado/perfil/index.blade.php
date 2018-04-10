@extends('admin.dashboard')

@section('titulo', 'Perfil')

@section('conteudo')

		<fieldset>

				
				<legend>Dados da conta de acesso</legend>

				
				<!-- Campo Nome -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Nome Completo:</label>  
					  <div class="col-md-8">
					  <input id="name" name="name" type="text" placeholder="{{ Auth::user()->name }}" class="form-control input-md" readonly="">
					  </div>
					</div>

					<!-- E-mail -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="email">E-mail:</label>  
					  <div class="col-md-8">
					  <input id="email" name="email" type="text" placeholder="{{ Auth::user()->email }}" class="form-control input-md" readonly="">
					  <a class="btn btn-warning" href="" data-toggle="modal" data-target="#AlterarEmail"> Alterar e-mail</a>
					  </div>
					</div>

					<!-- senha -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="password">Senha:</label>  
					  <div class="col-md-8">
					  <input id="password" name="password" type="password" placeholder="***************" class="form-control input-md" readonly="">
					  <a class="btn btn-warning" href="" data-toggle="modal" data-target="#AlterarSenha"> Alterar senha</a>
					  </div>
					</div>
		</fieldset>


		<fieldset style="margin: 20px;">

				
				<legend>Exibição de dados profissionais</legend>

				
				<!-- Campo Nome -->
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Deseja permitir a exibição de seus dados profissionais?</label>  
					  <div class="col-md-4">
					  <select class="form-control form-control-lg">
						<option>Sim</option>
						<option>Não</option>
					</select>
						  <a class="btn btn-warning" href="" data-toggle="modal" data-target="#AlterarEmail"> Confirmar</a>
					  </div>
					</div>

			
		</fieldset>


<div class="modal fade" id="AlterarEmail" role="dialog">
		 <div class="modal-dialog">

			 <!-- Modal content-->
					 <div class="modal-content">
							 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Alterar o e-mail</h4>
								 </div>
							 <div class="modal-body">
									<form class="form-horizontal" method="POST" action="{{ url('/admin/perfil/alteraremail')}}" >
											<fieldset>
											{{ csrf_field() }}

												<div class="form-group">
														<label class="col-md-4 control-label" for="email">E-mail Antigo:</label>  
														<div class="col-md-4">
														<input id="oldemail" name="old_email" type="text" placeholder="{{ Auth::user()->email }}" class="form-control input-md" readonly="">
													
														</div>
												</div>

												<div class="form-group">
														<label class="col-md-4 control-label" for="email">Novo E-mail:</label>  
														<div class="col-md-4">
														<input id="newemail" name="new_email" type="text"  class="form-control input-md" required="">
											
														</div>
												</div>
											</fieldset>
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

<div class="modal fade" id="AlterarSenha" role="dialog">
		 <div class="modal-dialog">

			 <!-- Modal content-->
					 <div class="modal-content">
							 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Alterar a senha</h4>
								 </div>
							 <div class="modal-body">
									<form class="form-horizontal" method="POST" action="{{ url('/admin/perfil/alterarsenha')}}" >
											<fieldset>
											{{ csrf_field() }}

												<div class="form-group">
														<label class="col-md-4 control-label" for="email">Digite a senha anterior:</label>  
														<div class="col-md-4">
														<input id="email" name="old_password" type="password" class="form-control input-md" >
													
														</div>
												</div>

												<div class="form-group">
														<label class="col-md-4 control-label" for="email">Digite a nova senha:</label>  
														<div class="col-md-4">
														<input id="email" name="new_password" type="password"  class="form-control input-md" required="">
											
														</div>
												</div>

												<div class="form-group">
														<label class="col-md-4 control-label" for="email">Repita a nova senha:</label>  
														<div class="col-md-4">
														<input id="email" name="re_password" type="password"  class="form-control input-md" required="">
											
														</div>
												</div>
											</fieldset>
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