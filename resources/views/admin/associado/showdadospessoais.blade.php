@extends('admin.dashboard')

@section('titulo', 'Cadastro e Edição de dados pessoais')


@section('conteudo')


<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/foto', $dadospessoais[0]->cpf )}}">
{{ csrf_field() }}
		<fieldset>


				<legend>Foto</legend>
					<!-- Aviso sobre o tipo de arquivo -->
					<div class="form-group">
					<div class="col-md-4"></div>
					  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Por favor.</strong> Carregue a imagem abaixo no formato JPG.
					  </div>
					 </div>
			<div class="form-group">
				<center>
					 <img src="{{ url('public/files/') }}/{{ $dadospessoais[0]->cpf }}/{{$dadospessoais[0]->foto }}" style = "width: 140px; height: 140px;" class = "img-circle" value="{{ $dadospessoais[0]->foto }}">

          			<p>Foto do perfil</p>
          		</center>

					  <label class="col-md-4 control-label" for="filebutton">Alterar Foto
					  </label>

					  <div class="col-md-4" id="mensagem">
					    <input id="foto" name="foto" class="input-file" type="file">
					  </div>
			</div>

					<div class="form-group">
						<button type="submit" class="btn btn-danger">Alterar</button>
					</div>
		</fieldset>
</form>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/dadospessoais', $dadospessoais[0]->id )}}">

	{{ csrf_field() }}
		<fieldset>


				<legend>Dados Pessoais</legend>

				<!-- Botão de Arquivo -->


				<!-- Campo Nome -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">Nome Completo:</label>
					  <div class="col-md-4">
					  <input id="name" name="name" type="text" placeholder="Nome" class="form-control input-md" required="" value="{{ $dadospessoais[0]->name }}">
					  </div>
					</div>

				<!-- Campo Nascimento -->
					<div class="form-group">

                <label class="col-md-4 control-label" for="nascimento">Data de Nascimento:</label>
                <div class="col-md-4">
               <input name="nascimento" id="nascimento" placeholder="ano-mes-dia" class="form-control" type="date" value="{{ $dadospessoais[0]->nascimento }}">
                   
                </div>
      			  </div>

				<!-- Nascionalidade -->

					<div class="form-group">
					  <label class="col-md-4 control-label" for="nacionalidade">Nacionalidade</label>
					  <div class="col-md-4">
					    <select id="nacionalidade" name="nacionalidade" class="form-control">
					    @foreach($nacionalidades as $nacionalidade)
					      <option
					      <?php if($dadospessoais[0]->id_nacionalidade == $nacionalidade->id)
					      {
					      	echo ("selected");

					      } ?>
					      value="{{ $nacionalidade->id }}">
					      {{ $nacionalidade->nacionalidade }}

					     	</option>
					     @endforeach
					    </select>
					  </div>
					</div>


					<!-- RG -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="rg">RG:</label>
					  <div class="col-md-4">
					  <input id="rg" name="rg" type="text" maxlength="12" placeholder="Registro Geral" class="form-control input-md" required="" value="{{ $dadospessoais[0]->rg }} ">
					  </div>
					</div>

					<!-- CPF -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cpf">CPF:</label>
					  <div class="col-md-4">
					  <input id="cpf" name="cpf" type="number" maxlength="11" placeholder=" CPF " class="form-control input-md" required="" value="{{ $dadospessoais[0]->cpf }}">
					  </div>
					</div>



				<legend>Dados de contato</legend>

				<div class="form-group">
					  <label class="col-md-4 control-label" for="facebook"><span class="fa fa-facebook"></span></label>
					  <div class="col-md-4">

					  <input id="facebook" name="facebook" type="text" placeholder="facebook.com/seuperfil" class="form-control"  value="{{ $dadospessoais[0]->facebook }}">

					  </div>
					</div>


				<!-- CEP -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cep">CEP:</label>
					  <div class="col-md-4">
					  <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="" value="{{ $dadospessoais[0]->cep }}">
					  </div>
					</div>

				<!-- Endereço -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="endereco">Endereço:</label>
					  <div class="col-md-4">
					  <input id="endereco" name="endereco" type="text" placeholder=" Endereço " class="form-control input-md" required="" value="{{ $dadospessoais[0]->endereco }}">
					  </div>
					</div>

				<!-- Complemento -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="complemento">Complemento:</label>
					  <div class="col-md-4">
					  <input id="complemento" name="complemento" type="text" placeholder=" Compl. " class="form-control input-md" value="{{ $dadospessoais[0]->complemento }}">
					  </div>
					</div>



          <!-- Bairro -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">Bairro:</label>
              <div class="col-md-4">
              <input readonly="true" id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md" required="" value="{{ $dadospessoais[0]->bairro }}">
              </div>
            </div>

          <!-- Cidade  -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">Cidade:</label>
              <div class="col-md-4">
              <input readonly="true" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="" value="{{ $cidade[0]->nome }}">
              </div>
            </div>
            <input id="codCidade" name="codCidade" type="hidden" value="{{ $cidade[0]->id }}"> </input>

            <!-- Estado -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="estadoExibicao">Estado:</label>
                <div class="col-md-4">
                <input readonly="true" id="estadoExibicao" name="estadoExibicao" type="text" placeholder="Estado" class="form-control input-md" required=""
                @foreach($estados as $estado)

                 <?php if($dadospessoais[0]->id_estado == $estado->id)
                 {
                   echo ("value=" . '"' . $estado->nome . '"');
                   $idEstado = $estado->id;
                 } ?>

                @endforeach
                 />
                 <input type="hidden" value="{{ $idEstado }}" name="estado" id="estado">
                </div>
              </div>
							
				<legend>Numeros de Telefones</legend>

				<!-- Celular -->
					<div class="form-group">
					 <label class="col-md-4 control-label" for="tel_celular">Tel. Celular</label>
					  <div class="col-md-4">
					    <input id="tel_celular" name="tel_celular" type="number" maxlength="11" class="form-control" value="{{ $dadospessoais[0]->tel_celular }}" required="">

					  </div>
					</div>

				<!-- Residencial -->
					<div class="form-group">
					 <label class="col-md-4 control-label" for="tel_residencial">Tel. Residêncial</label>
					  <div class="col-md-4">
					    <input type="number" id="tel_residencial" name="tel_residencial"  maxlength="11" class="form-control" value="{{ $dadospessoais[0]->tel_residencial }}">
					  </div>
					</div>


				<!-- Botão -->
					<div class="form-group">

					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Atualizar</button>
					  </div>
					</div>


		</fieldset>
