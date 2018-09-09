@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
<form class="form-horizontal" action="{{ url('admin/configs/especialidades')}}" method="POST">
        <fieldset>
                <legend>Adicionar Especialidades para Dados Profissionais do Associado</legend>
                 {{ csrf_field() }}
                <!-- Campo Especialidade -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="especialidade">Especialidade:</label>
                      <div class="col-md-4">
                      <input id="especialidade" name="especialidade" type="text" placeholder="Especialidade" class="form-control input-md" required="">
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
</div>
@endsection
