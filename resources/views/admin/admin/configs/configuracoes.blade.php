@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')

<div class="row">
	<div class="col-md-10">


		<div class="panel panel-default">

		  <div class="panel-heading">Configurações gerais do sistema</div>

			<table class="table">
		   <thead>
		     <tr>
		       <th>Configuração</th>
		       <th colspan="2">Descrição</th>
		     </tr>
		   </thead>
		   <tbody>
		     <tr>
		       <th><a href="{{ url('/admin/configs/assuntos') }}">Assuntos</a></th>
		       <td>Configure os assuntos da páginas de mensagens (contato)</td>
		     </tr>
				 <tr>
		       <th><a href="{{ url('/admin/configs/escalas') }}">Escalas</a></th>
		       <td>Configure as escalas exibidas na página de dados profissionais do associado e na pesquisa dos musicoterapeutas</td>
		     </tr>
				 <tr>
					<th><a href="{{ url('/admin/configs/proximidades') }}">Proximidades</a></th>
					<td>Configure as proximidades geográficas exibidas em dados profissionais e na pesquisa dos musicoterapeutas</td>
				</tr>
				<tr>
					<th><a href="{{ url('/admin/configs/especialidades') }}">Especiaidades profissionais</a></th>
					<td>Administre todas as especialidades indicadas e cadastradas </td>
				</tr>
		   </tbody>
		 </table>
		</div>






@endsection
