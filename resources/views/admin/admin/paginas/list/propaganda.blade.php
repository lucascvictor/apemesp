@extends('admin.dashboard')

@section('titulo', 'Adicionar Formação')

@section('extrastyle')


@endsection

@section('conteudo')

<div class="container">
  <div class="row">
  <div class="col-md-10">

			<fieldset>
				<legend>Formação</legend>
<a class="btn btn-success" href="{{ url('admin/paginas/adicionar/propaganda') }}">Adicionar Formação</a>



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
@foreach($formacoes as $propaganda)
				<tr>
								<td><b>{{ $propaganda->id }}</b></td>

								<td>
                  <img src="{{ url('/images/propagandas')}}//{{ $propaganda->imagem }}" style="width: 30px; heigth: 25px;">
								</td>
								<td><b>{{ $propaganda->titulo }}</b></td>
								<td><a class="btn btn-default" href="{{ url('/admin/paginas/propaganda') }}/ {{ $propaganda->id }}">Editar</a></td>
<td>

  <button class="btn btn-danger" data-toggle="modal" data-target="#deletar{{ $propaganda->id }}">Deletar</button>
  <div class="modal fade" id="deletar{{ $propaganda->id }}" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->
              <div class="modal-content">
                <form class="form-horizontal" method="GET" action="{{ url('/admin/paginas/propaganda/destroy')}}/{{ $propaganda->id}}">
                 {{ csrf_field() }}
                    <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Excluir Propaganda!</h4>
                            </div>
                                <div class="modal-body">
                                  <p>Deseja realmente excluir esta formação?</p>
                                </div>
                                <div class="modal-footer">
                                  <a href="#" class="btn btn-info btn-block" data-dismiss="modal">
                                    Não
                                  </a>
                                <button class="btn btn-danger btn-block">Sim</button>
                              </div>
                  </form>
              </div>

        </div>

  </div>
</td>
</tr>
@endforeach


			</tbody>
	</table>

{{ $formacoes->setPath('')->render() }}
</div>

</div>

</div>




@endsection
