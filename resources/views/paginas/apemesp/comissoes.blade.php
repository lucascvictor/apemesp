@extends('main')

@section('titulo', '| Comissões')

@section('conteudo')

	
					<h1 class="entry-title">Comissões</h1>
					<h2 class="entry-subtitle"> Gestão 2016-2018 </h2>

				<div class="row">
				<div class="col-md-4 ofdset-md-1">
					
				<h3> Ano da Comissão </h3>
					    <select id="anocomissoes" name="anocomissoes" class="form-control">
					   
					      <option value="1">2017</option>
					    
					    </select>
					    <br>
					    <a href="" class="btn btn-primary">Ok</a>
					 </div>
			</div>
			<br><br><br>

			<div class="panel panel-default">
  <div class="panel-heading">Diretoria</h3>
  </div>
  <div class="panel-body">
					
			<div class="col-md-4">
          {{  Html::image('images/comissoes/andre_pereira.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt. André Pereira Lindenberg</h2>
          <p>Presidente</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/marilia_prado.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Marília Prado de Oliveira</h2>
          <p>1° Vice-Presidente.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/daniel_sodre.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>E-Mt Daniel Sodré de Aguiar Braga</h2>
          <p>2° Vice-Presidente.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/raphael_soares.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Raphael Soares</h2>
          <p>1° Tesoureiro.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>


         <div class="col-md-4">
         {{  Html::image('images/comissoes/gildasio_januario.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Gildásio Januário de Souza</h2>
          <p>2° Tesoureiro.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>



	 <div class="col-md-4">
	          {{  Html::image('images/comissoes/daniel_santana.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
	          <h2>Mt Daniel da Conceiçao Santana</h2>
	          <p>1° Secretário.</p>
	          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
	        </div>


	   <div class="col-md-4">
	          {{  Html::image('images/comissoes/allana_gomes.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
	          <h2>Mt Allana Gomes Morais Santana</h2>
	          <p>2ª Secretária.</p>
	          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
	        </div>
		</div>
	</div>


	<div class="panel panel-default">
  <div class="panel-heading">Assesoria, Divulgação e Marketing</h3>
  </div>
  <div class="panel-body">
					
			<div class="col-md-4">
          {{  Html::image('images/comissoes/ricardo_augusto.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Col. Ricardo Augusto</h2>
          
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/daniel_sodre.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>E-Mt Daniel Sodré</h2>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
         
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/daniel_santana.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Daniel Santana</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>

        
		</div>
	</div>


<div class="panel panel-default">
  <div class="panel-heading">Comissão Intercâmbio</h3>
  </div>
  <div class="panel-body">
					
			<div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Mt Diná Sigolo</h2>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/ludmila_poyares.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Ludmila Poyares</h2>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
         
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/andre_pereira.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt André Lindenberg</h2>
         
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        
		</div>
	</div>

	<div class="panel panel-default">
  <div class="panel-heading">Comissão Científica</h3>
  </div>
  <div class="panel-body">
					
			<div class="col-md-4">
          {{  Html::image('images/comissoes/roger_carrer.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Roger Carrer</h2>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
        </div>

        <div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Mt Michele Ferreira</h2>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
         
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/paulo_neto.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>E-Mt Paulo Neto</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>

        <div class="col-md-4">
          {{  Html::image('images/comissoes/daniel_santana.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>E-Mt Daniel Conceição</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>
        <div class="col-md-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Mt Sabrina Oliveira</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>
        <div class="col-md-4">
          {{  Html::image('images/comissoes/ludmila_poyares.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt Ludmila Poyares</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>
        <div class="col-md-4">
          {{  Html::image('images/comissoes/andre_pereira.jpg',  '', array('style' => 'width: 140px; height: 140px;', 'class' => 'img-circle')) }}
          <h2>Mt André Lindenberg</h2>
         <p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>
          
        </div>

        
		</div>
	</div>




			
			<br><br><br>


@endsection