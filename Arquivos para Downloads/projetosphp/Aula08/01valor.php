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

			$valor = $_GET["v"];
			$rq = sqrt($valor);
			echo "O valor digitado é $valor e sua Raiz Quadrada é ". number_format($rq,2) ; 

			echo "<br/><br/>";

		?>
		<a href="01exercicio.html">voltar</a> 

	</div>

</body>
</html>