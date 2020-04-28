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
	function teste (&$x) {
		$x += 2;
		echo "<p>O valor de X é $x</p>";
	}
	$a = 3;
	teste($a);
	echo "<p>O valor de A e $a</p>";

	?>


</div> 

</body>
</html>