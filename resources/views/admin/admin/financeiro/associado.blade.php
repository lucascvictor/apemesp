@extends('admin.dashboard')
@section('titulo', 'Financeiro')
@section('conteudo')

<div class="row">
<div class="col-md-10">
    <div class="row">
        <div class="col-md-4">
        <a style="background-color: orange;color: white; border-color:orange;" class="btn btn-success btn-block" href="" data-toggle="modal" data-target="#lancFinanceiro">Adicionar lançamento financeiro</a>
        </div>
    </div>
   <div class="row">
      <div class="col-lg-12">
         <h2>Situações financeiras do associado: @if(isset($associado[0]->name)) {{ $associado[0]->name }} @endif</h2>
         <div class="table-responsive">
            <table class="table table-hover table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Ano</th>
                     <th>Status</th>
                     <th>Arq. enviado?</th>
                     <th>Arq. Avaliado?</th>
                     <th colspan="2"> </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($associado as $fin)
                  <tr>
                    <td>{{ $fin->id_user }}</td>
                     <td>{{ $fin->ano }}</td>
                     <td>{{ $fin->descricao }}</td>
                     <td>    @if($fin->arq_enviado == 0)
                        Não
                        @else
                        Sim
                        @endif
                     </td>
                     <td>    @if($fin->arq_avaliado == 0)
                        Não
                        @else
                        Sim
                        @endif
                     </td>
                     <td><a class="btn btn-success" href="{{ url('/admin/financeiro/associado') }}/{{ $fin->id_user }}/{{ $fin->ano }}">Avaliar</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="row">
      <p>  </p>
   </div>
</div>

@include('admin.admin.financeiro.modal')

@endsection

