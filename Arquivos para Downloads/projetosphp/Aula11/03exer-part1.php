<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
	<div>
		<h2>Contagem</h2>
		<form method="get" action= "03exer-part2.php">
			<?php 

				$i = isset($_GET["i"]) ? $_GET["i"] : 'Nao informado' ;
				$fin = isset($_GET["fin"]) ? $_GET["fin"] : 'Nao informado' ;
				$inc = isset($_GET["inc"])?$_GET["inc"]:1;
				
			
				echo "Inicio : <input type='number' name='i' max='' min='' value='Inicio'/><br/>" ;
				echo "Final : <input type='number' name='fin' max='' min='' value='Final'/><br/>  ";
				echo "Incremento : <input type='number' name='inc' max='10' min='0' value='Incremento' required='' /><br/>  ";



			

			?>

			<input type="submit" name=""  value="Contar" class="botao" />

				
			
		</form>
		
	</div>
</body>
</html>