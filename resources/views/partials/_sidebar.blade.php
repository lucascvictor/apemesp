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
              <?php $i = 0; ?>
              @foreach($propagandas as $propaganda)
              @if($propagandasAtivas[0]->quantidade > $i)
                <a href="{{ $propaganda->link }}">
                  {{  Html::image('images/propagandas/' . $propaganda->imagem,  '', array('style' => 'width: 100%; height: 250px;', 'class' => 'bordas')) }}

                {{ $propaganda->titulo}}
                </a>
                <hr>
                <?php $i++; ?>
              @endif
              @endforeach
          </ul>

        </div>
<!-- END SIDEBAR -->
