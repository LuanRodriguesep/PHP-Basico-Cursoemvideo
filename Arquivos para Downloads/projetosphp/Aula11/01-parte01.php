<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
	<div>
		<form method="get" action= "02-parte2.php">
			<?php 
			
			$c =1;
			
			while ($c <= 5) {
			
			

				echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>" ;
			$c++ ;

			}



			?>

			<input type="submit" name=""  value="Enviar" class="botao" />

				
			
		</form>
		
	</div>
</body>
</html>