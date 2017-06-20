<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    @yield('extrastyle')
    @include('partials.jomesp._head')

  </head>
  
    <body>
 
              @yield('conteudo')



      @include('partials._javascript')
      @yield('extrascript')
    </body>
    
</html>