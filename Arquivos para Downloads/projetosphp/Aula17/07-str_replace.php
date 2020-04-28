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
		$frase = "Gosto de estudar Matematica !!!";
		$novafrase = str_replace("Matematica","PHP", $frase);
		echo "$novafrase <br/>";

		$fras = "Gosto de estudar Informatica, pois informaticA é muito legal ";
		$novafras = str_ireplace("inFormatica","Programacao", $fras);
		echo "$novafras";
		
		//Função que substitui palavras , obs: as palavras devem esta identicas , maisuculas na string e na função com acentos e traçõs e etc ... onde tiver a palavra q estiver na caixa será substituida
		//Porem se colocar a letra "i" antes replace , a caixa é ignorada

	?>



</div> 

</body>
</html>