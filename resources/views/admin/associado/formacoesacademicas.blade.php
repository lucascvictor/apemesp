@extends('admin.dashboard')

@section('titulo', 'Dados Acadêmicos')


@section('conteudo')


<fieldset>
	<legend> Lista de formações adicionadas</legend>
	<div class="row">
	<div class="col-md-10">
		


		<div class="row">
                    <div class="col-lg-10">
                       
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Instituição</th>
                                        <th>Titulo</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($formacoes as $formacao)
								<tr>
                                        <td>{{ $formacao->nomeies }}</td>
                                        <td>{{ $formacao->titulo }}</td>
                                        <td><a class="btn btn-default" href="{{ url('/associado/formacao/edit/') }}/{{ $formacao->id }}">Editar</a></td>
                                        <td><a class="btn btn-primary" href="{{ url('/associado/formacao/') }}/{{ $formacao->id }}">Visualizar Formação</a></td>
                                 </tr>
                                 @endforeach
								
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
		<p> {{ $formacoes->links() }}</p>
	</div>
</fieldset>


<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/dadosacademicos')}}" >
		<fieldset>
		{{ csrf_field() }}
				
				<legend>Formação Acadêmica</legend>

				<div class="form-group">
                                <label class="col-md-4 control-label">Categorias: </label>
                                <label class=" radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="1" checked="">Graduação
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="2">Especialização
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="3">Mestrado
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="4">Doutorado
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="id_categoria_formacao" id="id_categoria_formacao" value="5">Outros
                                </label>
                           
                </div>


				<!-- Campo IES -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nomeies">Nome da IES:</label>  
					  <div class="col-md-4">
					  <input id="nomeies" name="nomeies" type="text" placeholder="Instituição de Ensino" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Campo Titulo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="titulo">Titulo:</label>  
					  <div class="col-md-4">
					  <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">
					  </div>
					</div>

				<!-- Ano de conclusão -->
					<div class="form-group">
			
                <label class="col-md-4 control-label" for="ano">Ano de Conclusão/ Previsão:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <input name="anodeconclusao" id="anodeconclusao" onkeyup="somenteNumeros(this);" maxlength="4" class="form-control" type="text" value="">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
      			  </div>
        
        <!-- Campo Titulo do TCC -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Titulo do TCC:</label>  
					  <div class="col-md-4">
					  <input id="titulotcc" name="titulotcc" type="text" placeholder="TCC" class="form-control input-md" required="">

					  </div>
					</div>

		<!-- Estado -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="selectbasic">Estado</label>
					  <div class="col-md-4">
					    <select id="id_estado" name="id_estado" class="form-control">
					    @foreach($estados as $estado)
					      <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
					     @endforeach
					    </select>
					  </div>
					</div>

				<!-- Cidade -->
					<div class="form-group">
					 <label class="col-md-4 control-label" for="selectbasic">Cidade</label>
					  <div class="col-md-4">
					    <select id="id_cidade" name="id_cidade" class="form-control">
					   	@foreach($cidades as $cidade)
					      <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
					     @endforeach
					   	</select>
					  </div>
					</div>

					<!-- Aviso sobre o tipo de arquivo -->
					<div class="form-group">
					<div class="col-md-4"></div>
					  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Por favor.</strong> Carregue os arquivos abaixo no formato PDF.
					  </div>
					 </div>

					<!-- Botão de Arquivo --> 
					<div class="form-group" id="mensagemtcc">
					  <label class="col-md-4 control-label" for="filebutton">Cópia do TCC/Monografia/Pesquisa: </label>
					  <div class="col-md-4">
					    <input id="arquivotcc" name="arquivotcc" class="input-file" type="file"> 
					  </div>
					</div>

					<!-- Botão de Arquivo --> 
					<div class="form-group" id="mensagemcertificado">
					  <label class="col-md-4 control-label" for="filebutton">Certificado de conclusão: </label>
					  <div class="col-md-4">
					    <input id="certificado" name="certificado" class="input-file" type="file"> 
					  </div>
					</div>

					<!-- Campo Atividades-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Atividades Desenvolvidas:</label>  
					  <div class="col-md-4">
					  <textarea id="atividades" name="atividades" type="text" placeholder="Descreva aqui suas experiências obtidas durante o curso em questão" class="form-control input-md" required="">
					  	</textarea>
					  </div>
					</div>

					<!-- Carga Horária-->
					<div class="form-group">
			
                <label class="col-md-4 control-label" for="ano">Carga horária:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <input name="cargahoraria" id="cargahoraria" onkeyup="somenteNumeros(this);" maxlength="5" class="form-control" type="text" value="" placeholder="Apenas números">
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
                </div>
      			  </div>
					

				

				<!-- Botão -->
					<div class="form-group">
					  
					  <div class="col-md-4">
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Adicionar</button>
					  </div>
					</div>


		</fieldset>
</form>

<form class="form-horizontal" action="{{ url('/associado/dadosacademicos/categoria')}}" method="POST">
		<fieldset>
    {{ csrf_field() }}
				
				<legend>Sua classificação</legend>
        <center>
				<div class="form-group">
					<div class="row">
					  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Por favor.</strong> Selecione sua classificação atual seguindo seu nível acadêmico. Obs.: Mt. = Musicoterapeuta.
					  </div>
            </div>
            <div class="row">
            <div class="col-md-4 alert alert-success alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Categoria Atual:
             </strong> 
            </div>
            </div>
				</div>
        </center>
				<!-- Categorias -->
				<div class="form-group">
        
                                <label class="col-md-4 control-label" for="nome">Categorias:</label>  

					  <div class="col-md-4">
					  			<div class="radio">
                                    <label>
                                        <input type="radio" name="categoria" id="categoria" value="3">Mt.Estudante
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="categoria" id="categoria" value="1" checked="">Mt.Bacharel
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="categoria" id="categoria" value="2">Mt.Especialista
                                    </label>
                                </div>
                                
                                 <div class="radio">
                                    <label>
                                        <input type="radio" name="categoria" id="categoria" value="4">Colaborador
                                    </label>
                                </div>
                       </div>
                 </div>

                 
					<button class="btn btn-primary"> Salvar Categoria</button>
		</fieldset>
	</form>

@endsection

@section('extrascript')
<!--validar o campo somente numeros -->
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
        $('#id_estado').on('change',function () {
            var idEstado = $(this).val();
            $.get('/associado/ajax/' + idEstado, function (cidades) {
                 $('#id_cidade').empty();
            var i =0;
      
                $.each(cidades, function (key, cidade) {
                	
                	var size = cidade.length;
                	while(i < size){
                		$('#id_cidade').append('<option value=' + cidade[i].id + '>' + cidade[i].nome + '</option>');
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