@extends('main')

@section('titulo', '| Mensagens')

@section('extrastyle')
<style type="text/css">
.fundo{
    background: right no-repeat url({{ url('/images/contato/mensagens/notas.png') }});
}

.nota{
     background: right no-repeat url({{ url('/images/contato/mensagens/nota.ico') }});
}

</style>
@endsection

@section('conteudo')

 <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    Entre em Contato
                    </h2>
                    <hr>
                    <p>Tem alguma dúvida, sugestão ou quer entrar em contato conosco? </p>
                    <p>Envie uma mensagem!! Agradecemos o contato!</p>
                    <form role="form" action="/send" method="POST">
                    {{ csrf_field() }}
                    <p>Obs: Se você está procurando por um musicoterapeuta, por favor, utilize o canal <a href="{{ url('encontreummt') }}">Consulte um Musicoterapeuta</a>.</p>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nome</label>
                                <input type="text" value="@if ((Auth::user()) !== null ) {!! Auth::user()->name !!} @endif" class="form-control nota " placeholder="Nome Completo" id="nome" name="nome" required data-validation-required-message="Por favor insira seu nome.">
                            <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Endereço de Email</label>
                                 <input type="email" value="@if ((Auth::user()) !== null ) {!! Auth::user()->email !!} @endif" class="form-control nota " placeholder="Endereço de e-mail" id="email" name="email" required data-validation-required-message="Por favor insira seu e-mail.">
                            <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Numero de Telefone</label>
                                <input type="number" class="form-control nota " placeholder="Numero com DDD (XX)" id="telefone" name="telefone" required data-validation-required-message="Por favor insira seu telefone.">
                            <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group col-lg-4">
                                <label>Assunto</label>
                                <select id="assunto" name="assunto" class="form-control">
                        @foreach($assuntos as $assunto)
                          <option value="{{ $assunto->id }}">{{ $assunto->assunto }}</option>
                         @endforeach
                        </select>
                            <p class="help-block text-danger"></p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control fundo " placeholder="Digite sua mensagem aqui" id="mensagem" name="mensagem" required data-validation-required-message="Por favor insira uma mensagem."></textarea>
                            <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection


@section('extrascript')

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

@endsection