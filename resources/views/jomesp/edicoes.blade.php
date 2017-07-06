@extends('jomesp.layout')

@section('extrastyle')
  

@endsection

@section('conteudo')

    @include('partials.jomesp._logo')
    @include('partials.jomesp._nav')

    

<div class="container">

        <div class="row">
            <div class="box jumbotron">
                <div class="col-lg-12" style="padding: 3%; background-color: #E8E0DA;">
                    <hr>
                    <h2 class="intro-text text-center">N Edição
                        <strong>JoMESP</strong>
                    </h2>
                    <hr>
                    <h3> Titulo da Edição </h4>

                    <p> Ler online: Link</p>
                    <p> Download: Link</p>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="box jumbotron">
                <div class="col-lg-12" style="padding: 3%; background-color: #E8E0DA;">
                    <hr>
                    <h2 class="intro-text text-center">N Edição
                        <strong>JoMESP</strong>
                    </h2>
                    <hr>
                    <h3> Titulo da Edição </h4>

                    <p> Ler online: Link</p>
                    <p> Download: Link</p>

                </div>
            </div>
        </div>

    </div>



@endsection