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
		$v = array("A" , "J", "M", "X", "K");
		print_r($v);
		#sort($v);
		// Coloca os elementos em ordem do menor para o maior, mas somente os valores dos elementos, os elementos continuam na mesma ordem
		rsort($v); 
		// Praticamente faz a mesma coisa que o sort, porem ao inverso, ordena os elementos dos vetores, mas de forma decrescente
		print_r($v);
	?>	
	</pre>
	<br/>
	<pre>
	<?php  
		$vt = array("Z" , "B", "T", "R", "G");
		print_r($vt);
		asort($vt); //esse somando associa o valor ao indice do vetor, amarrando-os, vai ordenar os valores porem os indices seguirão sem uma ordem definida, sendo fiel a amarração. 
		print_r($vt);
		#arsort($vt);
		// Essa função ordena os valores com os indices amarrados, porem de forma reversa começando do maior para o menor 
	?>
	</pre>
</div> 

</body>
</html>