@extends('admin.dashboard')

@section('titulo', 'Associado')

@section('extrastyle')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('conteudo')

<div class="row">
	<div class="col-md-10">
		<div class="row">
            <center>
                <center>
                     <img src="{{ url('public/files/') }}/{{ $associado->cpf }}/foto.jpg" style = "width: 140px; height: 140px;" class = "img-circle" value="{{ $associado->foto }}">

                    <p>Foto do perfil</p>
                </center>
                <h4><b>Dados pessoais:</b></h4>
                <h4>Nome: {{ $associado->name }} </h4>
                <h4>CPF: {{ $associado->cpf }}</h4>
                <h4>RG: {{ $associado->rg }}</h4>
                <h4>Data de nascimento: {{ $associado->nascimento }}</h4>
                <hr />
                <h4><b>Social:</b></h4>
                <h4>facebook: {{ $associado->facebook }}</h4>
                <h4>linkedin: {{ $associado->linkedin }}</h4>
                <hr />
                <h4><b> Logradouro: </b></h4>
                <h4> Endereço: {{ $associado->endereco }}</h4>
                <h4> Complemento: {{ $associado->complemento }}</h4>
                <h4> CEP: {{ $associado->cep }}</h4>
                <h4> Cidade: {{ $associado->cidade }}</h4>
                <h4> Estado {{ $associado->estado }} </h4>
                <hr />
                <h4><b> Telefones: </b></h4>
                <h4> Telefone residêncial: {{ $associado->tel_residencial }}</h4>
                <h4> Telefone celular: {{ $associado->tel_celular }}</h4>
                <h4> Telefone comercial: {{ $associado->tel_comercial }}</h4>
            </center>
	   </div>
    <br>
    <br>
    <br>
        <div class="row">
      <div class="col-lg-12">
      <center>
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
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/rg.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivorg)) {
                        echo "SIM";
                        $documentacao[0] = 1;
                        } else {
                        echo "Não";
                        $documentacao[0] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/rg.pdf">dowload</a></td>
                  
               </tr>
               <tr>
                  <td><b>CPF:</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cpf.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocpf)) {
                        echo "SIM";
                        $documentacao[1] = 1;
                        } else {
                        echo "Não";
                        $documentacao[1] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cpf.pdf">dowload</a></td>
                  
               </tr>
               <tr>
                  <td><b>CNH:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cnh.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocnh)) {
                        echo "SIM";
                        $documentacao[2] = 1;
                        } else {
                        echo "Não";
                        $documentacao[2] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cnh.pdf">dowload</a></td>
                  
               </tr>
               <tr>
                  <td><b>Comprovante de Endereço:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocnh)) {
                        echo "SIM";
						$documentacao[3] = 1;
                        } else {
						echo "Não";
						$documentacao[3] = 0;
						}
                        ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
                  
               </tr>
            </tbody>
         </table>
         </center>
      </div>
   </div>
   


</div>


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