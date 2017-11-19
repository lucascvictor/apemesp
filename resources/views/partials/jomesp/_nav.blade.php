<!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="{{ url('/jomesp') }}">JOMESP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <?php
                  $endereco = $_SERVER['REQUEST_URI'];
                  ?>
                    <li>
                        <a href="{{ url('/jomesp')}}" class="@if ($endereco == '/jomesp') active @endif">Inicio</a>
                    </li>

                    <li>
                        <a href="{{ url('/jomesp/sobre')}}" class="@if ($endereco == '/jomesp/sobre') active @endif">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="{{ url('/jomesp/edicoes')}}" class="@if ($endereco == '/jomesp/edicoes') active @endif">Edições</a>
                    </li>
                    <li>
                        <a href="{{ url('/jomesp/contato')}}" class="@if ($endereco == '/jomesp/contato') active @endif">Contato</a>
                    </li>
                     <li>
                        <a href="{{ url('/')}} ">APEMESP</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
