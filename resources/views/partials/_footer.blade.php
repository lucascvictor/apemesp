

<footer class="text-center" >
   <center>
      <div class="footer-above" style="background-color: #ADCEDD">
         <div class="container">
            <div class="row">
               <div class="footer-col col-md-4 col-sm-10">
                  <h3>Localização</h3>
                  <a href="{{ url('/contato/localizacao') }}">
                     <p>Rua dos Buritis, 310
                        <br>Jabaquara, SP
                     </p>
                  </a>
               </div>
               <div class="footer-col col-md-4 col-sm-12">
                  <ul class="list-inline">
                     <h3>APEMESP nas redes sociais</h3>
                     <a class="btn btn-block btn-social btn-facebook"
                        href="https://www.facebook.com/apemesp/"
                        target="blank">
                     <span class="fa fa-facebook"></span>
                     Curta nossa página no Facebook
                     </a>
                     <a class="btn btn-block btn-social btn-google"
                        href="https://www.youtube.com/channel/UCoTdBAkkFZLb6SbqiiP7EoA"
                        target="blank">
                     <span class="fa fa-youtube"></span>
                     Veja nossos vídeos no YouTube
                     </a>
                     <a class="btn btn-block btn-social btn-instagram"
                        href="https://www.instagram.com/apemespmt/?hl=pt-br"
                        target="blank">
                     <span class="fa fa-instagram"></span>
                     Nos siga no Instagram
                     </a>
                     <a class="btn btn-block btn-social btn-twitter"
                        href="https://twitter.com/apemesp"
                        target="blank">
                     <span class="fa fa-twitter"></span>
                     Nos siga no Twitter
                     </a>
                     <a class="btn btn-block btn-social btn-linkedin"
                        href="https://www.linkedin.com/in/sp-apemesp-b06b51120/"
                        target="blank">
                     <span class="fa fa-linkedin"></span>
                     Aumente sua rede no LinkedIn
                     </a>
                  </ul>
               </div>
               <div class="footer-col col-md-4 col-sm-10">
                  <h3>Parceiros</h3>
                  <ul class="list-inline text-center">
                     @foreach($footer as $item)
                     <li>
                        <?php $imagem = 'images/footer/' . $item->imagem; ?>
                        @if($item->formato == 1)
                            <?php $formato = 'height: 100px; width: 100px;'; ?>
                        @else
                            <?php $formato = 'height: 50px; width: 100px;'; ?>
                        @endif
                        <a href="{{ $item->link }}" target="_blank">
                        {{ Html::image($imagem,  '', array('style' => $formato )) }}
                        </a>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-below">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <center>
                     <p class="copyright text-muted">Associação de Profissionais e Estudantes de Musicoterapia do Estado de São Paulo- All Rights Reserved</p>
                  </center>
               </div>
            </div>
         </div>
      </div>
   </center>
</footer>

