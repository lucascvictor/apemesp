@extends('main')

@section('titulo', '| Comissões')



@section('conteudo')
        <h1 class="entry-title">Comissões</h1>

        @foreach($comissoes as $comissao)
                <ul>
                <li>{{$comissao->comissao }}</li>
                </ul>
          @endforeach

              @foreach($comissoes as $comissao)
                <div class="card col-md-12" style="background-color: #fffefd; padding-bottom: 10%; border-radius: 10%; margin: 10px;">

                    <hr>
                    <div class="card-title " style="">
                      <h2 class="intro-text text-center" style="border-radius: 15%;"><strong>{{$comissao->comissao }}</strong>
                    </div>
                    <br>  
                    </h2>
                    </a>
                    <hr>
                   
                    <p>{!! $comissao->atribuicoes !!}</p>
              </div>

              @endforeach

					

        

          


@endsection
