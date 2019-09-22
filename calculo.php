<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Calculos</title>

	<!-- Principal CSS do Bootstrap -->
	<link href="bootstrap.min.css" rel="stylesheet">

	<!-- Estilos customizados para esse template -->
	<link href="page.css" rel="stylesheet">
</head>

<body class="pg-light">
	<div class="container text-center">
		<form class="needs-validation form-signin" action="index.php">
			<?php 
			if (isset($_POST["bot"])) {
				$f = $_POST["bot"];	
				$op = $_POST["cal"];
				switch ($f) {
					case 'PQ':
	 				//variaveis pegadas
					$lb = $_POST["lb"];
					$lp = $_POST["lp"];

	 				//variavéis para conta
					$lb1 = $lb/2;
					$h = sqrt($lp*$lp - $lb1*$lb1);

					//calculo de area
					$area = round(($lb*$lb) + 4 * ($h*$lb/2),2);
					if ($area < 0) {
						$area *= -1;
					}

	 				//calculo volume
					$H = ($h*$h) - ($lb1*$lb1);
					$volume = round((($lb*$lb) * $H)/2,2);
					if ($volume < 0) {
						$volume *= -1;
					}

	 				//calculo perimetro
					$perimetro = (4*$lb) + (4*$lp);
					?>

					<img class="mb-4" src="img/piramidequadrangular.png" alt="" width="72" height="72">
					
					<?php  
					break;

					case 'ES':
					$r = $_POST["r"];

	 				//variaveis para conta
					$pi = 3.14;

	 				//calculo area
					$area = round((4*$pi*(pow($r, 2))));
					if ($area < 0) {
						$area *= -1;
					}

	 				//calculo volume
					$volume = round(($pi*(pow($r, 3))*(4/3)),2);
					if ($volume < 0) {
						$volume *= -1;
					}

	 				//calculo perimetro
					$perimetro = (2*$pi*$r);
					if ($perimetro < 0) {
						$perimetro *= -1;
					}

					?>
					<img class="mb-4" src="img/esfera.png" alt="" width="72" height="72">

					<?php
					break; 

					case 'CL':
				$h = $_POST["h"];
				$r = $_POST["r"];

			//variaveis para conta
				$pi = 3.14;
				$AL = (2*($pi*$r*$h));
				$AB = ($pi*pow($r, 2));

			//calculo area
				$area = round(($AL+(2*$AB)));
				if ($area < 0) {
					$area *= -1;
				}

			//calculo volume
				$volume = round(($AB*$h));
				if ($volume < 0) {
					$volume *= -1;
				}

			//calculo perimetro
				$perimetro = (2*(2*$pi*$r)+2*($h)+2*(2*$pi*$r));
				if ($perimetro < 0) {
					$perimetro *= -1;
				}

				?>
				<img class="mb-4" src="img/cilindro.png" alt="" width="72" height="72">
				<?php
				break;

					case 'TD':
					$l = $_POST["l"];

					//calculo da área
					$area = round(pow($l, 2) * sqrt(3));
					if ($area < 0) {
						$area *= -1;
					}

					//calculando o volume
					$volume = round((pow($l, 3) * sqrt(2))/12,2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculando o perimetro
					$perimetro = 6 * $l;
					?>

					<img class="mb-4" src="img/Tetraedro.png" alt="" width="72" height="72">
					<?php
					break;

					case 'HD':
	 				//Variáveis pegadas
					$ar = $_POST["ar"];

	 				//calculo da área
					$area = round(6 * $ar *$ar,2);
					if ($area < 0) {
						$area *= -1;
					}

					//calculo do volume
					$volume = round(pow($ar, 3),2) ;
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculo do perimetro
					$perimetro = 12 * $ar;
					?>

					<img class="mb-4" src="img/hexaedro.png" alt="" width="72" height="72">
					<?php
					break;

					case 'OD':
					//variáveis
					$a = $_POST["a"];

					//calculo area
					$area = round((2*(pow($a, 2)*sqrt(3))),2);
					if ($area < 0) {
						$area *= -1;
					}

					//calculo volume
					$volume = round((1/3*(pow($a, 3)*sqrt(2))),2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculo perimetro
					$perimetro = (12*$a);
					?>

					<img class="mb-4" src="img/octaedro.png" alt="" width="72" height="72">
					<?php 
					break;

					case 'DD':
					//variaveis
					$l = $_POST["l"];

					//calculo area
					$area = round((3*(pow($l, 3)*sqrt(25+10*(sqrt(5))))),2);
					if ($area < 0) {
						$area *= -1;
					}

					//calculo volume
					$volume = round((1/4*(pow($l, 3)*(15+7*(sqrt(5))))),2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculo perimetro
					$perimetro = (30*$l);
					?>
					<img class="mb-4" src="img/dodecaedro.png" alt="" width="72" height="72">
					<?php 
					break;

					case 'ID':
					$l = $_POST["l"];

					//Calculo da área
					$area = round(5 * pow($l, 2) * sqrt(3),2);
					if ($area < 0) {
						$area *= -1;
					}

					//caluclando o volume
					$volume = round(((5/12) * pow($l, 3) * (3+sqrt(5))),2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculo do perímetro
					$perimetro = $l * 30; 
					?>
					<img class="mb-4" src="img/icosaedro.png" alt="" width="72" height="72">
					<?php
					break;

					case 'PL':
					//variaveis
					$lc = $_POST["lc"];
					$lr = $_POST["lr"];
					$h = $_POST["h"];

					//calculo area
					$area = round((2*$h*$lr+2*$lr*$lr+2*$lr*$h)+(6*(pow($lc, 2))),2);
					if ($area < 0) {
						$area *= -1;
					}

					//calculo volume
					$volume = round(($lr*$lr*$h)+(pow($lc, 3)),2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculo perimetro
					$perimetro = (4*$h+8*$lr+2*$lr)+(12*$lc);
					?>
					<img class="mb-4" src="img/poliedrol.png" alt="" width="72" height="72">
					<?php
					break;

					case 'PM':
					$a = $_POST["a"];
					//calculo da área
					$area = round(5*(6*pow($a,2)),2);
					if ($area < 0) {
						$area *= -1;
					}

					//calculando o volume
					$volume = round(5*pow($a,3),2);
					if ($volume < 0) {
						$volume *= -1;
					}

					//calculando o perimetro
					$perimetro = round(5*(12*$a),2);
					?>
					<img class="mb-4" src="img/poliedromais.png" alt="" width="72" height="72">
					<?php 
					break;
				}	
			}else{
				header("Location: index.php");
			}
			?>
			<h1 class="h3 mb-3 font-weight-normal">Resultados</h1>

			<?php  

			switch ($op) {
				case 'a':
				?>
				<div class="col-mb-3">
					<label for="P">Área</label>
					<input type="text" id="P" class="form-control" placeholder=<?php echo "$area"; ?>>
				</div>
				<div class="w-100"></div>
				<?php  
				break;

				case 'v':
				?>
				<div class="col-mb-3">
					<label for="P">Volume</label>
					<input type="text" id="P" class="form-control" placeholder=<?php echo "$volume"; ?>>
				</div>
				<div class="w-100"></div>
				<?php 
				break;

				case 'p':
				?>
				<div class="col-mb-3">
					<label for="P">Perímetro</label>
					<input type="text" id="P" class="form-control" placeholder=<?php echo "$perimetro"; ?>>
				</div>
				<div class="w-100"></div>
				<?php 
				break;

				case 't':
				?>
				<div class="row">
					<div class="col-md-4">
						<label for="P">Área</label>
						<input type="text" id="P" class="form-control" placeholder=<?php echo "$area"; ?>>
					</div>
					<div class="col-md-4">
						<label for="P">Volume</label>
						<input type="text" id="P" class="form-control" placeholder=<?php echo "$volume"; ?>>
					</div>

					<div class="col-md-4">
						<label for="P">Perimetro</label>
						<input type="text" id="P" class="form-control" placeholder=<?php echo "$perimetro"; ?>>
					</div>
				</div>
				<?php 
				break;

			}
			?>
			<br>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox"> Ajudou
				</label>
			</div>
			<button class="btn btn-light btn-lg bg-light text-dark btn-block" type="submit">Voltar</button>
			<p class="mt-5 mb-3 text-muted">&copy; FPRD</p>
		</form>
	</div>
</body>
</html>