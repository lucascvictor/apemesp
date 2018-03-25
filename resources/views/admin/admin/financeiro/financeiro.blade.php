@extends('admin.dashboard')

@section('titulo', 'Financeiro')

@section('conteudo')

<div class="row">
	<div class="col-md-12">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Situações financeiras de associados</h2>
<form class="form-horizontal">
        <fieldset>

                
                <legend>Pesquisar Associados</legend>
                <div class="row">
                    <div class="col-md-4" style="float: right;">
                    
                {{ Form::open(['action' => ['Admin\FinanceiroController@search'], 'method' => 'GET']) }}
                <div class="form-group input-group">
                {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Procurar Associados', 'class' => 'form-control'])}}

                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></span>
                </div>
            {{ Form::close() }}
            </div>  

          </div>
        </fieldset>
</form>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th colspan="2"> </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($associados as $associado)
								    <tr>
                                        <td>{{$associado->name}}</td>
                                        <td>{{$associado->cpf}}</td>
                                        <td><a class="btn btn-success" href="{{ url('/admin/financeiro/associado/') }}/{{$associado->id_user}}">Gerenciar</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
		<p> {{ $associados->setPath('')->render() }} </p>
	</div>


</div>

@endsection