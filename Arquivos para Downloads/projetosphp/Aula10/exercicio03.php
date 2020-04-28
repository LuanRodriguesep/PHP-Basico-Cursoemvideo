<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>CURSO DE PHP - cursoemvideo.com</title>

	<style>
		
	</style>
</head>
<body>
	<div>
		 
		<?php  

			$e = $_POST['estados'] ;
			
			switch ($e) {
				case 'Acre (AC)':	  
				case 'Amazonas(AM)':
				case 'Roraima (RO)':
				case 'Amapá (AP)' :
				case 'Pará (PA)' :
				case 'Tocantins (TO)':
				case 'Rondônia (RO)':


					echo "$e é da Região Norte";
					
					break ;

				case 'Maranhão (MA)' :
				case 'Piauí (PI)' :
				case 'Ceará (CE)' :
				case 'Rio Grande do Norte (RN)' :
				case 'Pernambuco (PE)' :
				case 'Paraíba (PB)' :
				case 'Sergipe (SE)' :
				case 'Alagoas (AL)' :
				case 'Bahia (BA)' :

				

					echo "$e é da Regiao Nordeste";
					
					break;

				case 'Mato Grosso (MT)' :
      			case 'Mato Grosso do Sul (MS)' :
      			case 'Goiás (GO)' :

      				echo "$e é da Regiao Centro-Oeste";

      				break ;

      			case 'São Paulo (SP)' :
      			case 'Rio de Janeiro (RJ)' :
      			case 'Espírito Santo (ES)' :
      			case 'Minas Gerais (MG)' :
      			
      				echo "$e é da Regiao Sudeste";	
      				break ;
      			


      			case 'Paraná (PR)' :
      			case 'Rio Grande do Sul (RS)' :
      			case 'Santa Catarina (SC)' :
      				
      				echo "$e é da Regiao Sul";
      				break ;
      				
				
				default :

					echo "Regiao nao identificada";

			}
	


		 ?>
			
		

	
		<a href="exercicio03.html">Voltar<a/>	
	</div>

</body>
</html>