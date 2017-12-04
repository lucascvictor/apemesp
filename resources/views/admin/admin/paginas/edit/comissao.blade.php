@extends('admin.dashboard')

@section('titulo', 'Editar Comissão')

@section('extrastyle')


@endsection

@section('conteudo')

<div class="container">
  <div class="row">
  <div class="col-md-10">

			<fieldset>
				<legend>Literaturas</legend>




	<table class="table table-hover table-striped">
			<thead>
					<tr>
							<th> ID </th>
							<th>Imagem</th>
							<th>Titulo</th>
							<th colspan="2"></th>
					</tr>
			</thead>
			<tbody>
@foreach($literaturas as $literatura)
				<tr>
								<td><b>{{ $literatura->id }}</b></td>

								<td>
                  <img src="{{ url('/images/musicoterapia/literatura')}}//{{ $literatura->imagem }}" style="width: 30px; heigth: 25px;">
								</td>
								<td><b>{{ $literatura->titulo }}</b></td>
								<td><a class="btn btn-default" href="{{ url('/admin/paginas/literatura') }}/ {{ $literatura->id }}">Editar</a></td>
<td>

<a class="btn btn-danger" href="{{ url('/admin/paginas/literatura/destroy')}}/{{ $literatura->id }}">Deletar</a>

</td>
</tr>
@endforeach


			</tbody>
	</table>


</div>
{{ $literaturas->render() }}
</div>

</div>




@endsection
