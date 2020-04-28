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

		function soma ($a,$b){
			$s= $a+$b;
			echo "<p>A soma vale  $s</p>";
		}

		soma (3,4);
		soma (10,20);
		$x=18;
		$y=19;
		soma ($x,$y);


	 ?>





</div> 

</body>
</html>