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
		$txt = "Este é um exemplo de strings  gigante que necessita de quebra de linha, porem toda vez tem que ficar digitando o comando >>>>>br<<<<< que enche o saco";
		$res = wordwrap($txt, 5, "<br/>\n" , false); // wordawrap($txt,20, "<br/>\n");
		echo ($res);

	?>
</div> 

</body>
</html>