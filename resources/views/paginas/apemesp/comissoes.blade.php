@extends('main')

@section('titulo', '| Comissões')

@section('extrastyle')



@endsection

@section('conteudo')


					<h1 class="entry-title">Comissões</h1>

          @foreach($comissoes as $comissao)
                <ul>
                <li>{{$comissao->comissao }}</li>
                </ul>
          @endforeach
 
          @foreach($comissoes as $comissao)
                      <div class="card border-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header">{{$comissao->comissao }}</div>
                      <div class="card-body text-primary">
                        <p class="card-text">{!! $comissao->atribuicoes !!}</p>
                      </div>
                    </div>
          @endforeach

@endsection
