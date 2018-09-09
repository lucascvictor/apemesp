@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<form class="form-horizontal" action="{{ url('admin/configs/escalas/update')}}" method="POST">
        <fieldset>


                <legend>Editar Escala (seleção em dados profissionais dos associados)</legend>

           {{ csrf_field() }}
                <!-- Campo Assunto -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="assunto">Escala:</label>
                      <div class="col-md-4">
                      <input id="id" name="id" type="hidden" value="{{ $escala->id }}">
                      <input id="escala" name="escala" type="text" placeholder="Ex: Segunda a Sexta ou Somente fins de semana" class="form-control input-md" required="" value=" {{ $escala->escala }} ">
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
