@extends('admin.dashboard')

@section('titulo', 'Carteirinha')

@section('conteudo')


<div class="row">
   <div class="col-md-2">
    <a class="btn btn-success" href="{{ url('/associado/carteirinha/certificado') }}" target="_blank">Solicitar comprovante</a>
    <p>Este botão possibilita a emissão de um comprovante de vinculo com a apemesp</p>
   </div>
   <div class="col-md-4">
        <div class="row">
           
        </div>
        <div class="row">
           
        </div>
   </div>
   <div class="col-md-4">
    
   </div>
</div>

@endsection
