@extends('admin.dashboard')

@section('titulo', 'Dados Profissionais temporáriamente inativos')


@section('conteudo')

<div class="panel panel-warning">
<div class="panel-heading">
		<h2 class="panel-title">Área temporáriamente inativa</h2>
</div>
 <div class="panel-body">
   Para ativar esta área novamente, ative a exibição de seus dados:
   <fieldset style="margin: 20px;">
    <legend>Exibição de dados profissionais</legend>
    <!-- Campo Nome -->
    <div class="form-group">
       <label class="col-md-12 control-label" for="name">Deseja permitir a exibição de seus dados profissionais?</label>  
       <div class="col-md-4">
       <form method="post" action="{{ url('/admin/perfil/alteraropcaoprofissional')}}">
         {{ csrf_field() }}
          <select class="form-control form-control-lg" name="opcaoProfissional">
          <option @if(Auth::user()->opcao_dados_profissionais == 2) selected @endif value="2">Sim</option>
          <option @if(Auth::user()->opcao_dados_profissionais == 1) selected @endif value="1">Não</option>
          </select>
          <br />
          <button class="btn btn-warning" type="submit"> Confirmar</button>
       </form>
       </div>
    </div>
 </fieldset>

  </div>
</div>


@endsection
