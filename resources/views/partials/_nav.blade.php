

<?php use Apemesp\Apemesp\Repositories\Associado\DadosPessoaisRepository; ?>
<?php $dp = new DadosPessoaisRepository; ?>

<div id="header">
   <!-- LOGOTIPO -->
   <div class="logotipo_header">
      <a href="{{ url('/') }}" title="APEMESP"><img src="{{ url('images/logo.png') }}" alt="APEMESP" title="APEMESP"></a>
   </div>
   <!-- LOGOTIPO -->
   @if(isset(Auth::user()->id))
   <div id="login_header2" class="borda">
      @if(Auth::user()->id_perfil == 1)
      <a href="{{ url('/admin') }}">
         <p style="font-size: 12px;">Área do<br />Administrador</p>
      </a>
      {{  Html::image('public/images/perfis/admin.png',  '', array('style' => 'width: 60px; height: 60px;', 'class' => 'img-circle')) }}
      @elseif(Auth::user()->id_perfil == 2)
      <a href="{{ url('/admin') }}">
         <p style="font-size: 12px;">Área do<br />Redator</p>
      </a>
      {{  Html::image('public/images/perfis/redator.png',  '', array('style' => 'width: 70px; height: 70px;', 'class' => 'img-circle')) }}
      @elseif(Auth::user()->id_perfil > 2)
      <?php $cpf = $dp->getCpf(Auth::user()->id); ?>
      @if (empty($cpf[0]))
      <a href="{{ url('/admin') }}">
         <p style="font-size: 12px;">Área do<br />Associado</p>
      </a>
      {{  Html::image('public/files/apemesp' . 'foto.png',  '', array('style' => 'width: 70px; height: 70px;', 'class' => 'img-circle')) }}
      @else
      <a href="{{ url('/admin') }}">
         <p style="font-size: 12px;">Área do<br />Associado</p>
      </a>
      {{  Html::image('public/files/' . $cpf[0]->cpf . '/' . 'foto.jpg',  '', array('style' => 'width: 70px; height: 70px;', 'class' => 'img-circle')) }}
      @endif
      @endif
      <a href="{{ url('/logout')}}" title="Sair">Sair</a>
   </div>
   @else
   <!-- ÁREA DO CLIENTE -->
   <div id="login_header2" class="borda" >
      <h2>Área do<br />Associado</h2>
      <form method="POST" action="{{ url('/login') }}">
         {{ csrf_field() }}
         <input type="text" name="email"placeholder="E-mail" required=""/>
         <input type="password" name="password" placeholder="Senha" required=""/>
         <br>
         <button type="submit" class="badge badge-primary"  style="margin: 5px;">Entrar</button>
         <br>
         <a href="{{ url('/register')}}" title="Associe-se">Associe-se</a>
      </form>
   </div>
   <!-- ÁREA DO CLIENTE -->
   @endif
   <!-- MENU -->
   <nav class="navbar navbar-default">
      <div class="navbar-header" style="float: left; margin-left: 2%;">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color: #92BCCC; border-radius:50%; border: solid 5px #C4FAE3; width:60px; height:60px;">
            <center>
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar" style="background-color: #D9FFEB; height: 5px; width: 30px;"></span>
               <span class="icon-bar" style="background-color: #D9FFEB; height: 5px; width: 30px;"></span>
               <span class="icon-bar" style="background-color: #D9FFEB; height: 5px; width: 30px;"></span>
            </center>
         </button>
      </div>
      <div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse" aria-expanded="false" style="margin-left: 2%; ">
         <ul class="nav navbar-nav navbar-right">
            <li><a class="margem" href="{{ url('/') }}">Home</a></li>
            <li class="dropdown">
               <a class="margem" href="#" class="dropdown-toggle" data-toggle="dropdown"> A Apemesp <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="{{ url('/apemesp/quemsomos') }}">Quem Somos</a></li>
                  <li><a href="{{ url('/apemesp/estatuto') }}">Estatuto</a></li>
                  <li><a href="{{ url('/apemesp/comissoes') }}">Comissões</a></li>
                  <li><a href="{{ url('/register') }}">Associe-se</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a class="margem" href="#" class="dropdown-toggle" data-toggle="dropdown"> Musicoterapia <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="{{ url('/musicoterapia/oquee') }}">O que é?</a></li>
                  <li><a href="{{ url('/musicoterapia/formacao') }}">Formação</a></li>
                  <li><a href="{{ url('/musicoterapia/conquistas') }}">Conquistas</a></li>
                  <li><a href="{{ url('/musicoterapia/materiais') }}">Materiais Informativos</a></li>
                  <li><a href="{{ url('/musicoterapia/literatura') }}">Literatura</a></li>
                  <li><a href="{{ url('/musicoterapia/linhadotempo') }}">Linha do tempo da Mt em SP</a></li>
               </ul>
            </li>
            <li><a class="margem" href="{{ url('/agenda') }}"> Agenda</a></li>
            @if(isset(Auth::user()->id))
            <li><a class="margem" href="{{ url('/forums') }}">Forum</a></li>
            @endif
            <li><a class="margem" href="{{ url('/jomesp') }}">Jomesp</a></li>
            <li><a class="margem" href="{{ url('/encontreummt') }}"> Encontre um MT</a></li>
            <li><a class="margem" href="{{ url('/contato/mensagens') }}">Contato</a></li>
         </ul>
      </div>
   </nav>
   <!-- MENU -->
</div>
@section('extrascript')
<script>
   (function($){
     $(document).ready(function(){
       $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
         event.preventDefault();
         event.stopPropagation();
         $(this).parent().siblings().removeClass('open');
         $(this).parent().toggleClass('open');
       });
     });
   })(jQuery);
</script>
@endsection




