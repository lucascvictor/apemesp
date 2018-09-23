@extends('admin.dashboard')

@section('titulo', 'Carteirinha')

@section('conteudo')

<div class="row">
    <div class="col-md-4">
        <h3>Associado: @if($carteirinha){{ $carteirinha->digito}}-{{ $carteirinha->numero }}@endif</h3>
    </div>
    </div>
    <hr>
<div class="row">

   <div class="col-md-2">
    <a class="btn btn-success" href="{{ url('/associado/carteirinha/certificado') }}" target="_blank">Solicitar comprovante</a>
    <p>Este botão possibilita a emissão de um comprovante de vinculo com a apemesp</p>
   </div>

<div class="col-md-2">
<a class="btn btn-info" type="button" name="solicitacao2via" href="" data-toggle="modal" data-target="#2via">Solicitar 2ª Via</a>
   </div>

</div>
@include('admin.associado.carteirinha.modal2via')
@endsection


