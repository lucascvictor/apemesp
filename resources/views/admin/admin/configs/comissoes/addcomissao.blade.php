@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('extrastyle')

  <script src=" {!! url('ckeditor/ckeditor.js') !!} "></script>

@endsection

@section('conteudo')

<form class="form-horizontal" action="{{ url('admin/paginas/comissao')}}" method="POST">
        <fieldset>


                <legend>Adicionar Comissao</legend>

           {{ csrf_field() }}
                <!-- Campo Comissao -->
                    <div class="form-group">
                      <label class="col-md-8" for="assunto">Comissão:</label>
                      <div class="col-md-8">
                      <input id="comissao" name="comissao" type="text" placeholder="Comissao" class="form-control input-md" required="">
                      </div>
                    </div>

                 <!-- Campo E-mail -->
                    <div class="form-group">
                      <label class="col-md-8" for="email">Atribuições:</label>
                      <div class="col-md-8">
    			        {{ Form::textarea('atribuicoes','', array('class' => 'form-control')) }}
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
     CKEDITOR.replace( 'atribuicoes', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>


@endsection
