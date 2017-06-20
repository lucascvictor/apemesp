@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')



<div class="row">
	<div class="col-md-10">


		<div class="row">
                    <div class="col-lg-10">
                        <h2>Adicionar conteudo para páginas principais</h2>
                     
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Página</th>
                                        <th>Descrição</th>
                                        <th colspan="2"> </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                              
								<tr>
                                        <td>Adicionar item para Literatura</td>
                                        <td>Adicione ou edite itens para a página <a href="{{ url('/musicoterapia/literatura')}}"> {{ url('/musicoterapia/literatura')}}</a></td>
                                        <td><a class="btn btn-default" href="/admin/paginas/adicionar/literatura">Adicionar</a></td>
                                        <td><a class="btn btn-info">Visualizar itens existentes</a></td>
                                </tr>
                                <tr>
                                        <td>Adicionar item para Conquistas</td>
                                        <td>Adicionar ou editar item para a página <a href="{{ url('/musicoterapia/conquistas')}}"> {{ url('/musicoterapia/conquistas')}}</a></td>
                                        <td><a class="btn btn-default">Adicionar</a></td>
                                        <td><a class="btn btn-info">Visualizar itens existentes</a></td>
                                </tr>
                                <tr>
                                        <td>Adicionar item para Formações</td>
                                        <td>Adicionar ou editar item para a página <a href="{{ url('/musicoterapia/formacao')}}"> {{ url('/musicoterapia/formacao')}}</a></td>
                                        <td><a class="btn btn-default">Adicionar</a></td>
                                        <td><a class="btn btn-info">Visualizar itens existentes</a></td>
                                </tr>
                                <tr>
                                        <td>Adicionar Comissão</td>
                                        <td>Adicionar acomissão ou editar comissões existentes<a href="{{ url('/apemesp/comissoes')}}"> {{ url('/apemesp/comissoes')}}</a></td>
                                        <td><a class="btn btn-warning">Adicionar</a></td>
                                        <td><a class="btn btn-info">Visualizar itens existentes</a></td>
                                </tr>
                                <tr>
                                        <td>Adicionar mebro de comissão</td>
                                        <td>Alterar a lista de membros por comissão<a href="{{ url('/apemesp/comissoes')}}"> {{ url('/apemesp/comissoes')}}</a></td>
                                        <td><a class="btn btn-warning">Adicionar</a></td>
                                        <td><a class="btn btn-info">Visualizar itens existentes</a></td>
                                </tr>
							
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
		
	</div>
	<div class="row">
     <div class="col-lg-10">
                        <h2>Editar páginas</h2>
                     
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>Página</th>
                                        <th>Localização</th>
                                        <th colspan="2"> </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                              
                                <tr>
                                        <td>Quem somos</td>
                                        <td> <a href="{{ url('/apemesp/quemsomos')}}"> {{ url('/apemesp/quemsomos')}}</a></td>
                                        <td><a href="{{ url('/admin/paginas/edit/1')}}"class="btn btn-primary btn-block">Editar</a></td>
                                      
                                </tr>
                               <tr>
                                        <td>Estatuto</td>
                                        <td> <a href="{{ url('/apemesp/estatuto')}}"> {{ url('/apemesp/estatuto')}}</a></td>
                                        <td><a href="{{ url('/admin/paginas/edit/2') }}" class="btn btn-primary btn-block">Editar</a></td>
                                      
                                </tr>
                                  <tr>
                                        <td>O que é musicoterapia?</td>
                                        <td> <a href="{{ url('/musicoterapia/oquee')}}"> {{ url('/musicoterapia/oquee')}}</a></td>
                                        <td><a href="{{ url('/admin/paginas/edit/3') }}" class="btn btn-primary btn-block">Editar</a></td>
                                      
                                </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
	
	</div>


</div>
</div>

@endsection