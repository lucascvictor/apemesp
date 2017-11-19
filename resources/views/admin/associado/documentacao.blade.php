@extends('admin.dashboard')

@section('titulo', 'Upload da documentação')

@section('extrastyle')


@endsection

@section('conteudo')


<div class="container">

	<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/documentacao')}}">

		{{ csrf_field() }}
			<fieldset>


					<legend>Documentação</legend>
					<!-- Aviso sobre o tipo de arquivo -->
						<div class="form-group">
							<div class="col-md-4"></div>
							  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  	<strong>Por favor.</strong> Carregue os documentos abaixo no formato PDF.
							  </div>
						 </div>

						 <!-- Aviso de prosseguimento -->
	 						<div class="form-group">
	 							<div class="col-md-4"></div>
	 							  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
	 								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 								  	O upload de ao menos um arquivo abaixo é <strong>necessário.</strong>
	 							  </div>
	 						 </div>

					<!-- Botão de Arquivo para CPF -->
						<div class="form-group" id="mensagem1">
						  <label class="col-md-4 control-label" for="filebutton">RG: </label>
						  <div class="col-md-4">
						    <input id="documento1" name="rg" class="input-file" type="file">
						  </div>
						</div>

						<!-- Botão de Arquivo para RG-->
							<div class="form-group" id="mensagem2">
							  <label class="col-md-4 control-label" for="filebutton">CPF: </label>
							  <div class="col-md-4">
							    <input id="documento2" name="cpf" class="input-file" type="file">
							  </div>
							</div>

							<!-- Botão de Arquivo para CNH-->
								<div class="form-group" id="mensagem3">
								  <label class="col-md-4 control-label" for="filebutton">CNH: </label>
								  <div class="col-md-4">
								    <input id="documento3" name="cnh" class="input-file" type="file">
								  </div>
								</div>



			</fieldset>
	</form>



</div>


@endsection


@section('extrascript')

<script type="text/javascript">
	var i = 0;
	$('#documento1').on('change',function () {
            var documento = $(this).val();
            var formato = '';
            var limite = documento.length - 3;
            while(limite < documento.length)
            {
            	formato = formato + documento[limite];
            	limite++;
            }

      		if(formato != 'pdf'){

      			if(i < 1){
      			$("#mensagem1").append('<div id="documentomensagem1" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
      			i++;
      		}
      			$("#documento1").val('');
      		}else{
      			document.getElementById("documentomensagem1").remove();
      		}

        });
				var ii = 0;
				$('#documento2').on('change',function () {

			            var documento2 = $(this).val();
			            var formato2 = '';
			            var limite2 = documento2.length - 3;
			            while(limite2 < documento2.length)
			            {
			            	formato2 = formato2 + documento2[limite2];
			            	limite2++;
			            }

			      		if(formato2 != 'pdf'){

			      			if(ii < 1){
			      			$("#mensagem2").append('<div id="documentomensagem2" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
			      			ii++;
			      		}
			      			$("#documento2").val('');
			      		}else{
			      			document.getElementById("documentomensagem2").remove();
			      		}

			        });
							var iii = 0;
							$('#documento3').on('change',function () {
						            var documento = $(this).val();
						            var formato = '';
						            var limite = documento3.length - 3;
						            while(limite < documento3.length)
						            {
						            	formato = formato + documento[limite];
						            	limite++;
						            }

						      		if(formato != 'pdf'){

						      			if(iii < 1){
						      			$("#mensagem3").append('<div id="documentomensagem3" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
						      			iii++;
						      		}
						      			$("#documento3").val('');
						      		}else{
						      			document.getElementById("documentomensagem3").remove();
						      		}

						        });
</script>

@endsection
