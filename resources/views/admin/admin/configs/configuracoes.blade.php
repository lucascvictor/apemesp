@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Assuntos da página de mensagens</h2>
                        <p><a class="btn btn-success" href="{{ url('/admin/configs/addassunto') }}">Adicionar assunto </a></p>
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
                                @foreach($assuntos as $assunto)
								<tr>
                                        <td>{{ $assunto->assunto }}</td>
                                        <td>{{ $assunto->email }}</td>
                                        <td><a class="btn btn-default">Editar</a></td>
                                        <td><a class="btn btn-danger">Deletar</a></td>
                                    </tr>

								@endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
    <p> {{ $assuntos->links() }} </p>
	
	</div>


</div>
</div>

@endsection