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
	 		$area = ($lb*$lb) + 4 * ($h*$lb/2);//calculo de area

	 		$H = ($h*$h) - ($lb1*$lb1);
	 		$volume = (($lb*$lb) * $H)/2;

	 		if ($area < 0) {
	 			$area *= -1;
	 		}
	 		if ($volume < 0) {
	 			$volume *= -1;
	 		}

	 		$perimetro = (4*$lb) + (4*$lp);
	 		echo "$area";
	 		echo "<br>$volume";
	 		echo "<br>$perimetro";
	 	break;
	 	}
	 	?>
	 </body>
	 </html>