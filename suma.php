<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultado de la suma</title>
</head>
<body>
	

	<?php


		echo "<h1>Resultado de la suma</h1> <br><br>";
		

		if(isset($_GET["numero1"],$_GET["numero2"])) {

			if(is_numeric($_GET["numero1"]) and is_numeric($_GET["numero2"])){

				$n1 = floatval($_GET["numero1"]);
				$n2 = floatval($_GET["numero2"]);

				echo "La suma es ".($n1+$n2);

			}else{

				echo "Hay un valor no numerico, volver a introducir datos";

		}

		}


	?>
</body>
</html>
