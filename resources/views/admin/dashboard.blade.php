<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.admin._head')
    @yield('extrastyle')
</head>
<body>

    <div id="wrapper">


    @include('partials.admin._nav')



        <div id="page-wrapper">

            <div class="container-fluid">
                 
                 @if ($errors->any())
                    <div class="alert alert-danger" id="#noprint">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-4">
                        @if(Session::has('sucesso'))
                           <div class="alert alert-success" role="alert">
                              <a class="close" data-dismiss="alert">×</a>
                              <strong> {!!Session::get('sucesso')!!} </strong>
                           </div>
                        @elseif (Session::has('cuidado'))
                           <div class="alert alert-danger" role="alert">
                              <a class="close" data-dismiss="alert">×</a>
                              <strong> {!!Session::get('cuidado')!!} </strong>
                           </div>
                        @endif
                  </div>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('titulo')
                        </h1>
                        <ol class="breadcrumb" id="#noprint">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="javascript:history.back()">Voltar</a>
                            </li>
                            <li class="active">
                                <i class="fa "></i> @yield('titulo')
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                @yield('conteudo')

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
