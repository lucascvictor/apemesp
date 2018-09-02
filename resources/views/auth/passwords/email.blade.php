@extends('main')

@section('conteudo')

    <div class="row">

            <div class="panel panel-default">
                <div class="panel-heading">Esqueci a senha</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/enviarreset">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Endereço de e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="teste btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Enviar link de alteração
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </script>
@endsection
