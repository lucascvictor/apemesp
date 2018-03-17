@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Proximidades geograficas para Dados Profissionais do Associado</h2>
                        <p><a class="btn btn-success" href="{{ url('/admin/configs/proximidades/addproximidade') }}">Adicionar Localização </a></p>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Escala</th>
                                        <th colspan="2"> </th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proximidades as $proximidade)
								<tr>
                                        <td>{{ $proximidade->localidade }}</td>

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
    <p> {{ $proximidades->render() }} </p>

	</div>


</div>
</div>
@endsection
