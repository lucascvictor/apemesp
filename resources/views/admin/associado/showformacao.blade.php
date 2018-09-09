@extends('admin.dashboard')

@section('titulo', 'Formação')


@section('conteudo')


<form class="form-horizontal" >


				<legend>Formação Acadêmica</legend>

				<div class="form-group">
                                <label class="col-md-4 control-label">Categoria: </label>
                                <strong>
                                     @if($formacao->id_categoria_formacao == 1)
                                     <div class="col-md-4">Graduação</div>
                                     @endif
                                     @if($formacao->id_categoria_formacao == 2)
                                     <div class="col-md-4">Especialização</div>
                                     @endif
                                     @if($formacao->id_categoria_formacao == 3)
                                     <div class="col-md-4">Outros</div>
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
					  <p id="titulotcc" name="titulotcc" class="form-control ">
					  {{ $formacao->titulotcc }}
						</p>
					  </div>
					</div>
					<br />

		<!-- Estado -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="estado">Estado</label>
					  <div class="col-md-4">
					    @foreach($estados as $estado)
					      <strong>
					      <?php if($formacao->id_estado == $estado->id)
					      {
					      	echo $estado->nome;

					      } ?>
							</strong>
					     @endforeach
					  </div>
					</div>

				<!-- Cidade -->
					<div class="form-group">
					 <label class="col-md-4 control-label" for="cidade">Cidade</label>
					  <div class="col-md-4">

					     <strong >{{ $cidade[0]->nome}} </strong>

					  </div>
					</div>



					<!-- Botão de Arquivo -->
					<div class="form-group" id="mensagemtcc">
					  <label class="col-md-4 control-label" for="filebutton">Cópia Salva do TCC/Monografia/Pesquisa: </label>
					  <div class="col-md-4">
					  		<a href="/associado/download/@if(empty($formacao->arquivotcc))tcc.pdf @else{{ $formacao->arquivotcc }}@endif"> TCC </a>
					  </div>

					</div>

					<!-- Botão de Arquivo -->
					<div class="form-group" id="mensagemcertificado">
					  <label class="col-md-4 control-label" for="filebutton">Certificado Salvo de conclusão: </label>
					  <div class="col-md-4">
					  		<a href="/associado/download/@if(empty($formacao->certificado)) certificado.pdf @else{{ $formacao->certificado }} @endif"> Certificado </a>
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
																		<form class="form-horizontal" method="GET" action="{{ url('/associado/formacao')}}/{{ $formacao->id}}">
																		 {{ csrf_field() }}
                                        <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Excluir Formação!</h4>
                                                </div>
                                                    <div class="modal-body">
                                                      <p>Deseja realmente excluir esta formação?</p>
                                                    </div>
                                                    <div class="modal-footer">
																											<a href="#" class="btn btn-info btn-block" data-dismiss="modal">
																												Não
																											</a>
                                              			<button class="btn btn-danger btn-block">Sim</button>
                                        					</div>
																			</form>
                                  </div>

                            </div>

                      </div>

					  </div>
					</div>


		</fieldset>




@endsection
