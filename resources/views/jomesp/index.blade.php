@extends('jomesp.layout')


@section('conteudo')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
 @foreach($posts as $post)
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">{{ $post->titulo }}
                    </h2>
                    <hr>

                    <p>{{ $post->previa }}</p>
                    <center>
                    <img class="img-responsive img-border " src="{{ url('images/') }}/posts/imagens/previas/{{ $post->imagem_previa }}" style="width: 300px; height: 200px;" alt="">
                    </center>
                    <a href="jomesp/pages/post/{{ $post->id }}" class=""> Continuar lendo <i class="fa fa-long-arrow-right"> </i></a>
                    <hr class="visible-xs">
                </div>
            </div>
        </div>
@endforeach

        <p> {{ $posts->render() }} </p>
    </div>
    <!-- /.container -->
  </div>
</div>
</div>
</div>


@endsection
