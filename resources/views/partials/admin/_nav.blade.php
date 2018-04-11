

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">APEMESP</a>
   </div>
   <!-- Top Menu Items -->
   <ul class="nav navbar-right top-nav">
      <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
         <ul class="dropdown-menu message-dropdown">
            @include('partials.admin._mensagens')
         </ul>
      </li>
      <!--<li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
         <ul class="dropdown-menu alert-dropdown">
             <li>
                 <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
             </li>
             <li>
                 <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
             </li>
             <li>
                 <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
             </li>
             <li>
                 <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
             </li>
             <li>
                 <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
             </li>
             <li>
                 <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
             </li>
             <li class="divider"></li>
             <li>
                 <a href="#">View All</a>
             </li>
         </ul>
         </li> -->
      <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
         <ul class="dropdown-menu">
            <li>
               <a href="{{ url('/admin/perfil') }}"><i class="fa fa-fw fa-user"></i> Perfil</a>
            </li>
            <li>
               <a href="{{ url('/forums') }}"><i class="fa fa-fw fa-group"></i> Forum</a>
            </li>
            <li class="divider"></li>
            <li>
               <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Sair</a>
            </li>
         </ul>
      </li>
   </ul>
   <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
         <?php $pagina = $_SERVER['PHP_SELF']; //captura a pagina atual para posterior comparação na linha 136 ?>
         @foreach($menus as $menu) <!-- Transforma o primero array em um array só-->
         <?php $limite = (count($menu));
            $i = 0;
            // Conta quantidade de itens no array e inicia a variavel
            ?>
         <?php while($i < $limite){ //define o limite de itens do menu?>
         <?php
            $link = '/index.php'. $menu[$i]->link; //Monta o link de comparação para a classe active
            
            ?>
         @if ( $pagina == $link )
         <li class="active">
            @else
         <li>
            @endif
            <a href="{{ url($menu[$i]->link) }}"><i class="fa fa-fw {{ $menu[$i]->icone}}"></i> {{ $menu[$i]->titulo }}</a>
         </li>
         <?php $i++;} //Fim do loop while?>
         @endforeach
         <!--<li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
            </li>-->
      </ul>
   </div>
   <!-- /.navbar-collapse -->
</nav>

