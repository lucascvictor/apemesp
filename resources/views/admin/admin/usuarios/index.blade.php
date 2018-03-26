@extends('admin.dashboard')
@section('titulo', 'Dados de acesso')
@section('extrastyle')
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
@endsection
@section('conteudo')
<div class="row">
   <div class="col-md-12">
      <div class="row">
         <div class="col-lg-12 ">
            <div class="col-md-12" style="float: right;">
               {{ Form::open(['action' => ['Admin\UsuarioController@search'], 'method' => 'GET']) }}
               <div class="form-group input-group">
                  {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Procurar Usuarios', 'class' => 'form-control'])}}
                  <span class="input-group-btn">
                     <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                  </span>
               </div>
               {{ Form::close() }}
            </div>
            <h2>Lista de Associados</h2>
            <div class="table-responsive">
            <table class="table table-hover table-striped">
            <thead>
            <tr>
            <th>Nome do Associado</th>
            <th>Usuário (e-mail)</th>
            <th colspan="2"> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
            <tr>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
            <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal">Resetar senha</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Reset de senha</h4>
            </div>
            <div class="modal-body">
            <p>Deseja realmente resetar a senha  deste usuário?</p>
            </div>
            <div class="modal-footer">
            <a href="/admin/usuarios/reset/{{ $usuario->id }}" class="btn btn-danger btn-block">
            Sim
            </a>
            <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Não</button>
            </div>
            </div>
            </div>
            </div>
            <!-- End modal content -->
            </td>
            <td><a href="mailto:{{ $usuario->email }}" class="btn btn-primary">Enviar e-mail</a></td>
            <td><a href="/admin/usuarios/mensagem/{{ $usuario->id }}" class="btn btn-success">Enviar mensagem interna</a></td>
            @if($usuario->id_status < 4)
            <td><a href="/admin/usuarios/desativar/{{ $usuario->id }}" class="btn btn-danger">Desativar</a></td>
            @else
            <td><a href="/admin/usuarios/reativar/{{ $usuario->id }}" class="btn btn-success">Reativar</a></td>
            @endif
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
         </div>
      </div>
      <div class="row">
         <p> {!! $usuarios->links() !!} </p>
      </div>
   </div>
   <div class="col-md-2">
      <a class="btn btn-success" href="{{ url('/admin/usuarios/new') }}">Criar novo usuário</a>
   </div>
</div>
@endsection
@section('extrascript')
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>s
<script type="text/javascript">
   $(function()
   {
      $( "#q" ).search({
       source: "{{ url('/admin/usuarios/search') }}",
       minLength: 3,
       select: function(event, ui) {
         $('#q').val(ui.item.value);
       }
     });
   });
</script>
@endsection