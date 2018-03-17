@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Especialidades para Dados Profissionais do Associado</h2>
                        <p><a class="btn btn-success" href="{{ url('/admin/configs/especialidades/addespecialidade') }}">Adicionar especialidade </a></p>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Especialidade</th>
                                        <th colspan="2"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($especialidades as $escala)
								<tr>
                                        <td>{{ $escala->escala }}</td>

                                        <td><a href="{{ url('') }}" class="btn btn-default">Editar</a></td>
                                        <td><a href="{{ url('') }}" class="btn btn-danger">Deletar</a></td>
                                    </tr>

								@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

	</div>
	<div class="row">
    <p> {{ $especialidades->render() }} </p>

	</div>


</div>
</div>
@endsection
