

@extends('admin.dashboard')
@section('titulo', 'Manutenão de páginas')
@section('conteudo')
<div class="row">
   <div class="col-md-10">
      <div class="row">
         <div class="col-lg-12">
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
                        <td>Literatura</td>
                        <td>Adicione ou edite itens para a página: <a href="{{ url('/musicoterapia/literatura')}}"> {{ url('/musicoterapia/literatura')}}</a></td>
                        <td><a class="btn btn-default" href="/admin/paginas/adicionar/literatura">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/literaturas')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Materiais informativos</td>
                        <td>Adicione ou edite itens para a página: <a href="{{ url('/musicoterapia/materiais')}}"> {{ url('/musicoterapia/materiais')}}</a></td>
                        <td><a class="btn btn-default" href="/admin/paginas/adicionar/material">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/material')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Conquistas</td>
                        <td>Adicionar ou editar item para a página: <a href="{{ url('/musicoterapia/conquistas')}}"> {{ url('/musicoterapia/conquistas')}}</a></td>
                        <td><a class="btn btn-default" href="/admin/paginas/adicionar/conquista">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/conquistas')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Formações</td>
                        <td>Adicionar ou editar item para a página: <a href="{{ url('/musicoterapia/formacao')}}"> {{ url('/musicoterapia/formacao')}}</a></td>
                        <td><a class="btn btn-default" href="/admin/paginas/adicionar/formacao">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/formacoes')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Comissões</td>
                        <td>Adicionar a comissão ou editar comissões existentes<a href="{{ url('/apemesp/comissoes')}}"> {{ url('/apemesp/comissoes')}}</a></td>
                        <td><a class="btn btn-warning" href="{{ url('/admin/paginas/adicionar/comissao')}}">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/comissoes')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Linha do tempo</td>
                        <td>Adicionar ou editar itens da linha do tempo<a href="{{ url('/musicoterapia/linhadotempo')}}"> {{ url('/apemesp/comissoes')}}</a></td>
                        <td><a class="btn btn-warning" href="{{ url('/admin/paginas/adicionar/linhadotempo')}}">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/linhadotempo')}}">Visualizar itens existentes</a></td>
                     </tr>
                     <tr>
                        <td>Parceiros no rodapé da página</td>
                        <td>Adicionar ou editar icones de parceiros no rodapé da página</td>
                        <td><a class="btn btn-warning" href="{{ url('/admin/paginas/adicionar/footer')}}">Adicionar</a></td>
                        <td><a class="btn btn-info" href="{{ url('/admin/paginas/footer')}}">Visualizar itens existentes</a></td>
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
      <div class="row">
         <div class="col-lg-10">
            <h2>Manutenção de propagandas</h2>
            <div class="table-responsive">
               <table class="table table-hover table-striped">
                  <thead>
                     <tr>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           Quantidade de propagandas ativas:
                           <form action="{{ url('/admin/paginas/propagandaativa') }}" method="POST">
                              {{ csrf_field() }}
                              <input size="1" name="quantidade" id="quantidade" value="{{ $propagandasAtivas[0]->quantidade }}">
                              <button>ok</button>
                           </form>
                        </td>
                     </tr>
                     <tr>
                        <td><a href="{{ url('/admin/paginas/adicionar/propaganda') }}" class="btn btn-success btn-block">Adicionar uma nova propaganda</a></td>
                     </tr>
                     <tr>
                        <td><a href="{{ url('/admin/paginas/propagandas/') }}" class="btn btn-info btn-block">Visualizar propagandas existentes</a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

