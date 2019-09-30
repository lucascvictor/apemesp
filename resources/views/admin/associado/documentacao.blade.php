@extends('admin.dashboard')

@section('titulo', 'Upload da documentação')

@section('extrastyle')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('conteudo')

<fieldset>
   <legend>Documentação</legend>
   <!-- Aviso sobre o tipo de arquivo -->
   <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Por favor.</strong> Carregue os documentos abaixo no formato PDF.
   </div>
   <!-- Aviso de prosseguimento -->
   <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      O upload de ao menos um arquivo abaixo é <strong>necessário.</strong>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <table class="table table-hover table-striped">
            <thead>
               <tr>
                  <th> </th>
                  <th>Arquivo enviado?</th>
                  <th>Link para Download</th>
                  <th colspan="2"></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><b>RG:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/rg.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivorg)) {
                        echo "SIM";
                        $documentacao[0] = 1;
                        } else {
                        echo "Não";
                        $documentacao[0] = 0;
                        } ?>
                  </td>
                  <td><a href="/associado/download/rg.pdf">dowload</a></td>
                  <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#rgModal">Editar</a></td>
               </tr>
               <tr>
                  <td><b>CPF:</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/cpf.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocpf)) {
                        echo "SIM";
                        $documentacao[1] = 1;
                        } else {
                        echo "Não";
                        $documentacao[1] = 0;
                        } ?>
                  </td>
                  <td><a href="/associado/download/cpf.pdf">dowload</a></td>
                  <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#cpfModal">Editar</a></td>
               </tr>
               <tr>
                  <td><b>CNH:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/cnh.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocnh)) {
                        echo "SIM";
                        $documentacao[2] = 1;
                        } else {
                        echo "Não";
                        $documentacao[2] = 0;
                        } ?>
                  </td>
                  <td><a href="/associado/download/cnh.pdf">dowload</a></td>
                  <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#cnhModal">Editar</a></td>
               </tr>
               <tr>
                  <td><b>Comprovante de Endereço:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/comprovante_e.pdf"; ?>
                  <td>
                     <?php if (file_exists($comprovante_e)) {
                        echo "SIM";
						$documentacao[3] = 1;
                        } else {
						echo "Não";
						$documentacao[3] = 0;
						}
                        ?>
                  </td>
                  <td><a href="/associado/download/comprovante_e.pdf">dowload</a></td>
                  <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#comprovanteModal">Editar</a></td>
               </tr>
            </tbody>
         </table>
         <form  method="post" action="{{ url('/associado/documentacao')}}">
            {{ csrf_field() }}
            <input type="hidden" name="rg" value="{{ $documentacao[0] }}">
            <input type="hidden" name="cpf" value="{{ $documentacao[1] }}">
            <input type="hidden" name="cnh" value="{{ $documentacao[2] }}">
            <input type="hidden" name="comprovante_e" value="">
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
                  <!-- Botão de Arquivo para RG -->
                  <div class="form-group" id="mensagem1">
                     <label class="col-md-4 control-label" for="filebutton">RG: </label>
                     <div class="col-md-4">
                        <input id="documento1" name="rg" class="input-file" type="file" accept=".pdf">
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
                        <input id="documento2" name="cpf" class="input-file" type="file" accept=".pdf">
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
                        <input id="documento3" name="cnh" class="input-file" type="file" accept=".pdf">
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
                  <!-- Botão de Arquivo para comprovante_e-->
                  <div class="form-group" id="mensagem3">
                     <label class="col-md-4 control-label" for="filebutton">Comprovante: </label>
                     <div class="col-md-4">
                        <input id="comprovante_e" name="comprovante_e" class="input-file" type="file" accept=".pdf">
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
						            var documento3 = $(this).val();
						            var formato3 = '';
						            var limite3 = documento3.length - 3;
						            while(limite3 < documento3.length)
						            {
						            	formato3 = formato3 + documento3[limite];
						            	limite3++;
						            }

						      		if(formato3 != 'pdf'){

						      			if(iii < 1){
						      			$("#mensagem3").append('<div id="documentomensagem3" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
						      			iii++;
						      		}
						      			$("#documento3").val('');
						      		}else{
						      			document.getElementById("documentomensagem3").remove();
						      		}

						        });

										var iv = 0;
										$('#documento4').on('change',function () {
									            var documento4 = $(this).val();
									            var formato4 = '';
									            var limite4 = documento4.length - 3;
									            while(limite4 < documento4.length)
									            {
									            	formato4 = formato4 + documento4[limite4];
									            	limite4++;
									            }

									      		if(formato4 != 'pdf'){

									      			if(iv < 1){
									      			$("#mensagem4").append('<div id="documentomensagem4" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
									      			iv++;
									      		}
									      			$("#documento4").val('');
									      		}else{
									      			document.getElementById("documentomensagem4").remove();
									      		}

									        });



</script>





@endsection
