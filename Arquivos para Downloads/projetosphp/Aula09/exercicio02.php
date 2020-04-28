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

			$a = isset($_GET["ano"]) ? $_GET["ano"]:1900 ; 
			$i = date("Y") - $a ;

			echo "Voce Nasceu em $a </br>";
			echo "Sua idade é $i anos </br>";

			if ($i < 16) {
				
				$v = "nao pode Votar";
				$d = "nao pode Dirigir";
			}

			elseif ($i >= 16 && $i < 18 || $i >= 65) {
				$v = "Seu voto é opcional ";
				$d =  $i < 18  ? "Nao pode dirigir": "pode dirigir" ;
			}
			else {
				$v = "Já pode votar";
				$d = "Já pode dirigir";
				
				}

			

			echo " $v e $d </br></br>";

		?>
			
		

	
		<a href="exercicio02.html">Voltar<a/>	
	</div>

</body>
</html>