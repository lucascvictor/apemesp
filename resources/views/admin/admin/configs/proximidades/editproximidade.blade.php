@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<form class="form-horizontal" action="{{ url('admin/configs/proximidades/update')}}" method="POST">
        <fieldset>


                <legend>Editar Localização geográfica genérica</legend>

                {{ csrf_field() }}
                <!-- Campo Assunto -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="assunto">Localização:</label>
                      <div class="col-md-4">
                      <input id="id" name="id" type="hidden" value="{{ $proximidade->id }}">
                      <input id="proximidade" name="proximidade" type="text" placeholder="Região" class="form-control input-md" required="" value="{{ $proximidade->localidade }}">
                      </div>
                    </div>


                <!-- Botão -->
                    <div class="form-group">

                      <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
                      </div>
                    </div>


        </fieldset>
</form>


@endsection
