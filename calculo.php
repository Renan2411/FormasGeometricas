<!DOCTYPE html>
<html>
<head>
	<?php 
	if (isset($_POST["bot"])) {
		$f = $_POST["bot"];		
	}else{
		header("Location: index.php");
	}
	?>
	<meta charset="utf-8">
	<title>Calculos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php 
	switch ($f) {
		case 'PQ':
	 		//variaveis pegadas
			$lb = $_POST["lb"];
			$lp = $_POST["lp"];

	 		//variavéis para conta
			$lb1 = $lb/2;

			$h = sqrt($lp*$lp - $lb1*$lb1);
			
			//calculo de area
			$area = ($lb*$lb) + 4 * ($h*$lb/2);
	 		
	 		//calculo volume
			$H = ($h*$h) - ($lb1*$lb1);
			$volume = (($lb*$lb) * $H)/2;

			if ($area < 0) {
				$area *= -1;
			}
			if ($volume < 0) {
				$volume *= -1;
			}
	 	
	 		//calculo perimetro
			$perimetro = (4*$lb) + (4*$lp);
		break;

		case 'ES':
			$r = $_POST["r"];

	 		//variaveis para conta
			$pi = 3.14;
	 	
	 		//calculo area
			$area = (4*$pi*(pow($r, 2)));
			if ($area < 0) {
				$area *= -1;
			}
	 	
	 		//calculo volume
			$volume = ($pi*(pow($r, 3))*(4/3));
			if ($volume < 0) {
				$volume *= -1;
			}
	 	
	 		//calculo perimetro
			$perimetro = (2*$pi*$r);
			if ($perimetro < 0) {
				$perimetro *= -1;
			}
		break;
		
		case 'CL':
			$h = $_POST["h"];
			$r = $_POST["r"];
			
			//variaveis para conta
			$pi = 3.14;
			$AL = (2*($pi*$r*$h));
			$AB = ($pi*pow($r, 2));

			//calculo area
			$area = ($AL+(2*$AB));
			if ($area < 0) {
				$area *= -1;
			}
			
			//calculo volume
			$volume = ($AB*$h);
			if ($volume < 0) {
				$volume *= -1;
			}
			
			//calculo perimetro
			$perimetro = ((2*$AB)+$AL);
			if ($perimetro < 0) {
				$perimetro *= -1;
			}
		break;

		case 'TD':
			$l = $_POST["l"];

			//calculo da área
			$area = pow($a, 2) * sqrt(3);
			if ($area < 0) {
				$area *= -1;
			}

			//calculando o volume
			$volume = (pow($l, 3) * sqrt(2))/12;
			if ($volume < 0) {
				$volume *= -1;
			}

			//calculando o perimetro
			$perimetro = 6 * $l;
		break;

		case 'HD':
	 		//Variáveis pegadas
			$ar = $_POST["ar"];

	 		//calculo da área
			$area = 6 * $ar *$ar;
			if ($area < 0) {
				$area *= -1;
			}

			//calculo do volume
			$volume = pow($ar, 3);
			if ($volume < 0) {
				$volume *= -1;
			}

			//calculo do perimetro
			$perimetro = 12 * $ar;

		break;

		case 'OD':
			//variáveis
			$a = $_POST["a"];

			//calculo area
			$area = (2*(pow($a, 2)*sqrt(3)));

			//calculo volume
			$volume = (1/3*(pow($a, 3)*sqrt(2)));

			//calculo perimetro
			$perimetro = (12*$a);

		break;

		case 'DD':
			//variaveis
			$l = $_POST["l"];

			//calculo area
			$area = (3*(pow($l, 3)*sqrt(25+10*(sqrt(5)))));

			//calculo volume
			$volume = (1/4*(pow($l, 3)*(15+7*(sqrt(5)))));

			//calculo perimetro
			$perimetro = (30*$l);

		break;

		case 'ID':
			lado = $_POST["l"];

			//Calculo da área
			$area = 5 * pow($l, 2) * sqrt(3);
			if ($area < 0) {
				$area *= -1;
			}

			//calculando o volume
			$volume = ((5/12) * pow($l, 3) * (3+sqrt(5)));
			if ($volume < 0) {
				$volume *= -1;
			}

			$perimetro = $l * 30; 
		break;

		case 'PL':
			//variaveis
			$lc = $_POST["lc"];
			$lr = $_POST["lr"];
			$h = $_POST["h"];

			//calculo area
			$area = (2*$h*$lr+2*$lr*$lr+2*$lr*$h)+(6*(pow($lc, 2)));

			//calculo volume
			$volume = ($lr*$lr*$h)+(pow($lc, 3))

			//calculo perimetro
			$perimetro = (4*$h+8*$lr+2*$lr)+(12*$lc);
		break;

		case 'PM':
		# code...
		break;
	}
	?>
</body>
</html>