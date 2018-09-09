<!-- Novos dadaso -->

<div class="modal fade" id="novosDados" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Informações transacionais </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ url('/admin/financeiro/dadosbancarios') }}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Dados Bancários</legend>
                
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Titular:</label>
                     <div class="col-md-4">
                        <input id="banco" name="titular" type="text" placeholder="titular" class="form-control input-md" required="">
                     </div>
                  </div>

                   <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Documento (CPF/CNPJ):</label>
                     <div class="col-md-4">
                        <input   id="documento" name="documento" type="number" placeholder="documento" class="form-control input-md" required="">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="banco">Banco:</label>
                     <div class="col-md-4">
                        <input id="banco" name="banco" type="text" placeholder="banco" class="form-control input-md" required="">
                     </div>
                  </div>

                    <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Agencia:</label>
                     <div class="col-md-4">
                        <input  id="agencia" name="agencia" type="number" placeholder="agencia" class="form-control input-md" required="">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="agencia">Conta:</label>
                     <div class="col-md-4">
                        <input  id="conta" name="conta" type="number" placeholder="conta" class="form-control input-md" required="">
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
