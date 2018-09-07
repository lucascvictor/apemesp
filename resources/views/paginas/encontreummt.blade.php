@extends('main')

@section('titulo', '| Encontre um Musicoterapeuta')

@section('conteudo')

<h2>Encontre um Musicoterapeuta</h2>


       <div class="row">
         <form class="" method="POST" action="{{ url('/encontreummt/search')}}">
            	{{ csrf_field() }}
            <!--Filtro por especialidade -->
              <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por especialidade:</label>
                            <select id="especialidade" name="especialidade" class="form-control">
                              <option value=""></option>
                            @foreach($especialidades as $especialidade)
                              <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                            @endforeach

                           </select>
                            <p class="help-block text-danger"></p>
                 </div>


             <!--Filtre por área de atuação geográfica -->
             <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por proximidade geográfica:</label>
                            <select id="proximidade" name="proximidade" class="form-control">
                              <option value=""></option>
                            @foreach($proximidades as $proximidade)
                              <option value="{{ $proximidade->id }}">{{ $proximidade->localidade }}</option>
                            @endforeach

                           </select>
                            <p class="help-block text-danger"></p>
              </div>

              <!--Filtre por escala de atuação -->
              <div class="form-group col-xs-8 col-md-6">
                             <label>Filtre por dias de atuação:</label>
                             <select id="escala" name="escala" class="form-control">
                               <option value=""></option>
                             @foreach($escalas as $escala)
                               <option value="{{ $escala->id }}">{{ $escala->escala }}</option>
                             @endforeach

                            </select>
                             <p class="help-block text-danger"></p>
               </div>
               <!-- Botão de busca por nome-->
               <div class="form-group col-xs-8 col-md-6">
                          <label>Filtre por Nome:</label>
                         <input id="nome" name="nome" class="form-control" type="text" placeholder="Pesquisa por nome" width="100%" required="">

                 </div>


               </div>

               <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Pesquisar</button>


           </form>

           <div class="row">
                   <div class="col-lg-12 col-md-10">


                       <div class="table-responsive">
                           <table class="table table-hover table-striped">
                               <thead>
                                   <tr>
                                       <th>Nome do musicoterapeuta</th>
                                       <th>Endereço de atendimento</th>
                                       <th>Telefone p/ contato</th>
                                       <th>Dias de atendimento </th>
                                       <th>Envie uma mensagem</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 @foreach($mts as $mt)
                                      <tr>

                                         <td>{{ $mt->name }}</td>
                                         <td>{{ $mt->endereco}}</td>
                                         <td>{{ $mt->telefone }}</td>
                                         <td>{{ $mt->escala }}</td>
                                         <td><a class="btn btn-primary">Enviar e-mail</a></td>

                                       </tr>
                                @endforeach
                               </tbody>
                               
                           </table>
                       </div>
                   </div>
              </div>

       </div>







@endsection
