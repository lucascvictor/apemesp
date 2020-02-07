@extends('admin.dashboard')

@section('titulo', 'Adicionar Item para a Linha do Tempo')

@section('conteudo')

@section('extrastyle')

  <script src="http://apemesp.com.br/public/ckeditor/ckeditor.js "></script>

@endsection

<form method="POST"  enctype="multipart/form-data" action="{{ url('/admin/paginas/linhadotempo/') }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Adicionar item</legend>
  <!-- Botão de Arquivo para Imagem -->

<br />

    <div class="form-group">
      <label class="col-md-4 control-label" for="ano">Ano: </label>
      <input type="number" name="ano" id="ano" \>
      <hr>
    </div>
  <!-- Campo Acontecimentos -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="acontecimentos">Acontecimentos:</label>
      <div class="col-md-12">
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
    <div class="row">
    <label class="col-md-4 control-label" for="salvar"></label>
    <center class="col-md-4"><button type="submit" id="salvar" class="btn btn-success"> Salvar Linha do Tempo</button></center>
    </div>
  </fieldset>
</form>

@endsection


@section('extrascript')

    {!! Html::script('public/js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'acontecimentos', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>

@endsection
