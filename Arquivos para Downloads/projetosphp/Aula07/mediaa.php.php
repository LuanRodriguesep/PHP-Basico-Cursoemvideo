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

		$nota1 = $_GET["a"] ;

		$nota2 = $_GET["b"] ;

		$soma = $nota1 + $nota2 ;

		$media = ( $nota1 + $nota2 ) / 2 ; 

		


		

		echo " A soma entre as notas $nota1 e $nota2 é $soma <br/>  ";

		echo " A média do aluno é  $media <br/> " ;

		# $sit = $media <= 6  ? "REPROVADO" : "APROVADO "; --- pode ser inserido em uma linha so como abaixo

		echo " A situação é " . $media<=6? "REPROVADO" : "APROVADO";
	 	

	 	?>
	 </div>	
</body>
</html>