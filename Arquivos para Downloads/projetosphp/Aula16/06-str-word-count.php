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
		$fras = "Eu vou me tornar um otimo desenvolvedor";
		$cont = str_word_count($fras,1);//se for o numero 1 depois da variavel ele cria vetores , se for 0 ele conta as palavras--- se for o numero 2 ele cria vetores mantendo o posicionamento de dentro string
		print_r ($cont);
	?>
</div> 

</body>
</html>