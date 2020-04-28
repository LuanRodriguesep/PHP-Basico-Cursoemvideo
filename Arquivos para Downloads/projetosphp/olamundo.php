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

		$media = ( $nota1 + $nota2 ) / 2 ;

		echo " O valor da nota A é $nota1 e valor de nota B é $nota2 ";
	 	

	 	?>
	 </div>	
</body>
</html>