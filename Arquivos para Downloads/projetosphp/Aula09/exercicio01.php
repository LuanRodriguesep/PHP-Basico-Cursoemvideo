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

			else  {
				if ($i >= 16 && $i < 18) {
				$v = "Seu voto é opcional ";
				$d = "Nao pode dirigir" ;
			}
			else {
				$v = "Já pode votar";
				$d = "Já pode dirigir";
				
				}

			}

			echo " $v e $d </br></br>";

		?>
			
		

	
		<a href="exercicio01.html">Voltar<a/>	
	</div>

</body>
</html>