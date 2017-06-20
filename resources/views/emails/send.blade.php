<html>
<head>
<title> APEMESP {{ $titulo }}</title>
<style type="text/css">
	
</style>
</head>
<body>
<center><h2>E-mail de contato APEMESP</h2></center>
<hr>
<b>Nome do remetente:</b> {{ $nome }} <br />
<b>Telefone para retorno:</b> {{ $telefone }} <br />
<b>Email para contato: </b> {{ $email }}

<h4>Categoria:<span style="color: red;"> {{ $titulo }}</span></h4>
<hr>
<h3>Mensagem: </h3>
<h3>{!! $mensagem !!}</h3>
<hr>
<h4> Enviado em: {{ $data }}</h4>
<h4>******************* Este e-mail foi gerado automaticamente, por favor não responda diretamente. *******************</h4>
</body>
</html>