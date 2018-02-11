@extends('main')

@section('titulo', '| Mensagens')

@section('conteudo')

 <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    Reenvie o e-mail de confirmação
                    </h2>
                    <hr>
                    <p>O e-mail de confirmação contém o código único responsável pela validação da sua inscrição. </p>
                    <form role="form" action="/reenviarConfirmacao" method="POST">
                    {{ csrf_field() }}
                
                        <div class="row">

                            <div class="form-group col-lg-10">
                                <label>Endereço de Email</label>
                                 <input type="email" value="@if ((Auth::user()) !== null ) {!! Auth::user()->email !!} @endif" class="form-control " placeholder="Endereço de e-mail" id="email" name="email" required data-validation-required-message="Por favor insira seu e-mail.">
                            <p class="help-block text-danger"></p>
                            </div>
                          <br>
                        <div class="form-group col-lg-10">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
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