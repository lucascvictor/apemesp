@extends('admin.dashboard')

@section('titulo', 'Formação')


@section('conteudo')


<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/formacao/update', $formacao->id )}}">
{{ csrf_field() }}
		<fieldset>

				
				<legend>Formação Acadêmica</legend>

				<div class="form-group">
                                <label class="col-md-4 control-label">Categorias: </label>
                                <label class=" radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="1" @if($formacao->id_categoria_formacao == 1)checked="" @endif>Graduação
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="2" @if($formacao->id_categoria_formacao == 2)checked="" @endif>Especialização
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="3" @if($formacao->id_categoria_formacao == 3)checked="" @endif>Mestrado
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="4" @if($formacao->id_categoria_formacao == 4)checked="" @endif>Doutorado
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="5" @if($formacao->id_categoria_formacao == 5)checked="" @endif>Outros
                                </label>
                           
                </div>


				<!-- Campo IES -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nomeies">Nome da IES:</label>  
					  <div class="col-md-4">
					  <input id="nomeies" name="nomeies" type="text" placeholder="Instituição de Ensino" class="form-control input-md" required="" value="{{ $formacao->nomeies }}">
					  </div>
					</div>

				<!-- Campo Titulo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
					  <div class="col-md-4">
					  <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md" required="" value="{{ $formacao->titulo }}">
					  </div>
					</div>

				<!-- Ano de conclusão -->
					<div class="form-group">
			
                <label class="col-md-4 control-label" for="ano">Ano de Conclusão/ Previsão:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <input name="anodeconclusao" id="anodeconclusao" onkeyup="somenteNumeros(this);" maxlength="4" class="form-control" type="text" value="{{ $formacao->anodeconclusao }}">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
      			  </div>
        
        <!-- Campo Titulo do TCC -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Titulo do TCC:</label>  
					  <div class="col-md-4">
					  <input id="titulotcc" name="titulotcc" type="text" placeholder="TCC" class="form-control input-md" required="" value="{{ $formacao->titulotcc }}">

					  </div>
					</div>

		<!-- Estado -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-4">
					    <select id="estado" name="estado" class="form-control">
					    @foreach($estados as $estado)
					      <option value="{{ $estado->id }}"
					      <?php if($formacao->id_estado == $estado->id)
					      {
					      	echo ("selected");
					      			
					      } ?>
					      >{{ $estado->nome }}</option>
					     @endforeach
					    </select>
					  </div>
					</div>

				<!-- Cidade -->
					<div class="form-group">
					 <label class="col-md-4 control-label" for="cidade">Cidade</label>
					  <div class="col-md-4">
					    <select id="cidade" name="cidade" class="form-control">

					   	
					     <option value="{{ $cidade[0]->id }}">{{ $cidade[0]->nome}} </option>
					   	</select>
					  </div>
					</div>

					<!-- Aviso sobre o tipo de arquivo -->
					<div class="form-group">
					<div class="col-md-4"></div>
					  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Por favor.</strong> Carregue os arquivos abaixo no formato PDF.
					  	Para substituir o arquivo atual carregue um novo arquivo.
					  </div>
					 </div>

					<!-- Botão de Arquivo --> 
					<div class="form-group" id="mensagemtcc">
					  <label class="col-md-4 control-label" for="filebutton">Cópia Salva do TCC/Monografia/Pesquisa: </label>
					  <div class="col-md-4">
					  		@if($formacao->arquivotcc == null)
					  		<p> Este arquivo não foi enviado. </p>
					  		@else
					  		{{ $formacao->arquivotcc }}
					  		@endif
					  </div>
					  <div class="col-md-4">
					    <input id="arquivotcc" name="arquivotcc" class="input-file" type="file" />
					  </div>
					</div>


					<!-- Botão de Arquivo --> 
					<div class="form-group" id="mensagemcertificado">
					  <label class="col-md-4 control-label" for="filebutton">Certificado de conclusão: </label>
					  <div class="col-md-4">
					  		@if($formacao->certificado == null)
					  		<p> Este arquivo não foi enviado. </p>
					  		@else
					  		{{ $formacao->certificado }}
					  		@endif
					  </div>
					  <div class="col-md-4">
					    <input id="certificado" name="certificado" class="input-file" type="file"> 
					  </div>
					</div>

					<!-- Campo Atividades-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Atividades Desenvolvidas:</label>  
					  <div class="col-md-4">
					  <textarea id="atividades" name="atividades" type="text" placeholder="Descreva aqui suas experiências obtidas durante o curso em questão" class="form-control input-md" required="">{{ $formacao->atividades }}</textarea>
					  </div>
					</div>

					<!-- Carga Horária-->
					<div class="form-group">
			
                <label class="col-md-4 control-label" for="ano">Carga horária:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <input name="cargahoraria" id="cargahoraria" onkeyup="somenteNumeros(this);" maxlength="5" class="form-control" type="text" value="{{ $formacao->cargahoraria }}" placeholder="Apenas números">
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
                </div>
      			  </div>
					

				

				<!-- Botão -->
					<div class="form-group">
					  
					  <div class="col-md-4">
					    <button id="editar" name="editar" class="btn btn-primary" type="submit">Salvar alterações</button>

					   
					    
					  </div>
					</div>


		</fieldset>

</form>


@endsection


@section('extrascript')

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

<!-- Carregar cidades baseadas no estado escolhido -->
<script type = "text/javascript" language = "javascript">
        $('#estado').on('change',function () {
            var idEstado = $(this).val();
            $.get('/associado/ajax/' + idEstado, function (cidades) {
                 $('#cidade').empty();
            var i =0;
      
                $.each(cidades, function (key, cidade) {
                	
                	var size = cidade.length;
                	while(i < size){
                		i++;
                	}          
                   
                });
            });
        });
      </script>	
<!-- Verificar tipo de arquivo a ser enviado -->
  <script type = "text/javascript" language = "javascript">
  		var i=0;
  		var i2=0;
        $('#arquivotcc').on('change',function () {
            var tcc = $(this).val();
            var formato = '';
            
            var limite = tcc.length - 3;
            while(limite < tcc.length)
            {
            	formato = formato + tcc[limite];
            	limite++;
            }
      		
      		if(formato != 'pdf'){
      			if(i < 1){
      			$("#mensagemtcc").append('<div id="tccmensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> O arquivo TCC não é do tipo PDF</div>');
      			i = i + 1;
      			}
      			$("#arquivotcc").val('');
      		}else{
      			document.getElementById("tccmensagem").remove();
      		}
      		
        });

        $('#certificado').on('change',function () {
            var certificado = $(this).val();
            var formato = '';
            var limite = certificado.length - 3;
            while(limite < certificado.length)
            {
            	formato = formato + certificado[limite];
            	limite++;
            }
      		
      		if(formato != 'pdf'){
  
      			if(i2 < 1){
      			$("#mensagemcertificado").append('<div id="certificadomensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> O arquivo de Certificado não é do tipo PDF</div>');
      			i2++;
      		}
      			$("#certificado").val('');
      		}else{
      			document.getElementById("certificadomensagem").remove();
      		}
      		
        });
      </script>	


@endsection