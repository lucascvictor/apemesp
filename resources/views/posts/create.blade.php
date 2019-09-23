@extends('admin.dashboard')

@section('titulo', 'Criar Posts')

@section('extrastyle')

<script src="http://apemesp.com/public/quill/quill.js "></script>
<!-- Main Quill library -->
{!! Html::script('//cdn.quilljs.com/1.3.6/quill.js') !!}
{!! Html::script('//cdn.quilljs.com/1.3.6/quill.min.js') !!}

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
     
@endsection


@section('conteudo')

          {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
              <!-- Titulo -->
    			{{ Form::label('titulo', 'Titulo:') }}
                {{ Form::text('titulo', null, array('class' => 'form-control')) }}

              <!-- subtitulo -->
          {{ Form::label('subtitulo', 'Subtitulo:') }}
    			{{ Form::text('subtitulo', null, array('class' => 'form-control')) }}

              <!-- Tags -->
          {{ Form::label('tags', 'Tags:') }}
    <select id="tag" name="tag" class="form-control">
             @foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->tag }} </option>
              @endforeach
    </select>

    <!-- Destinos -->
            {{ Form::label('destino', 'Destino:') }}
    <select id="destino" name="destino" class="form-control">

      <option value="1"> APEMESP </option>
      <option value="2"> JOMESP </option>
    </select>

    <!-- Imagem previa -->
    <hr>
      <label class="control-label" for="filebutton">Imagem prévia: </label>
      <input id="imagem" name="imagem" class="input-file" type="file"> 
            * Esta imagem será exibida na página principal.
        <div id="mensagem">
        </div>
        <hr>

          <!-- Texto prévio -->
           {{ Form::label('previa', 'Prévia:') }}
          {{ Form::textarea('previa', null, array('class' => 'form-control', 'id' => 'previa', 'rows' => '5', 'placeholder' => 'Descreva aqui de forma resumida o conteúdo desta publicação para que seja exibida na tela principal.')) }} 

                    <!-- Conteudo do POST -->

          {{ Form::label('conteudo', 'Conteudo:') }}
          <div id="quill" class= "form-control">
          </div>
          <input id="conteudo" type="hidden" name="conteudo">
          </input>

    			{{ Form::submit('Salvar', array('class' => 'btn btn-success btn-lg btn-block')) }}
			{!! Form::close() !!}

          
        </div>

      </div>


@endsection


@section('extrascript')

{!! Html::script('public/js/parsley.min.js') !!}

 <script type="text/javascript">
  //validação do tipo de imagem
     
  var i = 0;
  $('#imagem').on('change',function () {
            var imagem = $(this).val();
            var formato = '';
            var limite = imagem.length - 3;
            while(limite < imagem.length)
            {
              formato = formato + imagem[limite];
              limite++;
            }
          
          if(!(formato == 'jpg' || formato == 'png' || formato == 'gif' || formato == 'jpeg')){
  
            if(i < 1){
            $("#mensagem").append('<div id="imagemmensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> Esta imagem não é de um tipo válido</div>');
            i++;
          }
            $("#imagem").val('');
          }else{
            document.getElementById("imagemmensagem").remove();
          }
          
        });


    var toolbarOptions = [
['bold', 'italic', 'underline', 'strike'],        // toggled buttons
['link', 'image'],
['blockquote', 'code-block'],

[{ 'header': 1 }, { 'header': 2 }],               // custom button values
[{ 'list': 'ordered'}, { 'list': 'bullet' }],
[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
[{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
[{ 'direction': 'rtl' }],                         // text direction

[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
[{ 'header': [1, 2, 3, 4, 5, 6, false] }],

[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
[{ 'font': [] }],
[{ 'align': [] }],

['clean']                                         // remove formatting button
];


var options = {
    placeholder: 'Digite aqui o seu texto..',
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
    };
var quill = new Quill('#quill', options);


var form = document.querySelector('form');
form.onsubmit = function() {
  // Populate hidden form on submit
  var about = document.querySelector('input[id=conteudo]');
  about.value = $('#quill')[0].outerHTML;
  
  return true;
};
</script>
@endsection