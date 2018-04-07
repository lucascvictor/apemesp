@extends('admin.dashboard')
@section('titulo', 'Financeiro')
@section('conteudo')
            <form class="form-horizontal" method="POST" action="{{ url('/admin/associado/financeiro') }}/{{ $associado->id_user }}/{{ $associado->ano }}">
               {{ csrf_field() }}
               <fieldset>
                  <legend>Lançamento financeiro</legend>


                  <div class="form-group">
                     <label class="col-md-4 control-label" for="ano">ANO:</label>
                     <div class="col-md-4">
                        <input onkeyup="somenteNumeros(this)" id="ano" name="ano" type="text" placeholder="ANO" class="form-control input-md" required="" value="{{ $associado->ano }}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="status">Status:</label>
                     <div class="col-md-4">
                        <input id="status" name="status" type="text" placeholder=" Status " class="form-control input-md" required="" value="{{ $associado->descricao }}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="arquivoemento">Arquivo:</label>
                     <div class="col-md-4">
                        <input id="arquivoemento" name="arquivoemento" type="text" placeholder="Arquivo" class="form-control input-md">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="arquivoavaliado">Arquivo Avaliado:</label>
                     <div class="col-md-4">
                        <input readonly="true" id="arquivoavaliado" name="arquivoavaliado" type="text" placeholder="Arquivo Avaliado" class="form-control input-md" required="">
                     </div>
                  </div>
                 
               </fieldset>
               <div class="modal-footer col-md-2">
                  <button class="btn btn-success btn-block" type="submit">
                  OK
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection()