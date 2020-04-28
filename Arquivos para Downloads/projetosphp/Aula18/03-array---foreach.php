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
		<table border="1"><tr> 
	<?php
		$c = range (5,20,2)  ;
		foreach ($c as $v ) {
			echo "<td>$v ";
		}
		//mostra somente os valores alocados nos vetores , fica esteticamente mais bonito 

		// comando table usado , é somente para ficar esteticamente mais bonito e mais organizado quando aparecermos valores da tela 
	?>
	</table>
	</pre>

</div> 

</body>
</html>