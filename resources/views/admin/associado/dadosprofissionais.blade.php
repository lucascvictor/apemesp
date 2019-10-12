
@extends('admin.dashboard')
@section('titulo', 'Manutenção de dados profissionais')
@section('conteudo')
<legend>Dados Profissionais Cadastrados</legend>
<div class="row">
   <div class="col-md-12">
      <table class="table table-hover table-striped">
         <thead>
            <tr>
               <th>Endereço</th>
               <th>Localização</th>
               <th>Telefone</th>
               <th colspan="2"></th>
            </tr>
         </thead>
         <tbody>
            @foreach($dados as $dado)
            <tr>
               <td>{{ $dado->endereco }}</td>
               @foreach($proximidades as $proximidade)
               @if($dado->id_proximidade == $proximidade->id) 
               <td>{{ $proximidade->localidade }}</td>
               @endif
               @endforeach
               <td>{{ $dado->telefone }}</td>
               <td><a class="btn btn-default" href="{{ url('/associado/dadosprofissionais/edit/') }}/{{ $dado->id }}">Editar</a></td>
               <td><a class="btn btn-primary" href="{{ url('/associado/dadosprofissionais/') }}/{{ $dado->id }}">Visualizar Dados Profissionais</a></td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
<div class="row">
   <p> {{ $dados->render() }}</p>
</div>
<div class="row" style="margin-top: 20%;">
   <div class="col-md-3">
      <a class="btn btn-success btn-block" href="" data-toggle="modal" data-target="#CadastroModal">Adicionar novos dados profissionais</a>
      <a href="" data-toggle="modal" data-target="#myModal">Sua especialidade não está listada? Clique aqui </a>
   </div>
   <div class="col-md-3">
      <a class="btn btn-info btn-block" href="" data-toggle="modal" data-target="#Atendimento">Não realizo atendimentos no momento</a>
   </div>
   @if($dados[0]) 
      <!-- Grupo exibido apenas se um ou mais cadastros existirem-->
      <fieldset style="margin: 20px;">
         <legend>Exibição de dados profissionais</legend>
         <!-- Campo Nome -->
         <div class="form-group">
            <label class="col-md-12 control-label" for="name">Deseja permitir a exibição de seus dados profissionais?</label>  
            <div class="col-md-4">
            <form method="post" action="{{ url('/admin/perfil/alteraropcaoprofissional')}}">
            {{ csrf_field() }}
               <select class="form-control form-control-lg" name="opcaoProfissional">
               <option @if(Auth::user()->opcao_dados_profissionais == 2) selected @endif value="2">Sim</option>
               <option @if(Auth::user()->opcao_dados_profissionais == 1) selected @endif value="1">Não</option>
               </select>
               <br />
               <button class="btn btn-warning" type="submit"> Confirmar</button>
            </form>
            </div>
         </div>
      </fieldset>
   @endif
</div>
<div class="modal fade" id="Atendimento" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Condições para esta opção</h4>
         </div>
         <div class="modal-body">
            <legend>Optante por não realização de atendimentos momentaneamente</legend>
            <p> 1- Seus dados não serão exibidos na busca de musicoterapeutas</p>
            <p> 2- Não será possível cadastrar dados profisionais até que esta ação seja desfeita</p>
            <p> 3- Para que esta ação seja desfeita, por favor acesse as confirgurações do seu perfil</p>
            <br />
         </div>
         <div class="modal-footer">
            <button class="btn btn-danger btn-block" data-dismiss="modal">
            Cancelar
            </button>
            <a href="{{ url('/associado/dadosprofissionais/atendimento') }}" class="btn btn-success btn-block">
            Concordo
            </a>
         </div>
      </div>
   </div>
</div>
@include('admin.associado.dadosprofissionais.especialidademodal')
<div class="modal fade" id="CadastroModal" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Adicionar dados profissionais</h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ url('/associado/dadosprofissionais') }}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Dados Profissionais</legend>
                  <center>
                     <h4> Dados comerciais</h4>
                  </center>
                  <!-- CEP -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="cep">CEP:</label>
                     <div class="col-md-4">
                        <input  id="cep" name="cep" type="number" placeholder="CEP" class="form-control input-md" required="">
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
                  <!-- Especialidades -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="especialidade">Especialidade de atendimento:</label>
                     <div class="col-md-4">
                        <select id="especialidade" name="especialidade" class="form-control">
                           @foreach($especialidades as $especialidade)
                           <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <!-- Campo LinkedIn -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span> / Site para contato</label>
                     <div class="col-md-4">
                        <input id="linkedin" name="linkedin" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" >
                     </div>
                  </div>
                  <!-- Campo E-mail -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="email">E-mail para contato neste local.</label>
                     <div class="col-md-4">
                        <input id="email" name="email" type="email" placeholder="endereco@provedor.com" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Campo Telefone -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="telefone">Telefone para atendimento</label>
                     <div class="col-md-4">
                        <input  id="telefone" name="telefone" type="number" placeholder="Somente numeros" class="form-control input-md" required="">
                     </div>
                  </div>
                  <!-- Dias de atendimento -->
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="dias_atendimento">Dias de atendimento</label>
                     <div class="col-md-4">
                        <select id="dias_atendimento" name="dias_atendimento" class="form-control">
                           @foreach($escalas as $escala)
                           <option value="{{ $escala->id }}">{{ $escala->escala }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </fieldset>
               <div class="modal-footer">
                  <button class="btn btn-success btn-block" type="submit">
                  OK
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
@section('extrascript')

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

