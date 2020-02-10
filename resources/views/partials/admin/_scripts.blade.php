    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('public/js/bootstrap.min.js') !!}

    <!-- Morris Charts JavaScript
    {!! Html::script('public/js/plugins/morris/raphael.min.js') !!}
    {!! Html::script('public/js/plugins/morris/morris.min.js') !!}
    {!! Html::script('public/js/plugins/morris/morris-data.js') !!}
    -->

    <script src="http://www.apemesp.com.br/public/js/plugins/morris/raphael.min.js"></script>
    <script src="http://www.apemesp.com.br/public/js/plugins/morris/morris.min.js"></script>
    <script src="http://www.apemesp.com.br/public/js/plugins/morris/morris-data.js"></script>

    <!--
    {!! Html::script('public/js/bootstrap-datetimepicker.js') !!}
    {!! Html::script('public/js/locales/bootstrap-datetimepicker.br.js') !!}
    -->

    <script src="http://www.apemesp.com.br/public/js/bootstrap-datetimepicker.js"></script>
    <script src="http://www.apemesp.com.br/public/js/locales/bootstrap-datetimepicker.br.js"></script>


<script type="text/javascript">

    $('.form_date').datetimepicker({
        language:  'br',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    
</script>

<!--validar o campo somente numeros -->
<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>