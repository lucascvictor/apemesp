 <!-- SIDEBAR -->
          <div class="sidebar" style= "background-color: #FFFFFF; margin-top: 30px; padding: 5%;">
           
              @yield('categorias')
            
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
          <ul class="nav nav-pills nav-stacked">
              <h4>Patrocinadores e associados </h4>
              @foreach($propagandas as $propaganda)
                
                <a href="{{ $propaganda->link }}">
                  {{  Html::image('images/propagandas/' . $propaganda->imagem,  '', array('style' => 'width: 100%; height: 150px;')) }}
                
                {{ $propaganda->titulo}}
                </a>
                <hr>
              @endforeach
          </ul>

        </div>
<!-- END SIDEBAR -->