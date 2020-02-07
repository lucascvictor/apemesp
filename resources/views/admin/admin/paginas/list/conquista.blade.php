@extends('admin.dashboard')

@section('titulo', 'Lista de Conquistas')

@section('extrastyle')

  <script src="http://apemesp.com.br/public/ckeditor/ckeditor.js "></script>

@endsection

@section('conteudo')

<div class="container">
  <div class="row">
  <div class="col-md-10">

			<fieldset>
				<legend>Conquistas</legend>




	<table class="table table-hover table-striped">
			<thead>
					<tr>
							<th> ID </th>
							<th>Titulo</th>
							<th colspan="2"></th>
					</tr>
			</thead>
			<tbody>
@foreach($conquistas as $conquista)
				<tr>
								<td><b>{{ $conquista->id }}</b></td>

								<td><b>{{ $conquista->titulo }}</b></td>
								<td><a class="btn btn-default" href="{{ url('/admin/paginas/conquista') }}/ {{ $conquista->id }}">Editar</a></td>
<td>

<button class="btn btn-danger" data-toggle="modal" data-target="#deletar{{ $conquista->id }}">Deletar</button>
<div class="modal fade" id="deletar{{ $conquista->id }}" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
              <form class="form-horizontal" method="GET" action="{{ url('/admin/paginas/conquista/destroy')}}/{{ $conquista->id}}">
               {{ csrf_field() }}
                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Excluir Conquista!</h4>
                          </div>
                              <div class="modal-body">
                                <p>Deseja realmente excluir esta conquista?</p>
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
<a class="btn btn-success" href="/admin/paginas/adicionar/conquista">Adicionar conquista</a>

			</tbody>
	</table>


</div>
{{ $conquistas->setPath('')->render() }}
</div>

</div>




@endsection


@section('extrascript')

    {!! Html::script('public/js/parsley.min.js') !!}

    <script type="text/javascript">
     CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
            });
     </script>


@endsection
