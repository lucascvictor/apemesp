@extends('admin.dashboard')

@section('titulo', 'Criar Posts')

@section('extrastyle')

  <script src="http://apemesp.com/public/ckeditor/ckeditor.js "></script>

@endsection

@section('conteudo')
        @if(isset($post))
            {!! Form::open(array('route' => ['posts.update', $post->id], 'data-parsley-validate' => '', 'files' => true)) !!}

    			{{ Form::label('titulo', 'Titulo:') }}
                {{ Form::text('titulo', $post->titulo, array('class' => 'form-control')) }}

                {{ Form::label('subtitulo', 'Subtitulo:') }}
    			{{ Form::text('subtitulo', $post->subtitulo , array('class' => 'form-control')) }}


                {{ Form::label('tags', 'Tags:') }}
                <select id="tag" name="tag" class="form-control">
                 @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" 
                    @if($tag->id == $post->id_tag) 
                    selected="true"
                    @endif >{{ $tag->tag }} </option>
                  @endforeach
                </select>

            <!-- Destinos -->
            {{ Form::label('destino', 'Destino:') }}
           <select id="destino" name="destino" class="form-control">
            
                <option value="1" @if($post->id_destino == 1) selected @endif> APEMESP </option>
                <option value="2" @if($post->id_destino == 2) selected @endif> JOMESP </option>

            </select>

             <!-- Imagem previa -->
            <hr>
            <label class="control-label" for="filebutton">Imagem prévia: </label>
            <input id="imagem" name="imagem" class="input-file" type="file"> 
            * Esta imagem será exibida na página principal.
            <div id="mensagem">
            </div>
            <h3> Imgem atual </h3>
            <img class="img-responsive img-border img-left" src="{{ url('images/') }}/posts/imagens/previas/{{ $post->imagem_previa }}" style="height: 120px; width: 300px;" alt="">
            <hr>

        
           {{ Form::label('previa', 'Prévia:') }}
          {{ Form::textarea('previa', $post->previa, array('class' => 'form-control', 'id' => 'previa', 'rows' => '5', 'placeholder' => 'Descreva aqui de forma resumida o conteúdo desta publicação para que seja exibida na tela principal.')) }} 
          

    			{{ Form::label('conteudo', 'Conteudo:') }}
    			{{ Form::textarea('conteudo', $post->body, array('class' => 'form-control')) }}

    			{{ Form::submit('Atualizar', array('class' => 'btn btn-success btn-lg btn-block')) }}

			{!! Form::close() !!}

          
          </div>
        
    </div>

    @endif
@endsection


@section('extrascript')

    {!! Html::script('js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>


@endsection