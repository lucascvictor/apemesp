@extends('admin.dashboard')

@section('titulo', 'Gerenciamento de dados cadastrais' )

@section('extrastyle')

<style type="text/css">
.bs-wizard {margin-top: 40px;}

/*Form Wizard*/
.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; }
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
/*END Form Wizard*/
</style>

@endsection

@section('conteudo')

<h5>{{ $usuario[0]->name }} </h5>
<div class="row bs-wizard col-md-12" style="margin-bottom: 15px;">

	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="col-xs-3 col-md-4 bs-wizard-step complete">
		<div class="text-center bs-wizard-stepnum">Passo 1</div>
		<div class="progress">
			<div class="progress-bar"></div>
		</div>
		<a href="#" class="bs-wizard-dot"></a>
		<div class="bs-wizard-info text-center">Cadastro de usuário e senha.</div>
	</div>

	<div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 1)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif">		<!-- complete -->
		<div class="text-center bs-wizard-stepnum">Passo 2</div>
		<div class="progress">
			<div class="progress-bar"></div>
		</div>
		<a href="/admin/associados/perfil/{{ $usuario[0]->id }}" class="bs-wizard-dot"></a>
		<div class="bs-wizard-info text-center">Cadastro dos dados pessoais</div>
	</div>

	<div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 2)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif">		<!-- complete -->
		<div class="text-center bs-wizard-stepnum">Passo 3</div>
		<div class="progress">
			<div class="progress-bar"></div>
		</div>
		<a href="/admin/associados/perfil/{{ $usuario[0]->id }}" class="bs-wizard-dot"></a>
		<div class="bs-wizard-info text-center">Cadastro dos dados acadêmicos</div>
	</div>
	<div class="row">

	</div>
	<div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 3)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif">		<!-- complete -->
		<div class="text-center bs-wizard-stepnum">Passo 4</div>
		<div class="progress">
			<div class="progress-bar"></div>
		</div>
		<a href="/admin/associados/perfil/{{ $usuario[0]->id }}" class="bs-wizard-dot"></a>
		<div class="bs-wizard-info text-center">Cadastro dos dados profissionais</div>
	</div>

	<div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 4)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif">		<!-- active -->
		<div class="text-center bs-wizard-stepnum">Passo 5</div>
		<div class="progress">
			<div class="progress-bar"></div>
		</div>
		<a href="#" class="bs-wizard-dot"></a>
		<div class="bs-wizard-info text-center"> Confirmação da documentação necessária</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h4>Resultado da avaliação:</h4>
		<form class="form-horizontal" method="POST" action="{{ url('/admin/validacao/status' )}}">
			{{ csrf_field() }}
			<select class="form-horizontal" id="validacao" name="validacao">
				<option value="1">Dados incompletos</option>
				<option value="2">Informações falsas ou não coerentes</option>
				<option value="3">Documentos ilegiveis</option>
				<option value="4">Foto para reconhecimento do musicoterapeuta é inválida</option>
				<option value="5">Informações válidas</option>
			</select>
			<br>
			<label class="form-horizontal">Observações:</label>
			<br>
			<textarea name="observacoes" class="form-horizontal" cols="50" rows="10">
			</textarea>
			<br />
			<input name="id" type="hidden" value="{{ $usuario[0]->id }}">
			<button class="btn btn-success" type="submit">Salvar Avaliação</button>
		</form>
	</div>
	<div class="col-md-6">
		<h4>Histórico de avaliações</h4>
		<div class="row">
		<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Avaliacao</th>
							<th>Data da avaliacação</th>
							<th>Observações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($historico as $avaliacao)
						<tr>
							<?php
							switch($avaliacao->status) {
								case(1):
									$avlc = "Dados incompletos";		
									break;
								case(2):
									$avlc = "Informações falsas ou não coerentes";
									break;
								case(3):
									$avlc = "Documentos ilegiveis";
									break;
								case(4):
									$avlc = "Foto para reconhecimento do musicoterapeuta é inválida";
									break;
								case(5):
									$avlc = "Informações válidas";
									break;
							}
							?>
							<td>{{ $avlc }}</td>
							<td>{{ $avaliacao->created_at }}</td>
							<td>{{ $avaliacao->observacoes }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			{!! $historico->appends(request()->query())->render() !!} 
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
			<h4>Enviar e-mail para o associado:</h4>
			<h5>Informe brevemente os motivos desta avaliação</h5>
			<form class="form-horizontal" method="POST" action="{{ url('/admin/validacao/email')}}">
				{{ csrf_field() }}
				<textarea name="mensagem" id="mensagem" cols="50" rows="10"> </textarea>
				<br>
				<input name="id" type="hidden" value="{{ $usuario[0]->id }}">
				<button class="btn btn-success" type="submit">Enviar</button>
			</form>
		</div>
	<div class="col-md-6">
		<h4>E-mails enviados</h4>
		<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Mensagem</th>
							<th>Data de envio</th>
						</tr>
					</thead>
					<tbody>
						@foreach($emails as $email)
							<td><a href="#{{ $email->id }}">Visualizar mensagem</a></td>
							<td>{{ $email->created_at }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		</div>
		{!! $emails->appends(request()->query())->render() !!}
	</div>
</div>

@endsection