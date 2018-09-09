@extends('admin.dashboard')

@section('titulo', 'Carteirinha')

@section('conteudo')

<div class="row">
    <div class="col-md-4">
        <h3>Associado: {{ $carteirinha->digito}}-{{ $carteirinha->numero }}</h3>
    </div>
    </div>
    <hr>
<div class="row">
<div class="row">
   <div class="col-md-2">
    <a class="btn btn-success" href="{{ url('/associado/carteirinha/certificado') }}" target="_blank">Solicitar comprovante</a>
    <p>Este botão possibilita a emissão de um comprovante de vinculo com a apemesp</p>
   </div>
</div>
<div class="row">
<div class="col-md-2">
    <a class="btn btn-info" href="{{ url('/associado/carteirinha/novavia') }}">Solicitar nova via da carteirinha</a>
   </div>
</div>
</div>

@endsection
