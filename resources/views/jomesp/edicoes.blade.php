@extends('jomesp.layout')


@section('conteudo')

<div class="container">

@foreach($edicoes as $edicao)
        <div class="row">
            <div class="box jumbotron">
                <div class="col-lg-12" style="padding: 3%; background-color: #E8E0DA;">
                    <hr>
                    <h2 class="intro-text text-center">{{ $edicao->edicao }}
                        <strong>JoMESP</strong>
                    </h2>
                    <hr>
                    <h3> Atualizado em:  <?php

                    $data = new DateTime($edicao->created_at);
                    echo $data->format('d-m-Y');

                    ?></h4>

                    <p> Download Direto: <a href="/jomesp/edicoesjomesp/download/{{ $edicao->arquivo }}">dowload</a></p>
                    <p> Download Externo: <a href="{{ $edicao->linkexterno }}">dowload</a></p>

                </div>
            </div>
        </div>
@endforeach
  <p> {{ $edicoes->links() }} </p>
    </div>

@endsection
