<!DOCTYPE html>
<html>
    <head>
        <title>APEMESP | errO.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

          
        </style>
    </head>
    <body style="background-color: #ADCEDD;">
        <div class="container">
        <center>
        <p>
                <b><span style="color: #FFF; font-size: 200px; ">4</span></b>
                {{  Html::image('images/error/fone1.png',  '', array('style' => 'width: 11%; height: 11%;')) }}
                {{  Html::image('images/error/fone1.png',  '', array('style' => 'width: 11%; height: 11%;')) }}
                
        </p>
        <p>
                <h1><span style="color: #FFF; ">Página não encontrada :( .</span></h1>
                <h2><span style="color: #FFF; ">Por favor entre em contato com o Administrador APEMESP</span></h2>
                <a href="{{ url('/contato/mensagens')}}"><h3>Página de contato</h3></a>
        </p>
        </center>
        </div>
    </body>
</html>
