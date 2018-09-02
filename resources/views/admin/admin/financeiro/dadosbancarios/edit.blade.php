

@extends('admin.dashboard')
@section('titulo', 'Dados Bancários')
@section('conteudo')
<div class="row">
<div class="col-md-12">
   <div class="row">
      <div class="col-lg-10">
         <h2>Edição dos dados bancários</h2>

        

         <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ url('/admin/financeiro/dadosbancarios') }}/{{ $dadosbancarios->id}}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Dados Bancários</legend>
                
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Titular:</label>
                     <div class="col-md-4">
                        <input id="banco" name="titular" type="text" placeholder="titular" class="form-control input-md" required="" value="{{ $dadosbancarios->titular}}">
                     </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Documento (CPF/CNPJ):</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)"  id="documento" name="documento" type="text" placeholder="documento" class="form-control input-md" required="" value="{{ $dadosbancarios->documento}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Banco:</label>
                     <div class="col-md-4">
                        <input id="banco" name="banco" type="text" placeholder="banco" class="form-control input-md" required="" value="{{ $dadosbancarios->banco}}">
                     </div>
                  </div>

                    <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Agencia:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="agencia" name="agencia" type="text" placeholder="agencia" class="form-control input-md" required="" value="{{ $dadosbancarios->agencia}}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Conta:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="conta" name="conta" type="text" placeholder="conta" class="form-control input-md" required="" value="{{ $dadosbancarios->conta}}">
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
@endsection


@section('extrascript')

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

@endsection

