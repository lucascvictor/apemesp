@extends('admin.dashboard')

@section('titulo', 'Novo usuário Administrador')

@section('extrastyle')

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />

@endsection


@section('conteudo')

<div class="row">
	<div class="col-md-8">

        <form action="{{ url('/admin/usuarios/new/admin') }}" id="newUser" name="newUser" method="POST" onsubmit="return validarSenha();">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="name" class="form-control" id="name" name="name" required="">
            </div>
            <div class="form-group">
                <label for="email">Endereço de Email:</label>
                <input type="email" class="form-control" id="email" name="email" required="">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password"  required="">
            </div>

            <div class="form-group">
                <label for="repassword">Repita a Senha:</label>
                <input type="password" class="form-control" id="repassword" name="password" required="">
            </div>

            <button type="submit" class="btn btn-success">Salvar o novo usuário administrador</button>
        </form>
        <br>
        <p> OU </p>
        <a class="btn btn-default" href="{{ url('/admin/usuarios/new/comum') }}"> Criar usuário Comum </a>

    </div>
  </div>

@endsection

@section('extrascript')

<script>
function validarSenha(){
        NovaSenha = document.newUser.password.value;
        CNovaSenha = document.newUser.repassword.value;
        if (NovaSenha != CNovaSenha){ 
             alert("As senhas não são iguais, por favor tente novamente");
             return false;
        }
        return true;
 }
</script>

@endsection

