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
		$v = array(1=>"D", 0=>"E", 4=>"A" , 2=>"U", 6=>"D", 5=>"R", 7=>"O");
		print_r($v);
		#ksort($v);
		// Ordena os indices de forma crescente, levando consigo seus valores
		#print_r($v);
		krsort($v);
		// Ordena os indices de forma decrescente , levando consigo seus valores
		print_r($v);
	?>
	</pre>
</div> 

</body>
</html>