@extends('admin.dashboard')

@section('titulo', 'Cadastro de dados profissionais')

@section('conteudo')


<legend>Dados Profissionais Cadastrados</legend>

<form class="form-horizontal">

   <fieldset>


       <center> <h4> Dados comerciais</h4> </center>
       <!-- CEP -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="cep">CEP:</label>
           <div class="col-md-4">
           <input readonly="true" id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" value="{{ $dados[0]->cep }}">
           </div>
         </div>

       <!-- Endereço Comercial-->
         <div class="form-group">
           <label class="col-md-4 control-label" for="endereco">Endereço:</label>
           <div class="col-md-4">
           <input readonly="true" id="endereco" name="endereco" type="text" placeholder=" Endereço " class="form-control input-md" value="{{ $dados[0]->endereco}}">
           </div>
         </div>

       <!-- Complemento -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="complemento">Complemento:</label>
           <div class="col-md-4">
           <input readonly="true" id="complemento" name="complemento" type="text" placeholder=" Compl. " class="form-control input-md" value="{{ $dados[0]->complemento}}">
           </div>
         </div>

       <!-- Bairro -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="bairro">Bairro:</label>
           <div class="col-md-4">
           <input readonly="true" id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md" value="{{ $dados[0]->bairro}}">
           </div>
         </div>

       <!-- Cidade  -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="cidade">Cidade:</label>
           <div class="col-md-4">
           <input readonly="true" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" value="{{ $dados[0]->cidade }}">
           </div>
         </div>
         <input id="codCidade" name="codCidade" type="hidden"> </input>

         <!-- Estado -->
           <div class="form-group">
             <label class="col-md-4 control-label" for="estado">Estado:</label>
             <div class="col-md-4">
             <input readonly="true" id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" value="{{ $dados[0]->estado }}">
             </div>
           </div>



       <!--área de atuação geográfica -->
       <div class="form-group">
                      <label class="col-md-4 control-label" for="proximidade">Localização:</label>
                      <div class="col-md-4">
                        <p id="proximidade" name="proximidade" class="form-contol" >
                        @foreach($proximidades as $proximidade)
                          @if($proximidade->id == $dados[0]->id_proximidade)
                            {{ $proximidade->localidade }}
                          @endif
                        @endforeach
                      </p>

                     </div>
        </div>

       <!-- Especialidades -->
       <div class="form-group">
         <label class="col-md-4 control-label" for="especialidade">Especialidade de atendimento:</label>
         <div class="col-md-4">
           <p id="especialidade" name="especialidade" class="form-contol" >
           @foreach($especialidades as $especialidade)
             @if($especialidade->id == $dados[0]->id_especialidade)
               {{ $especialidade->nome }}
             @endif
           @endforeach
         </p>

         </div>
       </div>

          <!-- Campo LinkedIn -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="linkedin"><span class="fa fa-linkedin"></span></label>
           <div class="col-md-4">
             <input readonly="" id="linkedin" name="linkedin" type="text" placeholder="http://linkedin.com/in/seuperfil" class="form-control input-md" value="{{ $dados[0]->linkedin }}">
           </div>
         </div>

         <!-- Campo Telefone -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="telefone">Telefone para atendimento</label>
           <div class="col-md-4">
             <input readonly="" onkeyup="somenteNumeros(this)" id="telefone" name="telefone" type="text" placeholder="Somente numeros" class="form-control input-md" value="{{ $dados[0]->telefone }}">
           </div>
         </div>

         <!-- Dias de atendimento -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="dias_atendimento">Dias de atendimento</label>
           <div class="col-md-4">

             <p id="dias_atendimento" name="dias_atendimento" class="form-control">
               @foreach($escalas as $escala)
                 @if($escala->id == $dados[0]->id_dias_atendimento) {{ $escala->escala }} @endif
               @endforeach

            </p>
           </div>
         </div>

   </fieldset>
   <div class="modal-footer">
     <a class="btn btn-info" href="{{ url('/associado/dadosprofissionais/edit/') }}/{{ $dados[0]->id }}">Editar</a>
     <a class="btn btn-danger" href="{{ url('/associado/dadosprofissionais/edit/') }}/{{ $dados[0]->id }}">Excluir</a>
  </div>
</form>

@endsection
