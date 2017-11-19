<!DOCTYPE html>
<html lang="pt-br">
  <head>

    @yield('extrastyle')
    @include('partials.jomesp._head')

  </head>

    <body>
      @include('partials.jomesp._logo')
      @include('partials.jomesp._nav')


        @yield('conteudo')
        

      @include('partials.jomesp._javascript')
      @yield('extrascript')
      @include('partials.jomesp._footer')
    </body>

</html>
