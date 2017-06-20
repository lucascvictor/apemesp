@extends('admin.dashboard')

@section('titulo', 'Post Salvo')



@section('conteudo')

		
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $post->titulo  }}</h1>
				<p class="lead"> {!! $post->body !!} </p> 
				
			</div>	

			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Criado em:</dt>
						<dd>{{ $post->created_at }} </dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Ultima atualização em:</dt>
						<dd>{{ $post->updated_at }} </dd>
					</dl>
					<hr>
						<div class="row">
							<div class="col-sm-6">
								<a href=" /admin/posts/edit/{{ $post->id }}" class="btn btn-primary btn-block">Editar</a>
							</div>
							<div class="col-sm-6">
							<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Deletar</button>
								 <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                                  <div class="modal-content">
                                        <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Excluir post!</h4>
                                                </div>
                                                    <div class="modal-body">
                                                      <p>Deseja realmente excluir este post?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/posts/destroy/{{ $post->id }}" class="btn btn-danger btn-block">
                                                          Sim
                                                        </a>
                                              <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Não</button>
                                        </div>  
                                  </div>
                              
                            </div>
                      </div>
							</div>
						</div>
				</div>
			</div>
			<a href="{{ url('/admin/posts/create') }}">
{{ Form::button('Criar Novo Post', array('class' => 'btn btn-success btn-md btn-block')) }}
</a>
		</div>	
@endsection