<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.admin._head')
    
    @section('titulo', 'Este(a) associado(a) não está em dia com a associação')

</head>
<body>

    <div id="wrapper">
  
        <div id="page-wrapper">

            <div class="container-fluid">
                 @include('partials._mensagens')
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('titulo')
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa "></i> @yield('titulo')
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               
                <h2> Seu registro está inativo ou definitivamente desativado. </h2>

                <strong> Seus previlégios dentro da associação foram revogados.</strong>

                <p>Você não possui mais acesso:</p>
                <ul class="list-group">
                    <li class="list-group-item"> Ao Forum </li>
                    <li class="list-group-item"> Ao sistema da APEMESP </li>
                    <li class="list-group-item"> À busca de seu nome em nossa ferramenta de localização de musicoterapeutas </li>
                    <li class="list-group-item"> Aos dados previamente fornecidos </li>
                </ul>
                <div class="alert alert-danger">
                <p>Para regularizar sua situação por favor entre em contato</p>
                </div>
                <h3> Formas de contato: </h3>
                <p> Nos envie uma <a href="{{ url('/contato/mensagens') }}">mensagem</a></p>
                <p> Nos envie um e-mail: contato@apemesp.com </p>
                <p> <a href="{{ url('contato/localizacao ')}}">Pessoalmente</a> </p>
                <p>Nossos atendimentos funcionam diáriamente das 08:00 às 17:00 </p>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('partials.admin._scripts')
    
    @yield('extrascript')
</body>

</html>
