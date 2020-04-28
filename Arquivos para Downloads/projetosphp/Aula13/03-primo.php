<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>
</head>
<body>
<div>
	<form method="get" action="03-primo.php">
	<?php
	
	$div=0;


		 $n = isset($_GET["num"])?$_GET["num"]:1;
		 echo "<h2>Analisando o numero <span>$n</span> ...</h2></br></br>";
		 echo "O número $n é múltiplo de: ";
		 	for ($c=1; $c <= $n ; $c++) {
		 		$res = $n%$c;
		 		if ($res == 0 && $c>=1) {
		 				echo " $c "."...";
		 				$div++;
		 		}
		 	}

		 	echo "</br>O total de divisores de $n é $div";	

		 	if ($div == 0) {
		 		echo "</br> O numero $n é Primo";
		 	}
		 	else{
		 		echo "</br> O numero $n não é primo ";
		 	}
			 		


		/*$c=1;
        $div=0;
        $n=isset($_GET["num"])?$_GET["num"]:0;

        echo "<h2>Analisando o número <span>$n</span></h2></br>";
        echo "O número $n é múltiplo de: ";
        for ($c=1;$c<=$n;$c++){
            $mod=$n%$c;
            if ($mod== 0 && $c>=1 ){
                echo "$c ";
                $div++;
            }
        }
        echo "</br>O número $n possui $div divisores.";
        if($div==2){
            echo "</br>$n <span>É NÚMERO PRIMO</span>.";
        }
        else{
            echo "</br>$n <span>NÃO É NÚMERO PRIMO</span>.";
        }*/
	?>
	<br>
	<br>
	<a href="03-index.php">Voltar</a>
</div> 

</body>
</html>