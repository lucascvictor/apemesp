@extends('admin.dashboard')

@section('titulo', 'Posts Apemesp/Jomesp')

@section('conteudo')

<div class="row">

   <div class="col-lg-4 col-md-4">
   </div>
   <div class="col-lg-4 col-md-4">
      <a class="btn btn-block btn-info" href=" {{ url('/admin/posts/apemesp/list') }}">POSTS APEMESP</a>
      <br />
      <br />
      <br />
      <a class="btn btn-block btn-success" href=" {{ url('/admin/posts/jomesp/list') }}">POSTS JOMESP</a>
   </div>
   <div class="col-lg-4 col-md-4">
   </div>

</div>

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
      <div class="row">
         <p> {!! $views->appends(request()->query())->render() !!} </p>
      </div>
   </div>
</div>

@endsection

@section('extrascript')
    @include('admin.redator.chartRedator')
@endsection
