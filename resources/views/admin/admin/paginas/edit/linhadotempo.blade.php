

@extends('admin.dashboard')
@section('titulo', 'Editar Linha do Tempo')
@section('extrastyle')
<script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>
@endsection
@section('conteudo')
<form method="POST"  action="{{ url('/admin/paginas/linhadotempo/') }}/{{ $linhadotempo->id }}">
   {{ csrf_field() }}
   <fieldset>
      <legend>Indicação de item para o acervo</legend>
      <!-- Botão de Arquivo para Imagem -->
      <br />
      <div class="form-group">
         <label class="col-md-4 control-label" for="ano">Ano: </label>
         <input type="text" name="ano" type="ano" value="{{ $linhadotempo->ano }}" onkeyup="somenteNumeros(this);" \>
         <hr>
      </div>
      <!-- Campo Acontecimentos -->
      <div class="form-group">
         <label class="col-md-4 control-label" for="acontecimentos">Acontecimentos:</label>
         <div class="col-md-6">
            {{ Form::textarea('acontecimentos', $linhadotempo->acontecimentos, array('class' => 'form-control input-md',
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

