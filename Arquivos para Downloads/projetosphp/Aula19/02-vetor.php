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
		array_pop($v)// elimina o ultimo elemento
		//array_push($v, "O"); // inseri um valor no final do vetor
		//$v[] = "O"; //colocar elementos no final do vetor
		?>
	<br/>
	<?php  
		$ve = array("A" , "J", "M", "X", "K");
		print_r($ve);
		array_shift($ve, "Y");//Insere o valor no primeiro 
		array_unshift($ve, "Y");//Insere o valor no primeiro elemento do vetor 
		print_r($ve);
	?>	
	</pre>

</div> 

</body>
</html>