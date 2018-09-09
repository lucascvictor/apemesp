@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<form class="form-horizontal" enctype="multipart/form-data" action="{{ url('admin/configs/forumassuntos')}}/{{ $assunto->id }}" method="POST">
        <fieldset>


                <legend>Editar Assunto para a página de mensagens</legend>

                 {{ csrf_field() }}

                 <!-- Campo E-mail -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Assunto:</label>
                      <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="E-mail" class="form-control input-md" required="" value="{{ $assunto->name }}">
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
