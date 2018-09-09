


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
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/associado/carteirinha/old') }}">
               {{ csrf_field() }}
               <fieldset>

                 <div class="form-group">
                     <label class="col-md-4 control-label" for="ano">Digito:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="digito" name="digito" type="text" placeholder="Ex.: 1" class="form-control input-md" required="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="ano">Numero:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="numero" name="numero" type="text" placeholder="Ex.: 010999" class="form-control input-md" required="">
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
