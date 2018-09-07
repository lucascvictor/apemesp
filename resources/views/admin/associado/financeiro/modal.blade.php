<div class="modal fade" id="lancFinanceiro" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Adicionar lançamento financeiro para o associado </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/associado/financeiro') }}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Lançamento financeiro</legend>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="ano">ANO:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="ano" name="ano" type="text" placeholder="ANO" class="form-control input-md" required="">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="arquivoemento">Arquivo:</label>
                     <div class="col-md-4">
                      <input id="comprovante" name="comprovante" class="input-file" type="file" required="">
                      <p> O comprovante de pagamento da anuidade pode ser enviado nos formatos pdf ou jpg</p>
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


<div class="modal fade" id="dadosBancarios" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Dados bancários para transações</h4>
         </div>
         <div class="modal-body">
            
                 @foreach($dadosbancarios as $dadobancario)
                    <p><b>Titular:</b> {{ $dadobancario->titular }} </p>
                    <p><b>Banco:</b>  {{ $dadobancario->banco }} </p>
                    <p><b>Agencia:</b>  {{ $dadobancario->agencia }} </p>
                    <p><b>Conta:</b>  {{ $dadobancario->conta }} </p>
                    <p><b>CNPJ/CPF:</b>  {{ $dadobancario->documento }} </p>
                    <hr>
                 @endforeach
              
               <div class="modal-footer">
                  <button class="btn btn-success btn-block" data-dismiss="modal" type="button">
                  OK
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>