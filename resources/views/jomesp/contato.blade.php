@extends('jomesp.layout')

@section('extrastyle')




@endsection

@section('conteudo')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Entre em
                        <strong>contato</strong>
                    </h2>
                    <hr>
                    <p>Entre em contato conosco. Tentaremos responder o mais brevepossível.</p>
                    <form role="form" action="{{ url('/send') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" required="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Endereço de e-mail</label>
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Telefone</label>
                                <input type="tel" name="telefone" class="form-control" required="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensagem</label>
                                <textarea class="form-control" name="mensagem" rows="6" required=""></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="assunto" value="jomesp">
                                <input type="hidden" name="pagina" value="jomesp">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
