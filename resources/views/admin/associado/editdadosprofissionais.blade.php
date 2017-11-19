@extends('admin.dashboard')

@section('titulo', 'Cadastro de dados profissionais')

@section('conteudo')


<legend>Dados Profissionais Cadastrados</legend>

<form class="form-horizontal" method="POST" action="{{ url('/associado/dadosprofissionais') }}/{{ $dados[0]->id }}">
 {{ csrf_field() }}
   <fieldset>


       <center> <h4> Dados comerciais</h4> </center>
       <!-- CEP -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="cep">CEP:</label>
           <div class="col-md-4">
           <input onkeyup="somenteNumeros(this)" id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="" value="{{ $dados[0]->cep }}">
           </div>
         </div>

       <!-- Endereço Comercial-->
         <div class="form-group">
           <label class="col-md-4 control-label" for="endereco">Endereço:</label>
           <div class="col-md-4">
           <input id="endereco" name="endereco" type="text" placeholder=" Endereço " class="form-control input-md" required="" value="{{ $dados[0]->endereco }}">
           </div>
         </div>

       <!-- Complemento -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="complemento">Complemento:</label>
           <div class="col-md-4">
           <input id="complemento" name="complemento" type="text" placeholder=" Compl. " class="form-control input-md" value="{{ $dados[0]->complemento }}">
           </div>
         </div>

       <!-- Bairro -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="bairro">Bairro:</label>
           <div class="col-md-4">
           <input readonly="true" id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md" required="" value="{{ $dados[0]->bairro }}">
           </div>
         </div>

       <!-- Cidade  -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="cidade">Cidade:</label>
           <div class="col-md-4">
           <input readonly="true" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="" value="{{ $dados[0]->cidade }}">
           </div>
         </div>
         <input id="codCidade" name="codCidade" type="hidden" value="{{ $dados[0]->id_cidade }}"> </input>

         <!-- Estado -->
           <div class="form-group">
             <label class="col-md-4 control-label" for="estado">Estado:</label>
             <div class="col-md-4">
             <input readonly="true" id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="" value="{{ $dados[0]->estado }}">
             </div>
           </div>



       <!--área de atuação geográfica -->
       <div class="form-group">
                      <label class="col-md-4 control-label" for="proximidade">Localização:</label>
                      <div class="col-md-4">
                        <select id="proximidade" name="proximidade" class="form-control">
                        @foreach($proximidades as $proximidade)
                          <option value="{{ $proximidade->id }}" @if($proximidade->id == $dados[0]->id_proximidade) selected @endif>{{ $proximidade->localidade }}</option>
                        @endforeach
                       </select>
                       <p>Este campo será utilizado para filtrar sua localização em buscas da página "Encontre um M.T."</p>
                     </div>
        </div>

       <!-- Especialidades -->
       <div class="form-group">
         <label class="col-md-4 control-label" for="especialidade">Especialidade de atendimento:</label>
         <div class="col-md-4">
           <select id="especialidade" name="especialidade" class="form-control">
             @foreach($especialidades as $especialidade)
               <option value="{{ $especialidade->id }}" @if($especialidade->id == $dados[0]->id_especialidade) selected @endif>{{ $especialidade->nome }}</option>
             @endforeach
          </select>

         </div>
       </div>

          <!-- Campo LinkedIn -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span> / Site para contato</label>
           <div class="col-md-4">
             <input id="linkedin" name="linkedin" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" value="{{ $dados[0]->linkedin }}">
           </div>
         </div>

         <!-- Campo Telefone -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="telefone">Telefone para atendimento</label>
           <div class="col-md-4">
             <input onkeyup="somenteNumeros(this)" id="telefone" name="telefone" type="text" placeholder="Somente numeros" class="form-control input-md" required="" value="{{ $dados[0]->telefone }}">
           </div>
         </div>

         <!-- Dias de atendimento -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="dias_atendimento">Dias de atendimento</label>
           <div class="col-md-4">

             <select id="dias_atendimento" name="dias_atendimento" class="form-control">
               @foreach($escalas as $escala)
                 <option value="{{ $escala->id }}" @if($escala->id == $dados[0]->id_dias_atendimento) selected @endif>{{ $escala->escala }}</option>
               @endforeach

            </select>
           </div>
         </div>

   </fieldset>
   <div class="modal-footer col-md-4">
      <button class="btn btn-success btn-block">
        Salvar Alterações
      </button>
  </div>
</form>

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
