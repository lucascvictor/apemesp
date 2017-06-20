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
