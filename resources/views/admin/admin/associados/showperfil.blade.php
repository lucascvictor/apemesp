@extends('admin.dashboard')

@section('titulo', 'Associado')

@section('conteudo')

<div class="row">
	<div class="col-md-10">
		


		<div class="row">
            <center>
                <center>
                     <img src="{{ url('public/files/') }}/{{ $associado->cpf }}/foto.jpg" style = "width: 140px; height: 140px;" class = "img-circle" value="{{ $associado->foto }}">

                    <p>Foto do perfil</p>
                </center>
                <h4><b>Dados pessoais:</b></h4>
                <h4>Nome: {{ $associado->name }} </h4>
                <h4>CPF: {{ $associado->cpf }}</h4>
                <h4>RG: {{ $associado->rg }}</h4>
                <h4>Data de nascimento: {{ $associado->nascimento }}</h4>
                <hr />
                <h4><b>Social:</b></h4>
                <h4>facebook: {{ $associado->facebook }}</h4>
                <h4>linkedin: {{ $associado->linkedin }}</h4>
                <hr />
                <h4><b> Logradouro: </b></h4>
                <h4> Endereço: {{ $associado->endereco }}</h4>
                <h4> Complemento: {{ $associado->complemento }}</h4>
                <h4> CEP: {{ $associado->cep }}</h4>
                <h4> Cidade: {{ $associado->cidade }}</h4>
                <h4> Estado {{ $associado->estado }} </h4>
                <hr />
                <h4><b> Telefones: </b></h4>
                <h4> Telefone residêncial: {{ $associado->tel_residencial }}</h4>
                <h4> Telefone celular: {{ $associado->tel_celular }}</h4>
                <h4> Telefone comercial: {{ $associado->tel_comercial }}</h4>
            </center>
	   </div>
	


</div>

@endsection