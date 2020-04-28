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
			$i = 1 ; 
			while ($i <= 5) {
				$v = "num". $i ; 
				$url = "v" . $i ;
				$$v = isset($_GET[$url]) ? $_GET[$url] : 0;
				$i ++;
			}

			$i=1;
			while ($i<=5) {
				$v = "num".$i ;
				echo "valor $i : ". $$v . "<br/>";
				$i ++;
			}
			
		
			
			
		?>	
		

	
		<a href="01-parte1.php">Voltar<a/>	
	</div>

</body>
</html>