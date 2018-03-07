@extends('admin.dashboard')

@section('titulo', 'Adicionar Conquista')

@section('extrastyle')

  <script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

@endsection

@section('conteudo')


<form method="POST"  enctype="multipart/form-data" action="{{ url('/admin/paginas/conquista') }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Inserção de conquista na página Musicoterapia/Conquistas </legend>

  <!-- Campo Titulo -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="titulo">Titulo:</label>
      <div class="col-md-4">
      <input id="titulo" name="titulo" type="text" placeholder="Titulo da conquista" class="form-control input-md" required="">
      </div>
    </div>
    <br />
    <br />
  <!-- Campo Descrição -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="descricao">Descrição:</label>
      <div class="col-md-6">
        {{ Form::label('conteudo', 'Conteudo:') }}
        {{ Form::textarea('conteudo', null, array('class' => 'form-control input-md',
        'id' => 'conteudo',
        'name' => 'conteudo',
        'placeholder' => 'Breve descrição sobre a indicação. Você pode incluir aqui links(para leitura ou compra e de páginas de redes sociais)',
        'cols' => '30',
        'required' => ''
        )) }}
      </div>
    </div>
    <br />

    <hr>

  <label class="col-md-4 control-label" for="salvar"></label>
  <center class="col-md-4">  <button id="salvar" type="submit" class="btn btn-success btn-block"> Salvar</button> </center>

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
