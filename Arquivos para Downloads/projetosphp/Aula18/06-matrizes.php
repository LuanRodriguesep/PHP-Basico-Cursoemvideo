<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
<div>
	<pre>
		
	<?php
		$m = array( array(6,4),
					array(4,9),
					array(3,2));
		
		$m [0] [1] = $m[1] [1] ; // o primeo vetor seria linha zero(0) coluna um (1) o valor é o (4)  conforme no comando eu quero q [0] [1] seja igual a linha [2] coluna [0], ou seja ambos vetores terao o mesmo valor que no caso é tres (3)
		print_r($m);

		//vetores dentro de vetores


	?>				
	</pre>
	

</div> 

</body>
</html>