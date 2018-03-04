@extends('admin.dashboard')

@section('titulo', 'Novo usuário')

@section('extrastyle')

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />

@endsection


@section('conteudo')

<div class="row">
	<div class="col-md-12">
        <a class="btn btn-success" href="{{ url('/admin/usuarios/new/comum') }}"> Criar usuário comum </a>
        <a class="btn btn-warning" href="{{ url('/admin/usuarios/new/admin') }}"> Criar usuário administrador </a>

    </div>
  </div>

@endsection

