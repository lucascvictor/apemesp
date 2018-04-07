@extends('admin.dashboard')

@section('titulo', 'Editar Página')

@section('extrastyle')

  <script src="http://apemesp.com/public/ckeditor/ckeditor.js "></script>

@endsection

@section('conteudo')

            <!-- Botão de upload do arquivo PDF do estatuto-->
            @if($pagina->id == 2)
             <form method="POST"  enctype="multipart/form-data" action="{{ url('admin/paginas/update/estatuto/pdf') }}">
                {{ csrf_field() }}
                <fieldset>
                <legend>Upload do estatuto em PDF</legend>
                
                    <input id="estatuto" name="estatuto" class="input-file" type="file" required>
                    <br>
                    <div class="col-md-4">
                    <button type="submit" class="btn btn-success"> Upload</button>
                    </div>
                </fieldset>
                
                </form>
                <hr>
            @endif

            {!! Form::open(array('route' => ['pagina.update', $pagina->id], 'data-parsley-validate' => '')) !!}

            {{ Form::label('titulo', 'Titulo:') }}
            {{ Form::text('titulo', $pagina->titulo ,array('class' => 'form-control')) }}

            {{ Form::label('subtitulo', 'Subtitulo:') }}
            {{ Form::text('subtitulo', $pagina->subtitulo ,array('class' => 'form-control')) }}

            {{ Form::label('conteudo', 'Conteudo:') }}
            {{ Form::textarea('conteudo', $pagina->body, array('class' => 'form-control')) }}

            {{ Form::submit('Atualizar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			{!! Form::close() !!}

          
          </div>
        
    </div>


@endsection


@section('extrascript')

    {!! Html::script('js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>


@endsection


