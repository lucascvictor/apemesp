@extends('admin.dashboard')
@section('titulo', 'Indicações literárias')
@section('conteudo')

<div class="row">
<div class="col-md-12">
   <div class="row">
      <div class="col-lg-10">
         <div class="table-responsive">
            <table class="table table-hover table-striped">
               <thead>
                  <tr>
                     <th>Nome</th>
                     <th>E-mail</th>
                     <th>TItulo</th>
                     <th colspan="2"> </th>
                  </tr>
               </thead>
                <tbody>
                    @foreach($indicacoes as $indicacao)
                        <tr>
                            <td>{{$indicacao->nome}}</td>
                            <td>{{$indicacao->email}}</td>
                            <td>{{$indicacao->titulo}}</td>
                            <td><a class="btn btn-success" href="{{ url('/admin/indicacoesliterarias') }}/{{$indicacao->id}}">Avaliar</a></td>
                           
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
@endsection