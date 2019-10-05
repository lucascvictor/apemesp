@extends('admin.dashboard')
@section('titulo', 'Gerenciamento da carteirinha')
@section('conteudo')
<div class="row">
   <div class="col-md-4">
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      @if($carteirinha)
      <h2>Edição da carteirinha</h2>
      <form class="form-horizontal" method="POST" action="{{ url('/admin/carteirinhas') }}/{{ $carteirinha->id}}">
         {{ csrf_field() }}
         <fieldset>
            <div class="form-group">
               <label class="col-md-4 control-label" for="id">Id do usuário:</label>
               <div class="col-md-4">
                  <input id="id" name="id" type="text" placeholder="titular" class="form-control input-md" required="" value="{{ $carteirinha->id_user}}" readonly>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="digito">Digito:</label>
               <div class="col-md-4">
                  <input id="digito" name="digito" type="numer" placeholder="digito" class="form-control input-md" required="" value="{{ $carteirinha->digito}}" maxlength="2" max="99">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="numero">Numero:</label>
               <div class="col-md-4">
                  <input id="numero" name="numero" type="number" placeholder="numero" class="form-control input-md" required="" value="{{ $carteirinha->numero}}" maxlength="10" max="9999999999">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="status">Status:</label>
               <div class="col-md-4">
                  <select id="status" name="status" class="form-control">
                    <option value="1" @if($carteirinha->status == 1) selected @endif>
                    Pedido de confecção
                    </option>
                    <option value="2" @if($carteirinha->status == 2) selected @endif>
                    Confecção realizada
                    </option>
                    <option value="3" @if($carteirinha->status == 3) selected @endif>
                    Envio da carteirinha
                    </option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="japossui">Já possui:</label>
               <div class="col-md-4">
                  <select id="japossui" name="japossui" class="form-control">
                    <option value="1" @if($carteirinha->japossui == 1) selected @endif>
                    Sim
                    </option>
                    <option value="2" @if($carteirinha->japossui == 2) selected @endif>
                    Não
                    </option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="data_pedido">Data do pedido:</label>
               <div class="col-md-4">
                  <input name="data_pedido" id="data_pedido" class="form-control" type="date" value="{{ $carteirinha->data_pedido }}">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="data_confeccao">Data da confecção:</label>
               <div class="col-md-4">
                  <input name="data_confeccao" id="data_confeccao" class="form-control" type="date" value="{{ $carteirinha->data_confeccao }}" >
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="data_ultimavia">Data da ultima via:</label>
               <div class="col-md-4">
                  <input name="data_ultimavia" id="data_ultimavia" class="form-control" type="date" value="{{ $carteirinha->data_ultimavia }}">
               </div>
            </div>
            <div class="form-group">
               <label class="col-md-4 control-label" for="observacao">Observações:</label>
               <div class="col-md-4">
                  <textarea name="observacao" id="observacao" class="form-control" >{{ $carteirinha->observacao }} </textarea>
               </div>
            </div>
         </fieldset>
         <div class="modal-footer">
            <button class="btn btn-success" type="submit">
            Salvar Alterações
            </button>
         </div>
      </form>
      @else
      <form class="form-horizontal" method="GET" action="/admin/carteirinhas/gerarnumero/">
        {{ csrf_field() }}
        <input type="hidden" id="id" name="id" value="{{ $id_user }}">
            <button class="btn btn-info">
            Gerar numero para este associado
            </button>
      </form>
      @endif
   </div>
</div>
@endsection