@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')




<form class="form-horizontal" method="POST" action="{{ url('/dadosprofissionais') }}">
		<fieldset>
				<legend>Dados Profissionais</legend>

				<center> <h4> Dados comerciais</h4> </center>
				<!-- CEP -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cep">CEP:</label>
					  <div class="col-md-4">
					  <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Endereço Comercial-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="endereco">Endereço:</label>
					  <div class="col-md-4">
					  <input id="endereco" name="endereco" type="text" placeholder=" Endereço " class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Complemento -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="complemento">Complemento:</label>
					  <div class="col-md-4">
					  <input id="complemento" name="complemento" type="text" placeholder=" Compl. " class="form-control input-md">
					  </div>
					</div>

				<!-- Bairro -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="bairro">Bairro:</label>
					  <div class="col-md-4">
					  <input readonly="true" id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Cidade  -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cidade">Cidade:</label>
					  <div class="col-md-4">
					  <input readonly="true" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">
					  </div>
					</div>
					<input id="codCidade" name="codCidade" type="hidden"> </input>

					<!-- Estado -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="estado">Estado:</label>
						  <div class="col-md-4">
						  <input readonly="true" id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="">
						  </div>
						</div>



				<!--área de atuação geográfica -->
				<div class="form-group">
											 <label class="col-md-4 control-label" for="proximidade">Localização:</label>
											 <div class="col-md-4">
												 <select id="proximidade" name="proximidade" class="form-control">
												 @foreach($proximidades as $proximidade)
													 <option value="{{ $proximidade->id }}">{{ $proximidade->localidade }}</option>
												 @endforeach
												</select>
												<p>Este campo será utilizado para filtrar sua localização em buscas da página "Encontre um M.T."</p>
											</div>
				 </div>

				<!-- Categorias -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="especialidade">Especialidade de atendimento:</label>
					<div class="col-md-4">
						<select id="assunto" name="assunto" class="form-control">
							@foreach($especialidades as $especialidade)
								<option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
							@endforeach
					 </select>
					 <a href="" data-toggle="modal" data-target="#myModal">Sua especialidade não está listatada? Clique aqui </a>


					</div>
      	</div>

          <!-- Campo LinkedIn -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span></label>
					  <div class="col-md-4">
					  	<input id="linkedin" name="linkedin" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" required="">
					  </div>
					</div>

					<!-- Campo Telefone -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="telefone">Telefone para atendimento</label>
					  <div class="col-md-4">
					  	<input onkeyup="somenteNumeros(this)"id="telefone" name="telefone" type="text" placeholder="Somente numeros" class="form-control input-md" required="">
					  </div>
					</div>

					<!-- Dias de atendimento -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="dias_atendimento">Dias de atendimento</label>
					  <div class="col-md-4">
							<select id="dias_atendimento" name="dias_atendimento" class="form-control">
								@foreach($escalas as $escala)
									<option value="{{ $escala->id }}">{{ $escala->nome }}</option>
								@endforeach
						 </select>
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

<div class="modal fade" id="myModal" role="dialog">
		 <div class="modal-dialog">

			 <!-- Modal content-->
					 <div class="modal-content">
							 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>
									 <h4 class="modal-title">Adicionar especialidade</h4>
								 </div>
							 <div class="modal-body">
								 <form class="form-horizontal" method="POST" action="{{ url('associado/dadosprofissionais/especialidade')}}">

									{{ csrf_field() }}
									 <legend>Digite abaixo a sua especialidade</legend>
									 <input class="col-md-10" name="especialidade" id="especialidade" type="text">
									 <br />
									 </div>
								 		<div class="modal-footer">
											 <button class="btn btn-success btn-block">
												 OK
											 </button>
									 </div>
							 </form>

					 </div>

		 </div>
</div>

@endsection

@section('extrascript')

<!--validar o campo somente numeros -->
<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

 <!-- Adicionando Javascript para busca de CEP -->
<script type="text/javascript" >

	$(document).ready(function() {

			function limpa_formulário_cep() {
					// Limpa valores do formulário de cep.
					$("#endereco").val("");
					$("#bairro").val("");
					$("#cidade").val("");
					$("#estado").val("");
					$("#codCidade").val("");
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
									$("#codCidade").val("...");

									//Consulta o webservice viacep.com.br/
									$.getJSON("http://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

											if (!("erro" in dados)) {
													//Atualiza os campos com os valores da consulta.
													$("#endereco").val(dados.logradouro);
													$("#bairro").val(dados.bairro);
													$("#cidade").val(dados.localidade);
													$("#estado").val(dados.uf);
													$("#codCidade").val(dados.ibge);
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
