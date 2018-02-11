@extends('main')

@section('titulo', '| Comissões')



@section('conteudo')
        <h1 class="entry-title">Comissões: </h1>
        <?php $i=1; ?>
        @foreach($comissoes as $comissao)
                
                <ul class="list-group list-group-flush">
                <a href="#item{{ $i }}"><li class="list-group-item">{{$comissao->comissao }}</li></a>
                </ul>
                <?php $i++; ?>
          @endforeach
            <?php $i=1; ?>
          @foreach($comissoes as $comissao)
              
                <div id="item{{ $i }}" class="card col-md-12" style="background-color: #fffefd; padding-bottom: 10%; border-radius: 3%; margin: 10px;">
                    <hr>
                    <div class="card-title " style="">
                      <h2 class="intro-text text-center" style="border-radius: 3%; color: #2D4373;"><strong>{{$comissao->comissao }}</strong>
                    </div>
                    <br>  
                    </h2>
                    </a>
                    <hr>
                    <centerr style="width: 50%;">
                    <p>{!! $comissao->atribuicoes !!}</p>
                    </center>
              </div>
              <?php $i++; ?>
              @endforeach

					

        

          


@endsection
