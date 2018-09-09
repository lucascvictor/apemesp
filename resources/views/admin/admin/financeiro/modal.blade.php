<div class="modal fade" id="lancFinanceiro" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Adicionar lançamento financeiro para o associado </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/admin/financeiro/anuidade') }}">
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
                     <label class="col-md-4 control-label" for="status">Status:</label>
                     <div class="col-md-4">
                     <select id="status" name="status" class="form-control" required="">
                        @foreach($status as $st)
                            <option value="{{ $st->id }}">{{ $st->descricao }}</option>
                        @endforeach
                    </select>
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="comprovante">Comprovante de pagamento:</label>
                     <div class="col-md-4">
                        <input id="comprovante" name="comprovante" class="input-file" type="file" required="" class="form-control input-md" >
                     </div>
                  </div>
 
                  <input id="id" name="id" type="hidden" value="{{ $id_user }}">
                 
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