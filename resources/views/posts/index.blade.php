@extends('admin.dashboard')

@section('titulo', 'Lista de Posts')

@section('extrastyle')

<script>
  $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
  });
</script>

@endsection

@section('conteudo')
<a href="{{ url('/admin/posts/create') }}">
{{ Form::button('Criar Novo Post', array('class' => 'btn btn-success btn-md btn-block')) }}
</a>
<br>
<div class="row">
            <div class="col-md-4" style="float: right;">
               
                    {{ Form::open(['action' => ['Admin\PostController@search'], 'method' => 'GET']) }}
                    <div class="form-group input-group">
                    {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Procurar Posts', 'class' => 'form-control'])}}

                    <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></span>
                    </div>
                   {{ Form::close() }}
                
            </div>
<div class="col-lg-10 col-md-12">
                        <h2> Posts APEMESP </h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Criado em: </th>
                                        <th>Atualizado em:</th>
                                          
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach ($posts as $post)

                                	<tr>
                                        <td><a href="/admin/posts/show/{{$post->id}}">{{ $post->titulo }}</a></td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        
                                        <th> <a href="/admin/posts/edit/{{ $post->id }}" class="btn btn-primary btn-block">Editar</a> </th>
					

            <th>
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Deletar</button>

                      <!-- Modal -->
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
        </th>                                    
                                    </tr>

		 						
								@endforeach
                {{ $posts->render() }} 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>

<div class="row">
<div class="col-lg-10 col-md-12">
                        <h2> Posts JOMESP </h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Criado em: </th>
                                        <th>Atualizado em:</th>
                                          
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach ($postsjomesp as $postj)

                                  <tr>
                                        <td><a href="/admin/posts/show/{{$post->id}}">{{ $postj->titulo }}</a></td>
                                        <td>{{ $postj->name }}</td>
                                        <td>{{ $postj->created_at }}</td>
                                        <td>{{ $postj->updated_at }}</td>
                                        
                                        <th> <a href="/admin/posts/edit/{{ $postj->id }}" class="btn btn-primary btn-block">Editar</a> </th>
          

            <th>
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Deletar</button>

                      <!-- Modal -->
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
                                                        <a href="/posts/destroy/{{ $postj->id }}" class="btn btn-danger btn-block">
                                                          Sim
                                                        </a>
                                              <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Não</button>
                                        </div>  
                                  </div>
                              
                            </div>
                      </div>
        </th>                                    
                                    </tr>

                
                @endforeach
                {{ $postsjomesp->render() }} 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>

@endsection

@section('extrascript')

<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>s
<script type="text/javascript">
$(function()
  {
     $( "#q" ).search({
      source: "{{ url('/admin/posts/search') }}",
      minLength: 3,
      select: function(event, ui) {
        $('#q').val(ui.item.value);
      }
    });
  });
</script>
@endsection