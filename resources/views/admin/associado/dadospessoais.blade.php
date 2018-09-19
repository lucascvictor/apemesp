@extends('admin.dashboard')

@section('titulo', 'Cadastro e Edição de dados pessoais')


@section('conteudo')

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/dadospessoais')}}">

  {{ csrf_field() }}
    <fieldset>
        <legend>Dados Pessoais</legend>
        <!-- Aviso sobre o tipo de arquivo -->
          <div class="form-group">
            <div class="col-md-4"></div>
              <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Por favor.</strong> Carregue a imagem abaixo no formato JPG.
              </div>
           </div>

        <!-- Botão de Arquivo -->
          <div class="form-group" id="mensagem">
            <label class="col-md-4 control-label" for="filebutton"><span style="color:red;">*</span>Foto do perfil: </label>
            <div class="col-md-4">
              <input id="foto" name="foto" class="input-file" type="file" required="">
            </div>
          </div>
        <!-- Campo Nome -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="name"><span style="color:red;">*</span>Nome Completo:</label>
            <div class="col-md-4">
            <input id="name" name="name" type="text" placeholder="Nome" class="form-control input-md" required="">
            </div>
          </div>

        <!-- Campo Nascimento -->
          <div class="form-group">

                <label class="col-md-4 control-label" for="nascimento"><span style="color:red;">*</span>Data de Nascimento:</label>
                <div class="col-md-4">
                <input name="nascimento" id="nascimento" placeholder="ano-mes-dia" class="form-control" type="date" value="" required="">

                </div>
              </div>

        <!-- Nascionalidade -->

          <div class="form-group">
            <label class="col-md-4 control-label" for="nacionalidade">Nacionalidade</label>
            <div class="col-md-4">
              <select id="nacionalidade" name="nacionalidade" class="form-control" required="">
              @foreach($nacionalidades as $nacionalidade)
                <option value="{{ $nacionalidade->id }}">{{ $nacionalidade->nacionalidade }}</option>
               @endforeach
              </select>
            </div>
          </div>


          <!-- RG -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="rg">RG:</label>
            <div class="col-md-4">
            <input id="rg" name="rg" type="text" maxlength="12" placeholder="Registro Geral" class="form-control input-md" required="">
            </div>
          </div>

          <!-- CPF -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="cpf"><span style="color:red;">*</span>CPF:</label>
            <div class="col-md-4">
            <input id="cpf" name="cpf" type="number" maxlength="11" placeholder=" CPF (somente numeros) " class="form-control input-md" required="">
            </div>
          </div>



        <legend>Dados de contato</legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="facebook"><span class="fa fa-facebook"></span></label>
            <div class="col-md-4">

            <input id="facebook" name="facebook" type="text" placeholder="facebook.com/seuperfil" class="form-control">

            </div>
          </div>

        <!-- CEP -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="cep"><span style="color:red;">*</span>CEP:</label>
            <div class="col-md-4">
            <input id="cep" name="cep" type="text" placeholder="CEP" class="form-control input-md" required="">
            </div>
          </div>

        <!-- Endereço -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="endereco">Endereço:</label>
            <div class="col-md-4">
            <input id="endereco" name="endereco" type="text" placeholder=" Endereço " class="form-control input-md" required="">
            </div>
          </div>

        <!-- Complemento -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="complemento">Complemento:</label>
            <div class="col-md-4">
            <input id="complemento" name="complemento" type="text" placeholder=" Compl. " class="form-control input-md">
            </div>
          </div>

          <!-- Bairro -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">Bairro:</label>
              <div class="col-md-4">
              <input readonly="true" id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control input-md" required="">
              </div>
            </div>

          <!-- Cidade  -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">Cidade:</label>
              <div class="col-md-4">
              <input readonly="true" id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">
              </div>
            </div>
            <input id="codCidade" name="codCidade" type="hidden"> </input>

            <!-- Estado -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="estado">Estado:</label>
                <div class="col-md-4">
                <input readonly="true" id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="">
                </div>
              </div>

        <legend>Numeros de Telefones</legend>

    

        <!-- Celular -->
          <div class="form-group">
           <label class="col-md-4 control-label" for="selectbasic"><span style="color:red;">*</span>Tel. Celular</label>
            <div class="col-md-4">
              <input id="tel_celular" name="tel_celular" type="number" maxlength="11" class="form-control" required="">

            </div>
          </div>

        <!-- Residencial -->
          <div class="form-group">
           <label class="col-md-4 control-label" for="selectbasic">Tel. Residêncial</label>
            <div class="col-md-4">
              <input id="tel_residencial" name="tel_residencial" type="number" maxlength="11" class="form-control">
            </div>
          </div>


        <!-- Botão -->
          <div class="form-group">

            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-primary">Salvar</button>
            </div>
          </div>


    </fieldset>
