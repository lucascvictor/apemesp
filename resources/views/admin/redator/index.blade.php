@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<div class="row">
  <div class="col-md-4">
    <canvas id="canvas" style="display: block; width: 100%; height: 100%;"></canvas>
  </div>
</div>

<div class="row" style="margin-top:5%;">
  <div class="col-md-12">
  Listagem de Visualizações por Postagem
  <table class="table table-hover table-striped">
         <thead>
            <tr>
               <th>Id do Post</th>
               <th>Titulo</th>
               <th>Quantidade de visualizações</th>
            </tr>
         </thead>
         <tbody>
            @foreach($views as $view)
            <tr>
               <td>{{ $view->id }}</td>
                <td>{{ $view->titulo }}</td>
               <td>{{ $view->total_visitas }}</td>
            </tr>
           
            @endforeach
         </tbody>
      </table>
  </div>
</div>
@endsection

@section('extrascript')
    @include('admin.redator.chartRedator')
@endsection