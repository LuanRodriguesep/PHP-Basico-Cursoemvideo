<!DOCTYPE html>
<html>
<head>
	<title>01-Desafio</title>
</head>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<body>
	<h2>Meu Primeiro desafio do Hanckerrank</h2>
	<div>


		<?php  
			$msn1 = fopen("arquivo.txt", "r");
			$msn2 = fgets($msn1);
			print ("Testando Arquivos.\n");
			fclose($msn1);
			echo "<br/>$msn2";
		?>
	</div>

</body>
</html>