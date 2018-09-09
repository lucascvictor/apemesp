@extends('admin.dashboard')
@section('titulo', 'Gerenciamento da carteirinha')
@section('extrastyle')
  {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
@endsection
@section('conteudo')

<div class="row">
   <div class="col-md-4">
   </div>
   <div class="col-md-4">
   </div>

</div>
<div class="row">
    <div class="col-md-12">
        @if($carteirinha)
        <h2>Edição dos dados bancários</h2>

        


<form class="form-horizontal" method="POST" action="{{ url('/admin/carteirinhas') }}/{{ $carteirinha->id}}">
   {{ csrf_field() }}
   <fieldset>
      <legend>Dados Bancários</legend>
    
      <div class="form-group">
         <label class="col-md-4 control-label" for="id">Id do usuário:</label>
         <div class="col-md-4">
            <input id="id" name="id" type="text" placeholder="titular" class="form-control input-md" required="" value="{{ $carteirinha->id_user}}" readonly>
         </div>
      </div>

       <div class="form-group">
         <label class="col-md-4 control-label" for="digito">Digito:</label>
         <div class="col-md-4">
            <input id="digito" name="digito" type="numer" placeholder="digito" class="form-control input-md" required="" value="{{ $carteirinha->digito}}">
         </div>
      </div>

      <div class="form-group">
         <label class="col-md-4 control-label" for="numero">Numero:</label>
         <div class="col-md-4">
            <input id="Numero" name="Numero" type="number" placeholder="digito" class="form-control input-md" required="" value="{{ $carteirinha->numero}}">
         </div>
      </div>

        <div class="form-group">
         <label class="col-md-4 control-label" for="agencia">Status:</label>
         <div class="col-md-4">
         <select id="nacionalidade" name="nacionalidade" class="form-control">

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
         <label class="col-md-4 control-label" for="agencia">Já possui:</label>
         <div class="col-md-4">
         <select id="nacionalidade" name="nacionalidade" class="form-control">
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
         <label class="col-md-4 control-label" for="datapedido">Data do pedido:</label>
         <div class="col-md-4">
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="nascimento" data-link-format="yyyy-mm-dd">
                    <input name="datapedido" id="datapedido" class="form-control" type="text" value="{{ $carteirinha->data_pedido }}" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
        </div>
      </div>

      <div class="form-group">
         <label class="col-md-4 control-label" for="dataconfeccao">Data da confecção:</label>
         <div class="col-md-4">
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="nascimento" data-link-format="yyyy-mm-dd">
                    <input name="dataconfeccao" id="dataconfeccao" class="form-control" type="text" value="{{ $carteirinha->data_confeccao }}" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
        </div>
      </div>

      <div class="form-group">
         <label class="col-md-4 control-label" for="dataultimavia">Data da ultima via:</label>
         <div class="col-md-4">
                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="nascimento" data-link-format="yyyy-mm-dd">
                    <input name="dataconfeccao" id="dataconfeccao" class="form-control" type="text" value="{{ $carteirinha->data_ultimavia }}" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
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
         <a class="btn btn-info" href="">Gerar numero para este associado </a>
        @endif
   </div>
</div>
@endsection