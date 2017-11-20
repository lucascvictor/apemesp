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
																						<th colspan="2"></th>
																				</tr>
																		</thead>
																		<tbody>

																			<tr>
																							<td><b>2010:</b></td>
																							<?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/anuidade_2010.pdf"; ?>
																							<td>
																									<?php if (file_exists($arquivorg)) {
																												    echo "SIM";
																														$documentacao[0] = 1;
																												} else {
																												    echo "Não";
																														$documentacao[0] = 0;
																												} ?>
																							</td>
																							<td></td>
																							<td><a class="btn btn-default" href="" data-toggle="modal" data-target="#rgModal">Editar</a></td>
																							<td><a href="/associado/download/anuidade_2010.pdf">dowload</a></td>
																			 </tr>
																			 <tr>
																							 <td><b>2011:</b></td>
																							 <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/anuidade_2011.pdf"; ?>
																							 <td>
																									 <?php if (file_exists($arquivocpf)) {
																														 echo "SIM";
																														 $documentacao[1] = 1;
																												 } else {
																														 echo "Não";
																														 $documentacao[1] = 0;
																												 } ?>
																							 </td>
																							 <td> </td>
																							 <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#cpfModal">Editar</a></td>
																							 <td><a href="/associado/download/anuidade_2011.pdf">dowload</a></td>
																				</tr>
																				<tr>
																								<td><b>2012:</b></td>
																								<?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/anuidade_2012.pdf"; ?>
																								<td>
																										<?php if (file_exists($arquivocnh)) {
																															echo "SIM";
																															$documentacao[2] = 1;
																													} else {
																															echo "Não";
																															$documentacao[2] = 0;
																													} ?>
																								</td>
																								<td></td>
																								<td><a class="btn btn-default" href="" data-toggle="modal" data-target="#cnhModal">Editar</a></td>
																								<td><a href="/associado/download/anuidade_2012.pdf">dowload</a></td>
																				 </tr>
																				 <tr>
 																								<td><b>2013:</b></td>
 																								<?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/anuidade_2013.pdf"; ?>
 																								<td>
 																										<?php if (file_exists($arquivocnh)) {
 																															echo "SIM";
 																															$documentacao[3] = 1;
 																													} else {
 																															echo "Não";
 																															$documentacao[3] = 0;
 																													} ?>
 																								</td>
 																								<td></td>
 																								<td><a class="btn btn-default" href="" data-toggle="modal" data-target="#cnhModal">Editar</a></td>
																								<td><a href="/associado/download/anuidade_2013.pdf">dowload</a></td>
 																				 </tr>

																		</tbody>
																</table>
											<form  method="post" action="{{ url('/associado/documentacao')}}">

												{{ csrf_field() }}

																<button class="btn btn-success">
																	Confirmar documentação
																</button>
											</form>
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

	<div class="modal fade" id="cpfModal" role="dialog">
		 <div class="modal-dialog">

			 <!-- Modal content-->
					 <div class="modal-content">
							 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Enviar CPF</h4>
								 </div>
							 <div class="modal-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/documentacao/cpf')}}">

							{{ csrf_field() }}
						<!-- Botão de Arquivo para CPF-->
							<div class="form-group" id="mensagem2">
							  <label class="col-md-4 control-label" for="filebutton">CPF: </label>
							  <div class="col-md-4">
							    <input id="documento2" name="cpf" class="input-file" type="file">
									<br />
									<button class="btn btn-success">
										Enviar novo CPF
									</button>
							  </div>
							</div>
		</form>
	</div>

		</div>

	</div>
</div>



		<div class="modal fade" id="cnhModal" role="dialog">
			 <div class="modal-dialog">

				 <!-- Modal content-->
						 <div class="modal-content">
								 <div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal">&times;</button>
										 <h4 class="modal-title">Enviar CNH</h4>
									 </div>
								 <div class="modal-body">
		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/documentacao/cnh')}}">

			{{ csrf_field() }}
							<!-- Botão de Arquivo para CNH-->
								<div class="form-group" id="mensagem3">
								  <label class="col-md-4 control-label" for="filebutton">CNH: </label>
								  <div class="col-md-4">
								    <input id="documento3" name="cnh" class="input-file" type="file">
										<br />
										<button class="btn btn-success">
											Enviar nova CNH
										</button>
								  </div>
								</div>

		</form>
	</div>

		</div>

	</div>
</div>



<div class="modal fade" id="comprovanteModal" role="dialog">
	 <div class="modal-dialog">

		 <!-- Modal content-->
				 <div class="modal-content">
						 <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
								 <h4 class="modal-title">Enviar Comprovante de Endereço</h4>
							 </div>
						 <div class="modal-body">
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/documentacao/comprovante')}}">

	{{ csrf_field() }}
					<!-- Botão de Arquivo para CNH-->
						<div class="form-group" id="mensagem3">
							<label class="col-md-4 control-label" for="filebutton">Comprovante: </label>
							<div class="col-md-4">
								<input id="documento4" name="cnh" class="input-file" type="file">
								<br />
								<button class="btn btn-success">
									Enviar novo comprovante
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
