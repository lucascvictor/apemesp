@extends('admin.dashboard')

@section('titulo', 'Editar Linha do Tempo')

@section('extrastyle')
    <script src="http://apemesp.com.br/public/ckeditor/ckeditor.js "></script>
@endsection

@section('conteudo')
<form method="POST"  action="{{ url('/admin/paginas/linhadotempo/') }}/{{ $linhadotempo->id }}">
   {{ csrf_field() }}
   <fieldset>
      <legend>Edição da linha do tempo</legend>
      <!-- Botão de Arquivo para Imagem -->
      <br />
      <div class="form-group">
         <label class="col-md-4 control-label" for="ano">Ano: </label>
         <input type="number" name="ano" type="ano" value="{{ $linhadotempo->ano }}" \>
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
{!! Html::script('public/js/parsley.min.js') !!}
<script type="text/javascript">
   CKEDITOR.replace( 'acontecimentos', {
              filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
          });
</script>

@endsection

