


<div class="modal fade" id="japossuo" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Insira abaixo os dados da sua carteirinha atual:</h4>
         </div>
         <div class="modal-body">
                  <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ url('/associado/carteirinha/old') }}">
               {{ csrf_field() }}
               <fieldset>

                 <div class="form-group">
                     <label class="col-md-4 control-label" for="digito">Digito:</label>
                     <div class="col-md-4">
                        <input  id="digito" name="digito" type="number" min=1 max=9 placeholder="Ex.: 1" class="form-control input-md" required="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="numero">Numero:</label>
                     <div class="col-md-4">
                        <input  id="numero" name="numero" type="number"  min="1" max="999999" maxlenght="6" placeholder="Ex.: 010999" class="form-control input-md" required="">
                     </div>
                  </div>
                <input value="{{ Auth::user()->id }}" name="id" type="hidden"/>
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
