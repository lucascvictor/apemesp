@extends('admin.dashboard')
@section('titulo', 'Associado')
@section('extrastyle')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('conteudo')
<?php use Apemesp\Apemesp\Classes\Associado; ?>
<?php $musicoterapeuta = new Associado; ?>
<div class="row">
   <div class="col-md-4">
    @include('admin.admin.associados.dadospessoais')
   </div>
   <div class="col-md-4">
        <div class="row">
            @include('admin.admin.associados.documentos')
        </div>
        <div class="row">
            @include('admin.admin.associados.dadosacademicos')
        </div>
   </div>
   <div class="col-md-4">
    @include('admin.admin.associados.dadosprofissionais')
   </div>
</div>
<script type="text/javascript">
   var i = 0;
   $('#documento1').on('change',function () {
              var documento = $(this).val();
              var formato = '';
              var limite = documento.length - 3;
              while(limite < documento.length)
              {
              	formato = formato + documento[limite];
              	limite++;
              }
   
        		if(formato != 'pdf'){
   
        			if(i < 1){
        			$("#mensagem1").append('<div id="documentomensagem1" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
        			i++;
        		}
        			$("#documento1").val('');
        		}else{
        			document.getElementById("documentomensagem1").remove();
        		}
   
          });
   			var ii = 0;
   			$('#documento2').on('change',function () {
   
   		            var documento2 = $(this).val();
   		            var formato2 = '';
   		            var limite2 = documento2.length - 3;
   		            while(limite2 < documento2.length)
   		            {
   		            	formato2 = formato2 + documento2[limite2];
   		            	limite2++;
   		            }
   
   		      		if(formato2 != 'pdf'){
   
   		      			if(ii < 1){
   		      			$("#mensagem2").append('<div id="documentomensagem2" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
   		      			ii++;
   		      		}
   		      			$("#documento2").val('');
   		      		}else{
   		      			document.getElementById("documentomensagem2").remove();
   		      		}
   
   		        });
   						var iii = 0;
   						$('#documento3').on('change',function () {
   					            var documento3 = $(this).val();
   					            var formato3 = '';
   					            var limite3 = documento3.length - 3;
   					            while(limite3 < documento3.length)
   					            {
   					            	formato3 = formato3 + documento3[limite];
   					            	limite3++;
   					            }
   
   					      		if(formato3 != 'pdf'){
   
   					      			if(iii < 1){
   					      			$("#mensagem3").append('<div id="documentomensagem3" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
   					      			iii++;
   					      		}
   					      			$("#documento3").val('');
   					      		}else{
   					      			document.getElementById("documentomensagem3").remove();
   					      		}
   
   					        });
   
   									var iv = 0;
   									$('#documento4').on('change',function () {
   								            var documento4 = $(this).val();
   								            var formato4 = '';
   								            var limite4 = documento4.length - 3;
   								            while(limite4 < documento4.length)
   								            {
   								            	formato4 = formato4 + documento4[limite4];
   								            	limite4++;
   								            }
   
   								      		if(formato4 != 'pdf'){
   
   								      			if(iv < 1){
   								      			$("#mensagem4").append('<div id="documentomensagem4" class=" alert alert-danger" role="alert"><br><strong>Cuidado:</strong> Este documento não é do tipo PDF</div>');
   								      			iv++;
   								      		}
   								      			$("#documento4").val('');
   								      		}else{
   								      			document.getElementById("documentomensagem4").remove();
   								      		}
   
   								        });
   
   
   
</script>
@endsection