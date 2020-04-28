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
		$nome="lUan roDrigues";
		print("Seu nome é ". strtolower($nome));// função que deixa as letras das strings todas minusculas
		print("<br/>Seu nome é " . strtoupper($nome)); // função deixa as palavras na strings em MAIUSCULAS
		print("<br/>Seu nome é ". ucfirst($nome)); // Função para deixa sempre a primeira letra maiuscula 
		$nome2 = "<br/>karoline noguEiRa";
		print (ucfirst(strtolower($nome2)));  // é possivel usar duas funções juntas 
		print (ucwords(strtolower($nome2)));  // função ucwords deixa as iniciar de cada palavra como maiuscula e pode ser conjugada com outra função
		echo "<br/>";
		print (strrev($nome)); // função que eescreve a strigs ao contrario
		

	?>
</div> 

</body>
</html>