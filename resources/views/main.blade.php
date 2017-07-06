<!DOCTYPE html>
<html lang="pt-br">
  <head>
    @yield('metatags')

    @include('partials._head')
    
    @yield('extrastyle')
  <style type="text/css">
  .borda{

    border-radius: solid;
    box-shadow: 0px 0px 0px 16px rgba(0,0,0,0.07);
  }


    @media only screen and (max-width: 1000px) {
    .mobile{ 
      padding-top: 0 !important; 
      }
    }


  </style>

  {!! Html::script('js/bootstrap-typeahead.js') !!}

  </head>

    <body style="background-color: #dbe3e9" id="app-layout">

      @include('partials._nav')

         <div  class="container mobile" style="padding-top: 22%;">


          <div class="row">
              <div class="col-lg-6 col-md-10 col-sm-12 col-xl-8" style="float: right;">
        
                     {{ Form::open(['action' => ['Apemesp\PagesController@search'], 'method' => 'GET']) }}
                    <div class="form-group input-group">
                    {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Procurar em posts', 'class' => 'typehead form-control'])}}

                    <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></span>
                    </div>
                   {{ Form::close() }}
                
            </div>

          
          </div>


          <div class="row">

            <div class="col-md-3 col-sm-2  visible-md visible-lg visible-xl">
           
            @include('partials._sidebar')
           
            </div>

            <div class="col-md-9 col-sm-12 rcol-xl-8 right-column mobile" style=" margin-top: 30px; background-color: #eff3f5; padding: 3%;">

              @include('partials._mensagens')
              @yield('conteudo')

            </div>
              <div class="col-sm-12 visible-sm">
           
            @include('partials._sidebar')
           
            </div>

           </div>
           

            @include('partials._footer')

          </div>

      @include('partials._javascript')
      @yield('extrascript')


    </body>
  

</html>
