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
		$frase = " Eu estou aprendendo PHP";
		$pos = strpos ($frase, "PHP"); // mostra  a posição em numero de caracteres contando espaços no caso a string escolhida foi PHP e sua posição é a 21, 
		echo "A string foi encontrada na posição $pos";
	?>
<br>
	<?php  
		$fras = " Eu estou tentando aprender PROGRAMACAO";
		$poss = stripos ($fras, "programacao"); // a letra "i" na função , faz ignorar oque tem na caixa, idependente de a palavra esta maiuscula ou minuscula como nos exemplos a cima  
		echo "A string foi encontrada posicionada $poss";
	?>

</div> 

</body>
</html>