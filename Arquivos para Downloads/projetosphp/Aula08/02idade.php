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
		
		$nome= isset($_GET["nome"])? $_GET["nome"] : "[Nao informado]";
		$sexo=  isset($_GET["sexo"])?$_GET["sexo"] : "[Nao informado]"; 
		$ano= isset($_GET["ano"])? $_GET["ano"] : "[Nao informado]" ;
		$idade = date("Y") - $ano ;
		
		

		echo " $nome é $sexo e tem $idade anos  <br/>";

		?>
	
		<a href="02exercicio.html">Voltar<a/>	
	</div>

</body>
</html>