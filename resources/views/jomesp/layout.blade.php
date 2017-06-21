<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    @yield('extrastyle')
    @include('partials.jomesp._head')

  </head>
  
    <body>
 
              @yield('conteudo')



      @include('partials.jomesp._javascript')
      @yield('extrascript')
      @include('partials.jomesp._footer')
    </body>
    
</html>