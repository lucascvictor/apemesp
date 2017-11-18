@extends('admin.dashboard')

@section('titulo', 'Formação')


@section('conteudo')


<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/formacao/', $formacao->id )}}">
{{ csrf_field() }}
		<fieldset>

	{{ csrf_field() }}

				<legend>Formação Acadêmica</legend>

				<div class="form-group">
                                <label class="col-md-4 control-label">Categoria: </label>
                                <strong>
                                     @if($formacao->id_categoria_formacao == 1)
                                     <div class="col-md-4">Graduação</div>
                                     @endif
                                     @if($formacao->id_categoria_formacao == 2)
                                     <div class="col-md-4">Graduação</div>
                                     @endif
                                     @if($formacao->id_categoria_formacao == 3)
                                     <div class="col-md-4">Mestrado</div>
                                     @endif
                                     
                                </strong>

                </div>


				<!-- Campo IES -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nomeies">Nome da IES:</label>
					  <div class="col-md-4">
					  <label id="nomeies" name="nomeies" type="text" class="form-control input-md">
					  {{ $formacao->nomeies }}
					  </label>
					  </div>
					</div>

				<!-- Campo Titulo -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="titulo">Titulo:</label>
					  <div class="col-md-4">
					  <label id="titulo" name="titulo" type="text"  class="form-control input-md">
					  {{ $formacao->titulo }}
					  </label>
					  </div>
					</div>

				<!-- Ano de conclusão -->
					<div class="form-group">

                <label class="col-md-4 control-label" for="ano">Ano de Conclusão/ Previsão:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <label name="anodeconclusao" id="anodeconclusao" class="form-control" type="text">
                    {{ $formacao->anodeconclusao }}
                    </label>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
      			  </div>

        <!-- Campo Titulo do TCC -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Titulo do TCC:</label>
					  <div class="col-md-4">
					  <label id="titulotcc" name="titulotcc" type="text" class="form-control input-md">
					  {{ $formacao->titulotcc }}
					  </label>
					  </div>
					</div>

		<!-- Estado -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-4">
					    <select id="estado" name="estado" class="form-control" enabled="false">
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



					<!-- Botão de Arquivo -->
					<div class="form-group" id="mensagemtcc">
					  <label class="col-md-4 control-label" for="filebutton">Cópia Salva do TCC/Monografia/Pesquisa: </label>
					  <div class="col-md-4">
					  		<a href="/associado/download/{{ $formacao->arquivotcc }}"> TCC </a>
					  </div>

					</div>

					<!-- Botão de Arquivo -->
					<div class="form-group" id="mensagemcertificado">
					  <label class="col-md-4 control-label" for="filebutton">Certificado Salvo de conclusão: </label>
					  <div class="col-md-4">
					  		<a href="/associado/download/{{ $formacao->certificado }}"> Certificado </a>
					  </div>
					</div>

					<!-- Campo Atividades-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Atividades Desenvolvidas:</label>
					  <div class="col-md-4">
					  <label id="atividades" name="atividades" type="text">
					  {{ $formacao->atividades }}
					  	</label>
					  </div>
					</div>

					<!-- Carga Horária-->
					<div class="form-group">

                <label class="col-md-4 control-label" for="ano">Carga horária:</label>
                <div class="col-md-4">
                <div class="input-group" data-link-format="yyyy">
                    <label name="cargahoraria" id="cargahoraria" class="form-control" type="text">
                    {{ $formacao->cargahoraria }}
                    </label>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
                </div>
      			  </div>




				<!-- Botão -->
					<div class="form-group">

					  <div class="col-md-4">

					    <a id="singlebutton" name="singlebutton" class="btn btn-primary" href="{{ url('/associado/formacao/edit/') }}/{{ $formacao->id }}">Editar</a>

					     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

					    <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                  <div class="modal-content">
                                        <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Excluir Formação!</h4>
                                                </div>
                                                    <div class="modal-body">
                                                      <p>Deseja realmente excluir esta formação?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/associado/formacao/destroy/{{ $formacao->id }}" class="btn btn-danger btn-block">
                                                          Sim
                                                        </a>
                                              <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Não</button>
                                        </div>
                                  </div>

                            </div>
                      </div>

					  </div>
					</div>


		</fieldset>

</form>


@endsection
