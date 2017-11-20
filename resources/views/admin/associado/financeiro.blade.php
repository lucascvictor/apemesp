@extends('admin.dashboard')

@section('titulo', 'Controle financeiro')

@section('extrastyle')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('conteudo')


<div class="container">


			<fieldset>
				<legend>Anuidades</legend>


				<div class="row">
												<div class="col-lg-12">


																<table class="table table-hover table-striped">
																		<thead>
																				<tr>
																						<th> </th>
																						<th>Arquivo enviado?</th>
																						<th>Arquivo validado?</th>
																						<th>Status</th>
																						<th>Download</th>
																						<th colspan="3"></th>
																				</tr>
																		</thead>
																		<tbody>
																			<?php $i = 0; ?>
																			@foreach ($anuidades as $anuidade)
																			<tr>
																							<td><b>{{ $anuidade->ano }}</b></td>

																							<?php $arquivo = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/anuidade_" . $anuidade->ano .".pdf" ?>
																							<td>
																									<?php if (file_exists($arquivo)) {
																												    echo "SIM";
																														$documentacao[$i] = 1;
																												} else {
																												    echo "Não";
																														$documentacao[$i] = 0;

																												} ?>
																							</td>
																							<td></td>
																							<td><a class="btn btn-default" href="" data-toggle="modal" data-target="#rgModal">Editar</a></td>
																							<td><a href="/associado/download/anuidade_{{ $anuidade->ano }}.pdf">dowload</a></td>
																							<td><a href="{{ url('/associado/financeiro/anuidade/') }} {{ $anuidade->id }}">Solicitar verificação</a></td>
																			 </tr>
																			 <?php $i++; ?>
																			 @endforeach

																		</tbody>
																</table>

														</div>

										</div>




<div class="modal fade" id="rgModal" role="dialog">
	 <div class="modal-dialog">

		 <!-- Modal content-->
				 <div class="modal-content">
						 <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
								 <h4 class="modal-title">Enviar RG</h4>
							 </div>
						 <div class="modal-body">

		 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/documentacao/rg')}}">

		 	{{ csrf_field() }}
					<!-- Botão de Arquivo para CPF -->
						<div class="form-group" id="mensagem1">
						  <label class="col-md-4 control-label" for="filebutton">RG: </label>
						  <div class="col-md-4">
						    <input id="documento1" name="rg" class="input-file" type="file">
								<br />
								<button class="btn btn-success" id="botao1">
									Enviar novo RG
								</button>
						  </div>

						</div>

		</form>
		</div>

			</div>

		</div>
	</div>


</fieldset>

</div>


@endsection


@section('extrascript')






@endsection
