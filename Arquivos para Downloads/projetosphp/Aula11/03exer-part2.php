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
			
				$i = isset($_GET["i"]) ? $_GET["i"] : 'Nao informado' ;
				$fin = isset($_GET["fin"]) ? $_GET["fin"] : 'Nao informado' ;
				$inc = isset($_GET["inc"])? $_GET["inc"]:1;
				
				
				 
				 if ($i > $fin) {
				 	$cont = $i;
				 	while ($cont <= $fin ) {
					echo $cont . "</br>" ;
					$cont = $cont + $inc ;
					}
				}

				elseif ($fin > $i) {
					$cont = $fin ;
					while ($cont >= $i) {
						echo $cont . "</br>" ;
						$cont = $cont - $inc ;
					}				
				}
			
		
			
			
		?>	
		

	
		<a href="03exer-part1.php">Voltar<a/>	
	</div>

</body>
</html>