

@extends('admin.dashboard')
@section('titulo', 'Representante Legal')
@section('conteudo')
<div class="row">
   <div class="col-lg-10">
      <h2>Dados do representante</h2>
      <h5>Os dados abaixo serão exibidos no certificado de cada associado.</h5>
      <h5>Como o responsável legal é alterado periódicamente, somente um cadastro é permitido.</h5>
      <h5>Edite os dados para alterar o representante legal.</h5>
      <div class="table-responsive">
         <table class="table table-hover table-striped">
            <thead>
               <tr>
                  <th>Nome do representante</th>
                  <th colspan="2"> </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>@if(isset($representante->nome)) $representante->nome @endif</td>
                  <td><a class="btn btn-default" href="{{ url('/admin/representantelegal/1') }}">Editar</a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
</div>
@endsection

