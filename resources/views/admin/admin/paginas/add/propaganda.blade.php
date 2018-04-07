@extends('admin.dashboard')

@section('titulo', 'Adicionar Propaganda')

@section('extrastyle')

  <script src="http://apemesp.com/public/ckeditor/ckeditor.js "></script>

@endsection

@section('conteudo')


<form method="POST"  enctype="multipart/form-data" action="{{ url('/admin/paginas/propaganda') }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem -->
    <div class="form-group" id="mensagem">
      <label class="col-md-4 control-label" for="filebutton">Imagem: </label>
      <div class="col-md-4">
        <input id="imagem" name="imagem" class="input-file" type="file" required>
      </div>
    </div>
    <br />
  <!-- Campo Titulo -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="titulo">Titulo:</label>
      <div class="col-md-4">
      <input id="titulo" name="titulo" type="text" placeholder="Titulo da propaganda" class="form-control input-md" required="">
      </div>
    </div>
    <br />
    <br />

    <!-- Campo URL -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="link">Link(URL):</label>
        <div class="col-md-4">
        <input id="link" name="link" type="text" placeholder="Link para acesso ao site do patrocinador" class="form-control input-md" required="">
        </div>
      </div>
      <br />
      <br />

  <label class="col-md-4 control-label" for="salvar"></label>
  <center class="col-md-2"><button type="submit" class="btn btn-success"> Salvar Propaganda</button></center>
</div>
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
