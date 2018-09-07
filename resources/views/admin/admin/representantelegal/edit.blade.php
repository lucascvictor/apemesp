

@extends('admin.dashboard')
@section('titulo', 'Representante Legal')
@section('conteudo')
<div class="row">
   <div class="col-lg-10">
      <h2>Dados do representante</h2>
      <h5>Os dados abaixo serão exibidos no certificado de cada associado.</h5>
      <h5>Como o responsável legal é alterado periódicamente, somente um cadastro é permitido.</h5>
      <h5>Edite os dados para alterar o representante legal.</h5>
      <div class="row">
<div class="col-md-12">
   <div class="row">
      <div class="col-lg-10">
         <h2>Edição dos dados do representante legal</h2>

            <form class="form-horizontal" method="POST" action="{{ url('/admin/financeiro/representanteLegal') }}/{{ $representanteLegal->id}}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Dados do Representante</legend>
                
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="nome">Nome Completo:</label>
                     <div class="col-md-4">
                        <input id="nome" name="titular" type="text" placeholder="nome" class="form-control input-md" required="" value="{{ $representanteLegal->nome }}">
                     </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-4 control-label" for="endereco">Endereço:</label>
                     <div class="col-md-4">
                        <input id="endereco" name="cenderecoonta" type="text" placeholder="endereco" class="form-control input-md" required="" value="{{ $representanteLegal->endereco}}">
                     </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-4 control-label" for="estado_civil">Estado Civil:</label>
                     <div class="col-md-4">
                        <input  id="estado_civil" name="estado_civil" type="text" placeholder="estado civil" class="form-control input-md" required="" value="{{ $representanteLegal->estado_civil}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Profissão:</label>
                     <div class="col-md-4">
                        <input id="profissao" name="profissao" type="text" placeholder="profissao" class="form-control input-md" required="" value="{{ $representanteLegal->profissao}}">
                     </div>
                  </div>

                    <div class="form-group">
                     <label class="col-md-4 control-label" for="rg">Documento 1 (RG):</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="rg" name="rg" type="text" placeholder="rg" class="form-control input-md" required="" value="{{ $representanteLegal->rg}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Documento 2 (CPF):</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="cpf" name="cpf" type="text" placeholder="cpf" class="form-control input-md" required="" value="{{ $representanteLegal->cpf}}">
                     </div>
                  </div>              
                 
               </fieldset>
               <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                  Salvar Alterações
                  </button>
               </div>
            </form>



        
      </div>
   </div>
    </div>
</div>
   </div>
</div>
</div>
</div>
@endsection

