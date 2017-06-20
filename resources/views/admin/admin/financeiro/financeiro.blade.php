@extends('admin.dashboard')

@section('titulo', 'Financeiro')

@section('conteudo')

<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Situações financeiras de associados</h2>
<form class="form-horizontal">
        <fieldset>

                
                <legend>Pesquisar Associados</legend>
        <div class="row">
              <div class="col-md-4" style="float: right;">
               <div class="form-group input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                </div>
            </div>
          </div>
        </fieldset>
</form>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Assunto</th>
                                        <th>E-mail Associado </th>
                                        <th colspan="2"> </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                               
								<tr>
                                        <td>Nome do associado</td>
                                        <td>Situação</td>
                                        <td><a class="btn btn-default">Editar</a></td>
                                        <td><a class="btn btn-danger">Deletar</a></td>
                                    </tr>

							
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
    <p>  </p>
	
	</div>


</div>

@endsection