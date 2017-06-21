@extends('main')

@section('titulo', '| Agenda')

@section('extrastyle')

	<?php
	  $server = $_SERVER['SERVER_NAME'];

	  $endereco = $_SERVER ['REQUEST_URI'];
	?>


	<meta property="og:url"           content="<?php echo "http://" . $server . $endereco;?>" />
    <meta property="og:type"          content="APEMESP" />
    <meta property="og:title"         content="{{ $post[0]->titulo  }}" />
    <meta property="og:description"   content="{{ $post[0]->subtitulo  }}" />
    <meta property="og:image"         content=" {{ url('/images/posts/imagens/previas') }}/{{ $post[0]->imagem_previa }} " />



@endsection

@section('conteudo')

@include('partials._mensagens')

		<div class="row">
			<div class="col-md-10">
		<fieldset>

						<legend><h1>{{ $post[0]->titulo  }}</h1></legend>

						<h4> {{ $post[0]->subtitulo }}</h4>

						<p class="lead"> {!! $post[0]->body !!} </p>
		</fieldset>
					</div>
				</div>






		<div class="row">
			<div class="col-md-4" style="float: right;">
			<hr>
			<div class="panel panel-default" style="float:right;">

			  <div class="panel-heading">Postagem</div>


			  <ul class="list-group">
			    <li class="list-group-item"><b>Autor: {{ $post[0]->name }}</b></li>
			    <li class="list-group-item"><b>Criado em: <?php

                        $data = new DateTime($post[0]->created_at);
                        echo $data->format('d-m-Y');

                        ?>
                        </b></li>
			    <li class="list-group-item"><b>Ultima atualização em: <?php

                        $data = new DateTime($post[0]->updated_at);
                        echo $data->format('d-m-Y');

                        ?></b></li>
			  </ul>
			</div>
		</div>
	</div>

			<div class="row">
			<div class="col-md-10">

			<div id="shareBtn" class="btn btn-primary clearfix"><i class="fa fa-facebook"></i>  Compartilhar</div>
			</div>


			@include('paginas.posts.comentarios');
			</div>
			</div>
		</div>
	</div>


@endsection


@section('extrascript')

<script>

window.fbAsyncInit = function() {
    FB.init({
      appId      : '174472043066729',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



  document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share_open_graph',
    action_type: 'og.likes',
    action_properties: JSON.stringify({
    object:'<?php echo "http://" . $server . $endereco;?>',
  }),
    display: 'popup',
    href: '<?php echo "http://" . $server . $endereco;?>',
  }, function(response){});
}


</script>

@endsection
