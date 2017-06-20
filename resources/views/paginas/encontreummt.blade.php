@extends('main')

@section('titulo', '| Encontre um Musicoterapeuta')

@section('conteudo')

<h2>Encontre um Musicoterapeuta</h2>

		
       <div class="row">

        	<!-- Botão de busca por nome-->
              <div class="col-md-8" style="margin-top: 30px;">
               <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Pesquisa por nome">
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                </div>
            </div>

            <!--Filtro por especialidade -->
              <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por especialidade:</label>
                            <select id="assunto" name="assunto" class="form-control">
                            @foreach($especialidades as $especialidade)
                              <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                            @endforeach
                           </select>
                            <p class="help-block text-danger"></p>
                 </div>
             

             <!--Filtre por área de atuação geográfica -->
             <div class="form-group col-xs-8 col-md-6">
                            <label>Filtre por proximidade geográfica:</label>
                            <select id="assunto" name="assunto" class="form-control">
                            @foreach($proximidades as $proximidade)
                              <option value="{{ $proximidade->id }}">{{ $proximidade->localidade }}</option>
                            @endforeach
                           </select>
                            <p class="help-block text-danger"></p>
                 </div>
          
       </div>

            <div class="row">
                    <div class="col-lg-12 col-md-10">
          
                       
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome do musicoterapeuta</th>
                                        <th>Locais de atendimento</th>
                                        <th>Telefones de contato</th>
                                        <th>Horário de atendimento </th>
                                        <th>Envie uma mensagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                             
								<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a class="btn btn-primary">Enviar e-mail</a></td>
                                    </tr>

								
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
                
             



@endsection