@extends('jomesp.layout')


@section('conteudo')

    @include('partials.jomesp._logo')
    @include('partials.jomesp._nav')

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
                    <img class="img-responsive img-border img-left" src="{{ url('images/') }}/posts/imagens/previas/{{ $post->imagem_previa }}" style="width: 300px; height: 200px;" alt="">
                    <hr class="visible-xs">
                    <p>{{ $post->previa }}</p>
                </div>
            </div>
        </div>
@endforeach
        

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Jomesp 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>