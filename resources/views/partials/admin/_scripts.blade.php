    <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('js/bootstrap.min.js') !!}

    <!-- Morris Charts JavaScript -->
    {!! Html::script('js/plugins/morris/raphael.min.js') !!}
    {!! Html::script('js/plugins/morris/morris.min.js') !!}
    {!! Html::script('js/plugins/morris/morris-data.js') !!}



      
      {!! Html::script('js/bootstrap-datetimepicker.js') !!}
      {!! Html::script('js/locales/bootstrap-datetimepicker.br.js') !!}
      


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