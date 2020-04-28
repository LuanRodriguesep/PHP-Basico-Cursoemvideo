<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
<div>
	<form method="get" action="02-tabuada.php"  >
		<select name="num">
			<?php
				for ($c=1; $c <= 10  ; $c++) {
					echo "<option>$c</option>"; 
				}	
			?>
		</select>
		<input type="submit" value="Tabuada"/>
	</form>	
	</div> 

</body>
</html>