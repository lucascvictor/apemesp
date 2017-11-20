@extends('main')

@section('titulo', '| Encontre um Musicoterapeuta')

@section('conteudo')

<h2>Encontre um Musicoterapeuta</h2>


       <div class="row">
         {{ Form::open(['action' => ['Apemesp\EncontreUmMtController@search'], 'method' => 'GET']) }}

            <!--Filtro por especialidade -->
              <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por especialidade:</label>
                            <select id="especialidade" name="especialidade" class="form-control">
                            @foreach($especialidades as $especialidade)
                              <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                            @endforeach
                              <option value=""></option>
                           </select>
                            <p class="help-block text-danger"></p>
                 </div>


             <!--Filtre por área de atuação geográfica -->
             <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por proximidade geográfica:</label>
                            <select id="proximidade" name="proximidade" class="form-control">
                            @foreach($proximidades as $proximidade)
                              <option value="{{ $proximidade->id }}">{{ $proximidade->localidade }}</option>
                            @endforeach
                              <option value=""></option>
                           </select>
                            <p class="help-block text-danger"></p>
              </div>

              <!--Filtre por escala de atuação -->
              <div class="form-group col-xs-8 col-md-6">
                             <label>Filtre por dias de atuação:</label>
                             <select id="escala" name="escala" class="form-control">
                             @foreach($escalas as $escala)
                               <option value="{{ $escala->id }}">{{ $escala->escala }}</option>
                             @endforeach
                              <option value=""></option>
                            </select>
                             <p class="help-block text-danger"></p>
               </div>
               <!-- Botão de busca por nome-->
               <div class="form-group col-xs-8 col-md-6">
                          <label>Filtre por Nome:</label>
                         <input id="nome" class="nome form-control" type="text" placeholder="Pesquisa por nome" width="100%">

                 </div>


               </div>

<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Pesquisar</button>


           {{ Form::close() }}

           <div class="row">
                   <div class="col-lg-12 col-md-10">


                       <div class="table-responsive">
                           <table class="table table-hover table-striped">
                               <thead>
                                   <tr>
                                       <th>Nome do musicoterapeuta</th>
                                       <th>Local de atendimento</th>
                                       <th>Telefone de contato</th>
                                       <th>Dias de atendimento </th>
                                       <th>Envie uma mensagem</th>
                                   </tr>
                               </thead>
                               <tbody>

                                      <tr>
                                         @if($pesquisa == 0)
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         @else

                                         <td><a class="btn btn-primary">Enviar e-mail</a></td>
                                         @endif
                                       </tr>




                               </tbody>
                           </table>
                       </div>
                   </div>
              </div>

       </div>







@endsection
