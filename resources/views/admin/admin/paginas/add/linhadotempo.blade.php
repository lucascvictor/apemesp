@extends('admin.dashboard')

@section('titulo', 'Adicionar Item para a Linha do Tempo')

@section('conteudo')


<form method="POST"  action="{{ url('/admin/paginas/linhadotempo/') }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem -->

<br />

    <div class="form-group">
      <label class="col-md-4 control-label" for="ano">Ano: </label>
      <input type="text" name="ano" id="ano"\>
      <hr>
    </div>
  <!-- Campo Acontecimentos -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="acontecimentos">Acontecimentos:</label>
      <div class="col-md-6">

        {{ Form::textarea('acontecimentos', '', array('class' => 'form-control input-md',
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


