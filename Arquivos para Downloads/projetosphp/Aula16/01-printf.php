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
		$prod ="Leite";
		$cust ="4.9";
		// echo "O $prod custa R$:" . number_format($cust, 2) ;
		printf("O %s custa R$: %.2f", $prod, $cust);


	?>
</div> 

</body>
</html>