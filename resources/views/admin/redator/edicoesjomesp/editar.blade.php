@extends('admin.dashboard')

@section('titulo', 'Manutenção de edições Jomesp')


@section('conteudo')

            <h4 class="modal-title">Editar publicação</h4>


<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/admin/edicoesjomesp')}}/{{ $edicao->id }}">

 {{ csrf_field() }}
     <!-- Botão de Arquivo para CPF -->

       <div class="form-group" id="mensagem1">

         <div class="form-group">
           <label class="col-md-4 col-sm-6 control-label" for="edicao">Edição: </label>
           <div class="col-md-4">
             <input id="edicao" name="edicao" value="{{ $edicao->edicao }}" />
             <br />
              <br />
            </div>
           </div>

           <div class="form-group">
           <label class="col-md-4 control-label" for="arquivoAnterior">Arquivo enviado anteriormente: </label>
           <div class="col-md-4">
             <input class="input" type="text" name="arquivoAnterior" value="{{ $edicao->arquivo }}" readonly="">
             <br />
             <a href="/admin/edicoesjomesp/download/{{ $edicao->arquivo }}">Dowload do arquivo anterior</a>
             <br />
             <br />
           </div>
           </div>
          <div class="form-group">
           <label class="col-md-4 control-label" for="edicao">Alterar o arquivo: </label>
           <div class="col-md-4">
             <input id="arquivo" name="arquivo" class="input-file" type="file">
             <br />
             </div>
           </div>
            <div class="form-group">
            <label class="col-md-4 control-label" for="linkExterno">Link externo: </label>
            <div class="col-md-4">
            <input id="linkexterno" name="linkexterno" class="input" type="text" value="{{ $edicao->linkexterno }}">
           <br />
         </div>
         </div>

       </div>
       <button class="btn btn-success" id="botao1">
         Salvar Alterações
       </button>
</form>

 @endsection
