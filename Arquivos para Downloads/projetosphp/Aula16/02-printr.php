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
	$v[0] = 7;
	$v[1] = 14;
	$v[2] = 21;
	print_r($v);
	echo "</br>";
	$v2 = array(21,14,7,0);
	var_dump($v2);
	echo "</br>";
	$v3 = array(10,9,8,7,6,5);
	var_export($v3);

	?>
</div> 

</body>
</html>