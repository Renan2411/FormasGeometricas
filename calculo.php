<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Template de login, usando Bootstrap.</title>

	<!-- Principal CSS do Bootstrap -->
	<link href="bootstrap.min.css" rel="stylesheet">

	<!-- Estilos customizados para esse template -->
	<link href="page.css" rel="stylesheet">
</head>

<body class="text-center">

	<form class="form-signin" action="index.php">
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

	 			//calculo volume
				$H = ($h*$h) - ($lb1*$lb1);
				$volume = round((($lb*$lb) * $H)/2,2);

				if ($area < 0) {
					$area *= -1;
				}
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
				$perimetro = ((2*$AB)+$AL);
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
				$area = round(pow($a, 2) * sqrt(3));
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
				<img class="mb-4" src="img/Tetaedro.png" alt="" width="72" height="72">
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

				break;

				case 'DD':
		# code...
				break;

				case 'ID':
				$l = $_POST["l"];

			//Calculo da área
				round($area = 5 * pow($l, 2) * sqrt(3),2);
				if ($area < 0) {
					$area *= -1;
				}

			//caluclando o volume
				$volume = round(((5/12) * pow($l, 3) * (3+sqrt(5))),2);
				if ($volume < 0) {
					$volume *= -1;
				}

				$perimetro = $l * 30; 
				?>
				<img class="mb-4" src="img/icosaedro.png" alt="" width="72" height="72">
				<?php
				break;

				case 'PL':
		# code...
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
				<input type="email" id="P" class="form-control" placeholder=<?php echo "$area"; ?>>
			</div>
			<div class="w-100"></div>
			<?php  
			break;
			
			default:
				# code...
			break;
		}
		?>
		<!-- <div class="col-mb-3">
			<label for="inputEmail" class="sr-only">Endereço de email</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
		</div>

		<label for="inputPassword" class="sr-only">Senha</label>
		<input type="text" id="inputPassword" class="form-control" placeholder="Senha" required> -->
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox"> Ajudou
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Voltar</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
	</form>
</body>
</html>