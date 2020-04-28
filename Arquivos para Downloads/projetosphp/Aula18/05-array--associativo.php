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
		$v = array( "nome" => "Ana",
					"idade" => 23,
					"peso" => 65.5);
		foreach ($v as $k => $c) {
			echo "O campo $k possui oconteudo $c<br/>";
		}


	?>				
	</pre>
	

</div> 

</body>
</html>