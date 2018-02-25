@extends('admin.dashboard')

@section('titulo', 'Financeiro')

@section('conteudo')

<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-12">
                        <h2>Situações financeiras do associado: {{ $associado[0]->name }}</h2>

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                
                                    <tr>
                                        <th>Ano</th>
                                        <th>Status</th>
                                        <th>Arq. enviado?</th>
                                        <th>Arq. Avaliado?</th>
                                        <th colspan="2"> </th>
                                        
                                    </tr>
                                
                                </thead>
                                <tbody>
                                @foreach($associado as $fin)
								    <tr>
                                        <td>{{ $fin->ano }}</td>
                                        <td>{{ $fin->descricao }}</td>
                                        <td>    @if($fin->arq_enviado == 0)
                                                    Não
                                                @else
                                                    Sim
                                                @endif
                                        </td>
                                        <td>    @if($fin->arq_avaliado == 0)
                                                    Não
                                                @else
                                                    Sim
                                                @endif
                                        </td>
                                        <td><a class="btn btn-success" href="{{ url('/admin/financeiro/associado/') }}">Avaliar</a></td>
                                    </tr>
                                @endforeach
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