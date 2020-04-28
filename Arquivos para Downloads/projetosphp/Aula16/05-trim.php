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
		$nome = "   Luan de Souza Rodrigues   ";
		//echo (strlen($nome));
		$novo = trim($nome);
		echo ($novo);
		echo (strlen($novo));

		//ltrim elimina so espaços do começo da frase
		//rtrim elimina so espaços do final da frase

	?>
</div> 

</body>
</html>