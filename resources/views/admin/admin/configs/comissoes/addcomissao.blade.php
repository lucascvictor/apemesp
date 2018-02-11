@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('extrastyle')

  <script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

@endsection

@section('conteudo')

<form class="form-horizontal" action="{{ url('admin/configs/assuntos')}}" method="POST">
        <fieldset>


                <legend>Adicionar Comissao</legend>

           {{ csrf_field() }}
                <!-- Campo Comissao -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="assunto">Comissão:</label>
                      <div class="col-md-4">
                      <input id="assunto" name="assunto" type="text" placeholder="Comissao" class="form-control input-md" required="">
                      </div>
                    </div>

                 <!-- Campo E-mail -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Atribuições:</label>
                      <div class="col-md-4">
    			        {{ Form::textarea('conteudo','', array('class' => 'form-control')) }}
                      </div>
                    </div>



                <!-- Botão -->
                    <div class="form-group">

                      <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
                      </div>
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
