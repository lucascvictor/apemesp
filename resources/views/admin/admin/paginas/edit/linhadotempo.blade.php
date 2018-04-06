@extends('admin.dashboard')

@section('titulo', 'Editar Linha do Tempo')

@section('conteudo')


<form method="POST"  action="{{ url('/admin/paginas/linhadotempo/') }}/{{ $linhadotempo->id }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem -->

<br />

    <div class="form-group">
      <label class="col-md-4 control-label" for="img">Ano: </label>
      <input type="text" value="{{ $linhadotempo->ano }}" \>
      <hr>
    </div>
  <!-- Campo Acontecimentos -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="descricao">Acontecimentos:</label>
      <div class="col-md-6">
        {{ Form::label('acontecimentos', 'Acontecimentos:') }}
        {{ Form::textarea('acontecimentos', $linhadotempo->acontecimento, array('class' => 'form-control input-md',
        'id' => 'acontecimentos',
        'name' => 'acontecimentos',
        'placeholder' => 'Acontecimentos deste ano',
        'cols' => '30',
        'required' => '',
        )) }}
      </div>
    </div>
    <br />

    <hr>
    <label class="col-md-4 control-label" for="salvar"></label>
    <center class="col-md-1"><button type="submit" id="salvar" class="btn btn-success"> Salvar Linha do Tempo</button></center>
  </fieldset>
</form>


@endsection


