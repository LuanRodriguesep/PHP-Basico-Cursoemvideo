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
				$n = isset($_GET["num"])?$_GET["num"]:1;
				for ($c=1; $c <=10 ; $c++) {
				$r= $n * $c;
				echo "$n X $c = $r";
				echo "</br>"; 
					
				}
			?>
		
		<a href="02-index.php">Voltar<a/>	
	</form>	
	</div> 

</body>
</html>