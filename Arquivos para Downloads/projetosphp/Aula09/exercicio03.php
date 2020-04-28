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

			$n1 = isset($_GET["n1"]) ? $_GET["n1"]:0 ; 
			$n2 = isset($_GET["n2"]) ? $_GET["n2"]:0 ;
			$m = ($n1 + $n2) / 2 ;


			if ($m < 5 ) {
				$s = "REPROVADO";
			}

			elseif ($m > 5 && $m < 7) {
				$s = "RECUPERAÇÃO";
			}
			else {
				$s ="APROVADO";
			}



			echo "A média entre $n1 e $n2 é $m e a situação do aluno é $s</br>";
			

			

		?>
			
		

	
		<a href="exercicio03.html">Voltar<a/>	
	</div>

</body>
</html>