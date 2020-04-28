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
		$v = array( 0=>5,
					1=>9,
					2=>8,
					3=>7);
		print_r($v);

		//posso personalizar qual valor ficará em cada vetor independente da ordem
	?>
	</pre>
	<br>
	<pre>
	<?php
		$v = array( 1=>"D",3=>"A",6=>"B",8=>"C");
		$v[]="E"; //o php gerencia pra quaç vetor vai o valor solicitado sempre na sequencia do ultimo no caso o valor E estaria no vetor 9
		print_r($v);
	?>
	</pre>
	<br>
		<pre>
		
	<?php
		$v = array( 3=>5,
					5=>9,
					2=>8,
					0=>7);
		unset($v[5]); // comando para desalocar o valor dentro do vetor , apagar o valor qu estava inserido no vetor determinado na caixa, quando mandar aparecer na tela o vetor cinco nao sera exibido
		print_r($v);

		
	?>
	</pre>
	

</div> 

</body>
</html>