</form>





@endsection


@section('extrascript')

<script type="text/javascript">
	var i = 0;
	$('#foto').on('change',function () {
            var foto = $(this).val();
            var formato = '';
            var limite = foto.length - 3;
            while(limite < foto.length)
            {
            	formato = formato + foto[limite];
            	limite++;
            }

      		if(formato != 'jpg'){

      			if(i < 1){
      			$("#mensagem").append('<div id="fotomensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> Esta imagem não é do tipo JPG</div>');
      			i++;
      		}
      			$("#foto").val('');
      		}else{
      			document.getElementById("fotomensagem").remove();
      		}

        });
</script>


<script type = "text/javascript" language = "javascript">
        $('#estado').on('change',function () {
            var idEstado = $(this).val();
            $.get('/associado/ajax/' + idEstado, function (cidades) {
                 $('#cidade').empty();
            var i =0;

                $.each(cidades, function (key, cidade) {

                	var size = cidade.length;
                	while(i < size){
                		$('#cidade').append('<option value=' + cidade[i].id + '>' + cidade[i].nome + '</option>');
                		i++;
                	}

                });
            });
        });
      </script>



       <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");

            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");


                        //Consulta o webservice viacep.com.br/
                        $.getJSON("http://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);

                      		  $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
       </script>

@endsection
