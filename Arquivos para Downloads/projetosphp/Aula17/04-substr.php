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
		$site = "Curso em Video";
		$sub = substr($site, 1,7); // funcão que te possibilita a selecionar a parte da string que aparecerá, numeros negativos podem ser usado , pegam as ultimas letra sda strings, ou numeros inteiro tbm mudam a forma como reage a função
		echo "$sub";
	?>

</div> 

</body>
</html>