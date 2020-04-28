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
		$letra = chr(42); // funçao para saber qual letra esta relacionado com o codigo do teclado
		echo "A letra referente ao codigo é $letra";
	?>
<br>
	<?php  
	$let = "*" ;
	$cod = ord($let);// função para saber quais codigos dos caracteres do teclado
	echo "O codigo referente ao caracterer da variavel  é $cod";

	?>
</div> 

</body>
</html>