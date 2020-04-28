<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="_css/estilo.css"> ;
	<title>CURSO DE PHP - cursoemvideo.php</title>
</head>
<body>
	<div>
		
		<?php 

			$ano = $_GET["a"];
			$nas = $_GET["b"];
			$idade = $ano - $nas;

			$vot = ($idade>=18 && $idade <65) ? "OBRIGATORIO" : "ISENTO" ;

			echo ("Sua idade é de $idade anos <br/>");

			echo "SITUAÇÃO DE VOTO : $vot";
	 	

	 	?>
	 </div>	
</body>
</html>