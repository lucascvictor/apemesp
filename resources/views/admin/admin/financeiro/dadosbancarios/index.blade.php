

@extends('admin.dashboard')
@section('titulo', 'Dados Bancários')
@section('conteudo')
<div class="row">
<div class="col-md-12">
   <div class="row">
      <div class="col-lg-10">
         <h2>Lista de bancos exibidos aos associados para transações</h2>
         <br>
         <a class="btn btn-success" href="" data-toggle="modal" data-target="#novosDados">Adicionar nova conta</a>
         <div class="table-responsive">
            <table class="table table-hover table-striped">
               <thead>
                  <tr>
                     <th>Titular</th>
                     <th>Banco</th>
                     <th colspan="2"> </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($dadosbancarios as $dadobancario)
                  <tr>
                     <td>{{$dadobancario->titular}}</td>
                     <td>{{$dadobancario->banco}}</td>
                     <td><a class="btn btn-default" href="{{ url('/admin/financeiro/dadosbancarios/') }}/{{$dadobancario->id}}">Editar</a></td>
                     <td><a class="btn btn-danger" href="{{ url('/admin/financeiro/dadosbancarios/destroy') }}/{{$dadobancario->id}}">Excluir</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="row">
      <p> {{ $dadosbancarios->setPath('')->render() }} </p>
   </div>
</div>
@endsection

@include('admin.admin.financeiro.dadosbancarios.modal')


