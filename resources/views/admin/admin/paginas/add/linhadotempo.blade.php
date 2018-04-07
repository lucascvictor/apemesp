@extends('admin.dashboard')

@section('titulo', 'Adicionar Item para a Linha do Tempo')

@section('conteudo')

@section('extrastyle')

  <script src="http://apemesp.com/public/ckeditor/ckeditor.js "></script>

@endsection

<form method="POST"  action="{{ url('/admin/paginas/linhadotempo/') }}">
 {{ csrf_field() }}
  <fieldset>
  <legend>Indicação de item para o acervo</legend>
  <!-- Botão de Arquivo para Imagem -->

<br />

    <div class="form-group">
      <label class="col-md-4 control-label" for="ano">Ano: </label>
      <input type="text" name="ano" id="ano" onkeyup="somenteNumeros(this);" \>
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

    {!! Html::script('js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'acontecimentos', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>

    <!--validar o campo somente numeros -->
    <script>
        function somenteNumeros(num) {
            var er = /[^0-9.]/;
            er.lastIndex = 0;
            var campo = num;
            if (er.test(campo.value)) {
              campo.value = "";
            }
        }
    </script>

@endsection
