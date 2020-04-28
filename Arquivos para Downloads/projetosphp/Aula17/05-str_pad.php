<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
<div>
	<?php  
		$nome = "Rodrigues";
		$novo = str_pad($nome, 30,"*", STR_PAD_RIGHT);
		print("Meu sobrenome é $novo desde sempre<br/>");
		
		$novo = str_pad($nome, 30,"_", STR_PAD_BOTH);
		print("Meu sobrenome é $novo desde sempre<br/>");
		
		$novo = str_pad($nome, 30,":", STR_PAD_LEFT);
		print("Meu sobrenome é $novo desde sempre");

		// função para delimitar caracteres de espaçamentos em strings
	?>

</div> 

</body>
</html>