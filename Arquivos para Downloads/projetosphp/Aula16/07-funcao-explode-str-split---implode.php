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
		$site="Cursos em Video";
		$vetor=explode(" ",$site);//no exemplo o espaço em branco sera a quebra do vetor, a cada espaço sera um vetor
		print_r($vetor);
	?>
	<br>
	<?php  
		$nome= "Maria";
		$vetor= str_split($nome); // conta as letras da string
		print_r($vetor);
	?>
	<br>
	<?php 
		$vet[0]="curso";
		$vet[1]="em";
		$vet[2]="Video";
		$texto=implode("%", $vet); // implode pode ser substituido por >join()< // função q separa as palavras pelo caracter que vc inserir entre as aspas
		print($texto)
	?>
</div> 

</body>
</html>