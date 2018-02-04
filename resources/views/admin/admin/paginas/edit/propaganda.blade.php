@extends('admin.dashboard')

@section('titulo', 'Editar Propaganda')

@section('extrastyle')

  <script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

@endsection

@section('conteudo')


<form method="POST"  enctype="multipart/form-data" action="{{ url('/admin/paginas/propaganda/') }}/{{ $propaganda[0]->id }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem -->

<br />

    <div class="form-group">
      <label class="col-md-4 control-label" for="img">Imagem Atual: </label>
      <img src="{{ url('/images/propagandas')}}/{{ $propaganda[0]->imagem }}" style="width: 20%; heigth: 25%;">
      <hr>
    </div>
    <div class="form-group" id="mensagem">
      <label class="col-md-4 control-label" for="filebutton">Alterar Imagem: </label>
      <div class="col-md-4">
        <input id="imagem" name="imagem" class="input-file" type="file" required>
      </div>
      <hr>
    </div>
    <br />
  <!-- Campo Titulo -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="titulo">Titulo:</label>
      <div class="col-md-4">
      <input id="titulo" name="titulo" type="text" placeholder="Titulo da Obra ou do Site" class="form-control input-md" required="" value="{{ $propaganda[0]->titulo }}">
      </div>
    </div>
    <br />
    <br /><!-- Campo URL -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="link">Link(URL):</label>
        <div class="col-md-4">
        <input value="{{ $propaganda[0]->link }}" id="link" name="link" type="text" placeholder="Link para acesso ao site do patrocinador" class="form-control input-md" required="">
        </div>
      </div>
      <br />

    <hr>
    <label class="col-md-4 control-label" for="salvar"></label>
    <center class="col-md-1"><button type="submit" id="salvar" class="btn btn-success"> Salvar alteração</button></center>
  </fieldset>
</form>


@endsection


@section('extrascript')

    {!! Html::script('js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>


@endsection
