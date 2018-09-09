

@extends('admin.dashboard')
@section('titulo', 'Editar Item do Rodapé')
@section('conteudo')
<form method="POST"  action="{{ url('/admin/paginas/footer/') }}/{{ $footer->id }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <!-- Botão de Arquivo para Imagem -->
   <br />
   <div class="form-group">
      <label class="col-md-4 control-label" for="img">Imagem Atual: </label>
      <img src="{{ url('/images/footer')}}/{{ $footer->imagem }}" style="width: 20%; heigth: 25%;">
      <hr>
   </div>
   <div class="form-group" id="mensagem">
      <label class="col-md-4 control-label" for="filebutton">Alterar Imagem: </label>
      <div class="col-md-4">
         <input id="imagem" name="imagem" class="input-file" type="file" required>
      </div>
      <hr>
   </div>
   <br />
   <!-- Campo Link -->
   <div class="form-group">
      <label class="col-md-4 control-label" for="titulo">Link:</label>
      <div class="col-md-4">
         <input id="titulo" name="link" type="text" placeholder="URL de redirecionamento para o site do parceiro" class="form-control input-md" required="" value="{{ $footer->link }}">
      </div>
   </div>
   <br />
   <br />
   <div class="form-group">
      <label class="col-md-4 control-label" for="formato">Formato:</label>
      <div class="col-md-4">
         <select name="formato" id="formato">
            <option value="1"> Quadrado </option>
            <option value="2"> Retangular </option>
         </select>
      </div>
   </div>
   <hr>
   <div class="form-group">
      <label class="col-md-4 control-label" for="salvar"></label>
      <button type="submit" id="salvar" class="btn btn-success"> Salvar Item do Rodapé</button>
   </div>
</form>
@endsection

