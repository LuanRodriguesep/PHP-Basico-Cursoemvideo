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
		$frase = " Estou aprendendo PHP no curso em Video de PHP, pois PHP é otimo para fazer sites web , PHP domina esse mercado";
		$cont = substr_count($frase, "PHP"); // função que conta quantas vezes a palavra aparece que esta na caixa , aparece na string
		print ("PHP encontrado $cont vezes");
	?>

</div> 

</body>
</html>