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
	<!-- Estilos customizados para esse template -->
	<link href="page.css" rel="stylesheet">
</head>

<body class="bg-white">
	<script src="plugins/jquery-3.4.1.js"></script>
	<?php 
	if (isset($_POST["bot"])) {
		?>
		<div class="container text-center">
			<form class="needs-validation form-signin" action="index.php">
				<?php  
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
	<?php 
}else{
	?>
	<div class="container text-center">
		<form class="needs-validation form-signin" action="index.php">

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


	<section id="home" class="content">

		<article class="box">
			<div class="row" id="1">
				<div class="col-md-3"><img src="img/esfera.png" id="esc1"></div>
				<div class="col-md-3"><img src="img/piramidequadrangular.png" id="esc2"></div>
				<div class="col-md-3"><img src="img/cilindro.png" id="esc3"></div>
				<div class="col-md-3"><img src="img/tetraedro.png" id="esc4"></div>
			</div>

			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3"><img src="img/hexaedro.png" id="esc5"></div>
				<div class="col-md-3"><img src="img/octaedro.png" id="esc6"></div>
				<div class="col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-md-3"><img src="img/dodecaedro.png" id="esc7"></div>
				<div class="col-md-3"><img src="img/icosaedro.png" id="esc8"></div>
				<div class="col-md-3"><img src="img/poliedrol.png" id="esc9"></div>
				<div class="col-md-3"><img src="img/poliedromais.png" id="esc10"></div>
			</div>


			<button class="btn btn-light btn-lg bg-light text-dark"  onclick="tempo()" id="bla">Mostrar Figuras</button>		
		</article>
	</section>

	<section id="company1" class="content">
		<article class="box" align="center">
			<div><h2>Esfera</h2></div>
			<img src="img/esfera.png">
			<!-- Fromulário para ES -->
			<div class="w-100">
				<form class="needs-validation" method="post" action="index.php"> 
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="r">Raio da Esfera</label>
							<input type="number" name="r" id="r"class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha o Cálculo</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="ES">Enviar</button>
				</form>
			</article>
		</section>

		<section id="company2" class="content">
			<article class="box" align="center">
				<h2>Pirâmide de Base Quadrangular</h2>	
				<img src="img/piramidequadrangular.png"> 
				<!-- Fromulário para PQ -->
				<form class="needs-validation" method="post" action="index.php"> 
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="lb">Lado da Base</label>
							<input type="number" min="0" name="lb" id="lb" class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						<div class="col-md-2 mb-3">
							<label for="lp">Lado da Pirâmide</label>
							<input type="number" name="lp" id="lp" min="0" class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						</div>
						<!-- <div class="w-100"></div> -->

						<div class="col-md-2 mb-3">
							<label for="cal">Escolha o Cálculo</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="PQ">Enviar</button>
				</form>
			</article>
		</section>

		<section id="company3" class="content">
			<article class="box" align="center">
				<h2>Cilindro</h2>	 
				<img src="img/cilindro.png">
				<!-- Fromulário para CL -->
				<form class="needs-validation" method="post" action="index.php"> 
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="h">Altura do Cilindro</label>
							<input type="number" min="0" name="h" id="h" class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="r">Raio do Cilindro</label>
							<input type="number" name="r" id="r" min="0" class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>

						</div>

						<div class="col-md-2 mb-3">
							<label for="cal">Escolha o Cálculo</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="CL">Enviar</button>
				</form>
			</article>
		</section>

		<!--Para o Teteaedro -->
		<section id="company4" class="content">
			<article class="box" align="center">
				<h2>Tetraedro</h2>	 
				<img src="img/tetraedro.png">
				<form class="needs-validation" action="index.php" method="post">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="l">Lado</label>
							<input type="number" min="0" name="l" id="l" class="form-control" placeholder="Digite em cm" required>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="TD">Enviar</button>
				</form>
			</article>
		</section>

		<!--Para o Hexaedro -->
		<section id="company5" class="content">
			<article class="box" align="center">
				<h2>Hexaedro</h2>	 
				<img src="img/hexaedro.png">
				<form class="needs-validation" action="index.php" method="post">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="ar">Valor da Aresta</label>
							<input type="number" min="0" name="ar" id="ar" placeholder="digite em cm" class="form-control" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="HD">Enviar</button>
				</form>
			</article>
		</section>

		<section id="company6" class="content">
			<article class="box" align="center">
				<h2>Octaedro</h2>	 
				<img src="img/octaedro.png">
				<!-- Fromulário para OD -->
				<form class="needs-validation" method="post" action="index.php"> 
					<div class="row d-flex justify-content-center">

						<div class="col-md-2 mb-3">
							<label for="r">Aresta</label>
							<input type="number" name="a" id="a"class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha o Cálculo</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="OD">Enviar</button>
				</form>
			</article>
		</section>

		<section id="company7" class="content">
			<article class="box" align="center">
				<h2>Dodecaedro</h2>	 
				<img src="img/dodecaedro.png">
				<!-- Fromulário para DD -->
				<form class="needs-validation" method="post" action="index.php"> 
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="r">Lado</label>
							<input type="number" name="l" id="l"class="form-control" placeholder="Digite em cm" required>
							<div class="invalid-feedback">
								Obrigatório
							</div>
						</div>

						<div class="col-md-2 mb-3">
							<label for="cal">Escolha o Cálculo</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="DD">Enviar</button>
				</form>
			</article>
		</section>

		<!-- Para Icosaedro  -->
		<section id="company8" class="content">
			<article class="box" align="center">
				<h2>Icosaedro</h2>	
				<img src="img/icosaedro.png"> 
				<form class="needs-validation" action="index.php" method="post">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="l">Lado</label>
							<input type="number" min="0" name="l" id="l" placeholder="Digite em cm" class="form-control" required>
							<div class="invalid-feedback">Obrigatório</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="ID">Enviar</button>
				</form>
			</article>
		</section>  

		<!-- Para Poliedro L  -->
		<section id="company9" class="content">
			<article class="box" align="center">
				<h2>Poliedro L</h2>	 
				<img src="img/poliedrol.png">
				<form class="needs-validation" action="index.php" method="post">
					<div class="row d-flex justify-content-center">
						<div class="col-md-2 mb-3">
							<label for="lc">Lado do Cubo</label>
							<input type="number" min="0" name="lc" id="lc" placeholder="Digite em cm" class="form-control" required>
							<div class="invalid-feedback">Obrigatório</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="lr">Lado do Retângulo</label>
							<input type="number" min="0" name="lr" id="lr" placeholder="Digite em cm" class="form-control" required>
							<div class="invalid-feedback">Obrigatório</div>
						</div>

						<div class="col-md-2 mb-3">
							<label for="h">Altura do Retângulo</label>
							<input type="number" min="0" name="h" id="h" placeholder="Digite em cm" class="form-control" required>
							<div class="invalid-feedback">Obrigatório</div>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="PL">Enviar</button>
				</form>
			</article>
		</section>  

		<!--Para o  Poliedro Mais-->
		<section id="company10" class="content">
			<article class="box" align="center">
				<h2>Poliedro Mais</h2>	 
				<img src="img/poliedromais.png">
				<form class="needs-validation" action="index.php" method="post">
					<div class="row d-flex justify-content-center">
						<!-- Colocar o campo para pedir -->
						<div class="col-md-2 mb-3">
							<label for="a">Aresta</label>
							<input type="number" min="0" name="a" id="a" class="form-control" placeholder="Digite em cm" required>
						</div>
						<div class="col-md-2 mb-3">
							<label for="cal">Escolha</label>
							<select class="custom-select d-block w-100" required name="cal" id="cal">
								<option value="t">Todos</option>
								<option value="p">Perímetro</option>
								<option value="a">Área</option>
								<option value="v">Volume</option>
							</select>
						</div>
					</div>
					<button class="btn btn-light btn-lg bg-light text-dark" type="submit" name="bot" value="PM">Enviar</button>
				</form>
			</article>
		</section>

		<section id="contact" class="content">
			<article class="box">
				<h2>Sobre Nós</h2>
				<div class="row d-flex justify-content-center">
					<div class="col">
						<label for="a">Francesco Pagani Galvão</label>
						<p align="left">
							Estudante do Curso Técnico Integrado em Informática no Instituto Federal de Mato Grosso do Sul (IFMS) campus Corumbá, atualmente no 6º semestre, desenvolve projeto na área de Ciência da Computação e Música, intitulado "Desenvolvimento de um Instrumentista Autômato: Leitor e Interpretador de Partituras Musicais".<br>
							E-mail: francescogalvao@gmail.com<br>
							Twitter: @fpgni<br>
							GitHub: franpgn
						</p>
					</div> 
					<div class="col">
						<label for="a">Renan Augusto Monteiro Duarte</label>
						<p align="left">
							Estudante do Curso Técnico Integrado em Informática no Instituto Federal de Mato Grosso do Sul (IFMS) campus Corumbá, atualmente no 6º semestre, desenvolve projeto na área de Ciência da Computação e Música, intitulado "Desenvolvimento de um Instrumentista Autômato: Leitor e Interpretador de Partituras Musicais".<br>
							E-mail: renanmd2411@gmail.com<br>
							Twitter: @ramd_1122<br>
							GitHub: renan2411
						</p>
					</div>
				</div>
				<div class="row d-flex justify-content-center"><img src="img/sobre.jpg" id="sobre"></div>
			</article>
		</section> 

		<header>
			<h1>Formas Geométricas</h1>
			<nav>
				<ul>
					<li id="link-home"><a href="#home">&nbsp;Mostruário</a></li>
					<li id="link-company1"><a href="#company1">&nbsp;Esfera</a></li>
					<li id="link-company2"><a href="#company2">&nbsp;Pirâmide de Base Quadrangular</a></li>
					<li id="link-company3"><a href="#company3">&nbsp;Cilindro</a></li>
					<li id="link-company4"><a href="#company4">&nbsp;Tetraedro</a></li>
					<li id="link-company5"><a href="#company5">&nbsp;Hexaedro</a></li>
					<li id="link-company6"><a href="#company6">&nbsp;Octaedro</a></li>
					<li id="link-company7"><a href="#company7">&nbsp;Dodecaedro</a></li>
					<li id="link-company8"><a href="#company8">&nbsp;Icosaedro</a></li>
					<li id="link-company9"><a href="#company9">&nbsp;Poliedro L</a></li>
					<li id="link-company10"><a href="#company10">&nbsp;Poliedro Mais</a></li>
					<li id="link-contact"><a href="#contact">&nbsp;Sobre Nós</a></li>
				</ul>
			</nav>
		</header>	

		<script type="text/javascript">
			$("#esc1").hide();
			$("#esc2").hide();
			$("#esc3").hide();
			$("#esc4").hide();
			$("#esc5").hide();
			$("#esc6").hide();
			$("#esc7").hide();
			$("#esc8").hide();
			$("#esc9").hide();
			$("#esc10").hide();
			tempo = function () {
			//x = 0;

			setTimeout(function(){
				$("#bla").hide();
				$("#esc1").fadeIn(1000);
			},1000);

			setTimeout(function () {
				//$("#esc1").hide();
				$("#esc2").fadeIn(1000);
			},2000);

			setTimeout(function() {
				//$("#esc2").hide();
				$("#esc3").fadeIn(1000);
				
			},3000);

			setTimeout(function() {
				//$("#esc3").hide();
				$("#esc4").fadeIn(1000);
				
			},4000);

			setTimeout(function () {
				//$("#esc4").hide();
				$("#esc5").fadeIn(1000);
				
			},5000);

			setTimeout(function () {
				//$("#esc5").hide();
				$("#esc6").fadeIn(1000);
				
			},6000);

			setTimeout(function () {
				//$("#esc6").hide();
				$("#esc7").fadeIn(1000);
				
			},7000);

			setTimeout(function () {
				//$("#esc7").hide();
				$("#esc8").fadeIn(1000);
				
			},8000);

			setTimeout(function () {
				//$("#esc8").hide();
				$("#esc9").fadeIn(1000);
				
			},9000);

			setTimeout(function () {
				//$("#esc9").hide();
				$("#esc10").fadeIn(1000);
				
			},10000);

			setTimeout(function () {
				$("#esc1").hide();
				$("#esc2").hide();
				$("#esc3").hide();
				$("#esc4").hide();
				$("#esc5").hide();
				$("#esc6").hide();
				$("#esc7").hide();
				$("#esc8").hide();
				$("#esc9").hide();
				$("#esc10").hide();
				$("#bla").fadeIn(1000);
			},11000);

		}

	</script>


</body>
</html>

<?php 
}
?>