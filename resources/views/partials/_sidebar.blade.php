 <!-- SIDEBAR -->
          <div class="sidebar" style="margin-top: 70px;">
      

           
              @yield('categorias')

            

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