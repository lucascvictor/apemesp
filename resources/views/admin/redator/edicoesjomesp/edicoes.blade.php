@extends('admin.dashboard')

@section('titulo', 'Manutenção de edições Jomesp')


@section('conteudo')




<div class="container">
	<div class="row">
<div class="col-lg-10 col-md-10">
<h3> Os arquivos lançados neste painel são visível somente na página da JOMESP</h3>

			<fieldset>
				<legend>Edições</legend>

									<!-- Aviso sobre o tipo de arquivo -->

											  <div class="col-md-6 " role="alert">
												  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												  	<span style="color: gray;"><strong>Por favor.</strong> Carregue as edições abaixo no formato PDF.</span>
											  </div>




	<table class="table table-hover table-striped">
			<thead>
					<tr>
							<th> Edição </th>
							<th>Arquivo enviado?</th>
							<th>Link para Download</th>
							<th colspan="2"></th>
					</tr>
			</thead>
			<tbody>
@foreach($edicoes as $edicao)
				<tr>
								<td><b>{{ $edicao->edicao }}</b></td>
								<?php $arquivoe = public_path(). "/files/edicoesJomesp/" . $edicao->arquivo; ?>
								<td>
										<?php if (file_exists($arquivoe)) {
													    echo "Sim";
													} else {
													    echo "Não";
													} ?>
								</td>
								<td><a href="/admin/edicoesjomesp/download/{{ $edicao->arquivo }}">dowload</a></td>
								<td><a class="btn btn-default" href="{{ url('/admin/edicoesjomesp') }}/ {{ $edicao->id }}">Editar</a></td>
<td>
<form method="POST"  action="{{ url('/admin/edicoesjomesp/') }}/ {{ $edicao->id }}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="DELETE">
<button class="btn btn-danger">Deletar</button>
</form>
</td>
</tr>
@endforeach


			</tbody>
	</table>



	<button class="btn btn-success" data-toggle="modal" data-target="#novaEdicao">
		Enviar nova edição
	</button>

</div>
{{ $edicoes->render() }}
</div>




<div class="modal fade" id="novaEdicao" role="dialog">
	 <div class="modal-dialog">

		 <!-- Modal content-->
				 <div class="modal-content">
						 <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
								 <h4 class="modal-title">Nova edição</h4>
							 </div>
						 <div class="modal-body">

		 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/admin/edicoesjomesp/')}}">

		 	{{ csrf_field() }}
					<!-- Botão de Arquivo para CPF -->

						<div class="form-group" id="mensagem1">
              <div class="row">
              <label class="col-md-4 control-label" for="edicao">Edição: </label>
              <div class="col-md-4">
                <input id="edicao" name="edicao" class="input" class="input" type="text" placeholder="Ex: 2ª Edição" required>
                <br />
                <br>
                </div>
              </div>
              <div class="row">
						  <label class="col-md-4 control-label" for="edicao">Arquivo: </label>
						  <div class="col-md-4">
						    <input id="arquivo" name="arquivo" class="input-file" type="file">
								<br />
  						  </div>
              </div>
                <div class="row">
               <label class="col-md-4 control-label" for="linkExterno">Link externo: </label>
               <div class="col-md-4">
               <input id="linkexterno" name="linkexterno" class="input" type="text" required>
              <br />
            </div>
          </div>

						</div>
            <button class="btn btn-success" id="botao1">
              Enviar nova Edição
            </button>
		</form>
		</div>

			</div>
			<div class="row">
				<p> {{ $edicoes->links() }} </p>

			</div>
		</div>
	</div>
@endsection
