<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>

	<style>
		
	</style>
</head>
<body>
	<div>
		 
		<?php  

			$d = isset($_GET["ds"]) ? $_GET["ds"]: 0 ;
			
			switch ($d) {
				case 2:	
				case 3:
				case 4:
				case 5:
				case 6:

					echo "Vá estudar !!!";
					break ;

				case 7:
				case 8:

					echo "Descanse um pouco";
					break;

				default :

					echo "Dia da semana invalido";

			}
	


		 ?>
			
		

	
		<a href="exercicio02.html">Voltar<a/>	
	</div>

</body>
</html>