@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Escalas para Dados Profissionais do Associado</h2>
                        <p><a class="btn btn-success" href="{{ url('/admin/configs/escalas/addescala') }}">Adicionar escala </a></p>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Escala</th>
                                        <th colspan="2"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($escalas as $escala)
								<tr>
                                        <td>{{ $escala->escala }}</td>

                                        <td><a href="" class="btn btn-default">Editar</a></td>
                                        <td><a href="" class="btn btn-danger">Deletar</a></td>
                                    </tr>

								@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

	</div>
	<div class="row">
    <p> {{ $escalas->render() }} </p>

	</div>


</div>
</div>
@endsection