</form>

@endsection


@section('extrascript')

<script type="text/javascript">
  var i = 0;
  $('#foto').on('change',function () {
            var foto = $(this).val();
            var formato = '';
            var limite = foto.length - 3;
            while(limite < foto.length)
            {
              formato = formato + foto[limite];
              limite++;
            }

          if(formato != 'jpg'){

            if(i < 1){
            $("#mensagem").append('<div id="fotomensagem" class=" alert alert-danger" role="alert"><strong>Cuidado:</strong> Esta imagem não é do tipo JPG</div>');
            i++;
          }
            $("#foto").val('');
          }else{
            document.getElementById("fotomensagem").remove();
          }

        });
</script>



<script type = "text/javascript" language = "javascript">
        $('#estado').on('change',function () {
            var idEstado = $(this).val();
            $.get('/associado/ajax/' + idEstado, function (cidades) {
                 $('#cidade').empty();
            var i =0;

                $.each(cidades, function (key, cidade) {

                  var size = cidade.length;
                  while(i < size){
                    $('#cidade').append('<option value=' + cidade[i].id + '>' + cidade[i].nome + '</option>');
                    i++;
                  }

                });
            });
        });
</script>


 <!-- Adicionando Javascript para busca de CEP -->
<script type="text/javascript" >

  $(document).ready(function() {

      function limpa_formulário_cep() {
          // Limpa valores do formulário de cep.
          $("#endereco").val("");
          $("#bairro").val("");
          $("#cidade").val("");
          $("#estado").val("");
          $("#codCidade").val("");
      }

      //Quando o campo cep perde o foco.
      $("#cep").blur(function() {

          //Nova variável "cep" somente com dígitos.
          var cep = $(this).val().replace(/\D/g, '');

          //Verifica se campo cep possui valor informado.
          if (cep != "") {

              //Expressão regular para validar o CEP.
              var validacep = /^[0-9]{8}$/;

              //Valida o formato do CEP.
              if(validacep.test(cep)) {

                  //Preenche os campos com "..." enquanto consulta webservice.
                  $("#endereco").val("...");
                  $("#bairro").val("...");
                  $("#cidade").val("...");
                  $("#estado").val("...");
                  $("#codCidade").val("...");

                  //Consulta o webservice viacep.com.br/
                  $.getJSON("http://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                      if (!("erro" in dados)) {
                          //Atualiza os campos com os valores da consulta.
                          $("#endereco").val(dados.logradouro);
                          $("#bairro").val(dados.bairro);
                          $("#cidade").val(dados.localidade);
                          $("#estado").val(dados.uf);
                          $("#codCidade").val(dados.ibge);
                      } //end if.
                      else {
                          //CEP pesquisado não foi encontrado.
                          limpa_formulário_cep();
                          alert("CEP não encontrado.");
                      }
                  });
              } //end if.
              else {
                  //cep é inválido.
                  limpa_formulário_cep();
                  alert("Formato de CEP inválido.");
              }
          } //end if.
          else {
              //cep sem valor, limpa formulário.
              limpa_formulário_cep();
          }
      });
  });
 </script>

@endsection
