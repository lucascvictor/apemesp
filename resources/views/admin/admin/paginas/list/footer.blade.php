

@extends('admin.dashboard')
@section('titulo', 'Itens do rodapé')
@section('extrastyle')

@endsection
@section('conteudo')
<div class="container">
   <div class="row">
      <div class="col-md-10">
         <fieldset>
         <legend>Materiais</legend>
         <table class="table table-hover table-striped">
            <thead>
               <tr>
                  <th> ID </th>
                  <th> Site</th>
                  <th> Imagem</th>
                  <th colspan="2"></th>
               </tr>
            </thead>
            <tbody>
               @foreach($footer as $item)
               <tr>
                  <td><b>{{ $item->id }}</b></td>
                  <td>
                    {{ $item->link }}
                  </td>
                  <td><b>{{ $item->imagem }}</b></td>
                  <td><a class="btn btn-default" href="{{ url('/admin/paginas/footer') }}/ {{ $item->id }}">Editar</a></td>
                  <td>
                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletar{{ $item->id }}">Deletar</button>
                     <div class="modal fade" id="deletar{{ $item->id }}" role="dialog">
                        <div class="modal-dialog">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <form class="form-horizontal" method="GET" action="{{ url('/admin/paginas/footer/destroy')}}/{{ $item->id}}">
                                 {{ csrf_field() }}
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Excluir Literatura!</h4>
                                 </div>
                                 <div class="modal-body">
                                    <p>Deseja realmente excluir esta footer?</p>
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
                  </td>
               </tr>
               @endforeach
               <a class="btn btn-success" href="/admin/paginas/adicionar/footer">Adicionar Item para o rodapé</a>
            </tbody>
         </table>
         {{ $footer->setPath('')->render() }}
      </div>
   </div>
</div>
@endsection

