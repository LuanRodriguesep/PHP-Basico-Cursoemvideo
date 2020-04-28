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

		function soma () {
			$p = func_get_args();
			$tot=func_num_args();
			$s=0;
			for ($i=0; $i < $tot ; $i++) { 
				$s=$s+$p[$i];
			}
			return $s;
		}
		$r= soma (3,3,3);
		echo "A soma dos valores é $r";	
	 ?>





</div> 

</body>
</html>