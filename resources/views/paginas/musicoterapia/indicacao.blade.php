@extends('main')

@section('titulo', '| Conquistas')

@section('conteudo')


<form method="POST" action="{{ url('/musicoterapia/literatura/indicacao') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<fieldset> 
	<legend>Indicação de item para o acervo</legend>
	<!-- Botão de Arquivo para Imagem --> 
		<div class="form-group" id="mensagem">
		  <label class="col-md-4 control-label" for="filebutton">Imagem: </label>
		  <div class="col-md-4">
		    <input id="imagem" name="imagem" class="input-file" type="file"> 
		  </div>
		</div>
		<br />
	<!-- Campo Titulo -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
		  <div class="col-md-4">
		  <input id="titulo" name="titulo" type="text" placeholder="Titulo da Obra ou do Site" class="form-control input-md" required="">
		  </div>
		</div>
		<br />
		<br />
	<!-- Campo Descrição -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="descricao">Descrição:</label>  
		  <div class="col-md-6">
		  <textarea id="descricao" name="descricao" placeholder="Breve descrição sobre a indicação. Você pode incluir aqui links(para leitura ou compra e de páginas de redes sociais)" class="form-control input-md" required="" cols="30"></textarea>
		  </div>
		</div>
		<br />
		<legend> Autor da indicação</legend>
	<!-- Campo Nome -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="nome">Nome:</label>  
		  <div class="col-md-4">
		  <input id="nome" name="nome" type="text" placeholder="Nome completo" class="form-control input-md" required="">
		  </div>
		</div>
		<br />
		<br />
		<!-- Campo e-mail -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="email">E-mail para contato:</label>  
		  <div class="col-md-4">
		  <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
		  </div>
		</div>
		<br />
		<hr>
		<button type="submit" class="btn btn-primary"> Enviar indicação</button>
	</fieldset>
</form>

@endsection