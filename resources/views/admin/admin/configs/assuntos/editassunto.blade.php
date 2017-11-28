@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<form class="form-horizontal" action="{{ url('admin/configs/assuntos')}}/{{ $assunto[0]->id }}" method="POST">
        <fieldset>


                <legend>Adicionar Assunto para a página de mensagens</legend>

                 {{ csrf_field() }}
                <!-- Campo Assunto -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="assunto">Assunto:</label>
                      <div class="col-md-4">
                      <input id="assunto" name="assunto" type="text" placeholder="Assunto" class="form-control input-md" required="" value="{{ $assunto[0]->assunto }}">
                      </div>
                    </div>

                 <!-- Campo E-mail -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">E-mail:</label>
                      <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="" value="{{ $assunto[0]->email }}">
                      </div>
                    </div>



                <!-- Botão -->
                    <div class="form-group">

                      <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar Alterações</button>
                      </div>
                    </div>


        </fieldset>
</form>


@endsection
