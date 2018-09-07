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
                     <label class="col-md-4 control-label" for="status">Status Atual:</label>
                     <div class="col-md-4">
                        <input id="status" name="status" type="text" placeholder=" Status " class="form-control input-md" required="" value="{{ $associado->descricao }}">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="arquivoemento">Download do Arquivo:</label>
                     <div class="col-md-4">
                     <a href="/admin/associados/download/{{ $associado->id_user }}/comprovante_{{ $associado->ano }}.pdf">dowload</a>
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-md-4 control-label" for="status">Status da avaliação:</label>
                     <div class="col-md-4">
                     <select id="status" name="status" class="form-control" required="">
                        @foreach($status as $st)
                            <option value="{{ $st->id }}">{{ $st->descricao }}</option>
                        @endforeach
                    </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-4 control-label" for="arquivoemento">Alterar o arquivo:</label>
                     <div class="col-md-4">
                     <input id="comprovante" name="comprovante" class="input-file" type="file" required="">
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