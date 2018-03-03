@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<div class="row">
  <div class="col-md-4">
    <canvas id="canvas" style="display: block; width: 100%; height: 100%;"></canvas>
  </div>
  <div class="col-md-8">
    <canvas id="canvas2" style="width: 100%; height: 100%;"></canvas>
    <form action="{{ url('/admin/chart') }}" method="post">
    {{ csrf_field() }}
    Selecione o ano a ser exibido:
    <select id="ano" class="ano" name="ano">
      <?php $ano = 2018; ?>
      @while($ano <= 2048)
      <option value="{{ $ano }}">{{ $ano }} </option>
      <?php $ano++; ?>
      @endwhile
    </select>
    <button class="btn btn-primary" type="submit">Ok</button>
    </form>
  </div>
</div>

<br><br><br>

<div class="row" >
  <div class="col-md-12">
  <canvas id="canvas3" style="width: 100%; height: 100%;"></canvas>
  </div>
</div>


@endsection

@section('extrascript')
    @include('admin.admin.chartAdmin')
@endsection