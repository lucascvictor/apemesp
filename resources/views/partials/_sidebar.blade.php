 <!-- SIDEBAR -->
          <div class="sidebar" style="margin-top: 70px;">
            <?php $pagina = $_SERVER['PHP_SELF']; //captura a pagina atual para posterior comparação ?>
            <?php dd($pagina) ?>
            @if($pagina == '/' || $pagina == '/index.php')
              <a href="" class="btn btn-primary">
                <i class="chatter-bubble"></i> 
                Todas as categorias 
              </a>
              <ul class="nav nav-pills nav-stacked">
             
            @foreach($tags as $tag)

                <li>
                  <a href="">
                    <div class="chatter-box"></div> 
                    <i class="fa fa-music" aria-hidden="true"></i> 
                    - {{ $tag->tag }}
                  </a>
                </li>
            @endforeach
              </ul>

            @endif

            <hr>
          <ul class="nav nav-pills nav-stacked">
              <h4>POSTS MAIS VISTOS </h4>
              @foreach($maisVistos as $maisVisto)
                <li>
                <a href="/pages/post/{{ $maisVisto->id }}">
                {{ $maisVisto->titulo}}
                </a>
                </li>
              @endforeach
          </ul>
        </div>
<!-- END SIDEBAR -->