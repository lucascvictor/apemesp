@extends('admin.dashboard')

@section('titulo', 'Adicionar Literatura')

@section('extrastyle')

  <script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

@endsection

@section('conteudo')

           
<form>
  <fieldset> 
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem --> 
    <div class="form-group" id="mensagem">
      <label class="col-md-4 control-label" for="filebutton">Imagem: </label>
      <div class="col-md-4">
        <input id="imagem" name="imagem" class="input-file" type="file"> 
      </div>
    </div>
    <br />
  <!-- Campo Titulo -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
      <div class="col-md-4">
      <input id="titulo" name="titulo" type="text" placeholder="Titulo da Obra ou do Site" class="form-control input-md" required="">
      </div>
    </div>
    <br />
    <br />
  <!-- Campo Descrição -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="descricao">Descrição:</label>  
      <div class="col-md-6">
      <textarea id="descricao" name="descricao" placeholder="Breve descrição sobre a indicação. Você pode incluir aqui links(para leitura ou compra e de páginas de redes sociais)" class="form-control input-md" required="" cols="30"></textarea>
      </div>
    </div>
    <br />

    <hr>
    <button type="submit" class="btn btn-success"> Salvar indicação literária</button>
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


