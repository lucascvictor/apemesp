

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
         <h2>Edição dos dados bancários</h2>

        


            <form class="form-horizontal" method="POST" action="{{ url('/admin/financeiro/representanteLegal') }}/{{ $representanteLegal->id}}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Dados Bancários</legend>
                
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Titular:</label>
                     <div class="col-md-4">
                        <input id="banco" name="titular" type="text" placeholder="titular" class="form-control input-md" required="" value="{{ $representanteLegal->titular }}">
                     </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Documento (CPF/CNPJ):</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)"  id="documento" name="documento" type="text" placeholder="documento" class="form-control input-md" required="" value="{{ $representanteLegal->documento}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Banco:</label>
                     <div class="col-md-4">
                        <input id="banco" name="banco" type="text" placeholder="banco" class="form-control input-md" required="" value="{{ $representanteLegal->banco}}">
                     </div>
                  </div>

                    <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Agencia:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="agencia" name="agencia" type="text" placeholder="agencia" class="form-control input-md" required="" value="{{ $representanteLegal->agencia}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Conta:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="conta" name="conta" type="text" placeholder="conta" class="form-control input-md" required="" value="{{ $representanteLegal->conta}}">
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

