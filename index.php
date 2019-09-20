<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formas Geométricas</title>
	<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/4.1.1/normalize.css">
	<link rel="stylesheet" type="text/css" href="page.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="pg-light">
	<script src="plugins/jquery-3.4.1.js"></script>

	<section id="home" class="content">
		<article class="box">
			<button class="btn btn-primary btn-lg" onclick="tempo()" id="bla">Mostrar Figuras</button>
			<img src="img/esfera.png" id="esc1">
			<img src="img/piramidequadrangular.png" id="esc2">
			<img src="img/cilindro.png" id="esc3">
			<img src="img/tetraedro.png" id="esc4">
			<img src="img/hexaedro.png" id="esc5">
			<img src="img/octaedro.png" id="esc6">
			<img src="img/dodecaedro.png" id="esc7">
			<img src="img/icosaedro.png" id="esc8">
			<img src="img/poliedrol.png" id="esc9">
			<img src="img/poliedromais.png" id="esc10">			
		</article>
	</section>

	<section id="company1" class="content">
		<article class="box">
			<h2>Esfera</h2>	 
			<!-- Fromulário para ES -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

					<div class="col-md-2 mb-3">
						<label for="r">Raio da Esfera</label>
						<input type="number" name="r" id="r"class="form-control" placeholder="Digite em cm" required>
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="ES">Enviar</button>
			</form>
		</article>
	</section>


	<section id="company2" class="content">
		<article class="box">
			<h2>Pirâmide de Base Quadrangular</h2>	 
			<!-- Fromulário para PQ -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

					<div class="col-md-2 mb-3">
						<label for="lb">Lado da Base</label>
						<input type="number" min="0" name="lb" id="lb" class="form-control" placeholder="Digite em cm" required>
						<div class="invalid-feedback">
							Obrigatório
						</div>
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="PQ">Enviar</button>
			</form>
		</article>
	</section>

	<section id="company3" class="content">
		<article class="box">
			<h2>Cilindro</h2>	 
			<!-- Fromulário para CL -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="CL">Enviar</button>
			</form>
		</article>
	</section>

	<!--Para o Teteaedro -->
	<section id="company4" class="content">
		<article class="box">
			<h2>Tetraedro</h2>	 
			<form class="needs-validation" action="calculo.php" method="post">
				<div class="row">

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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="HD">Enviar</button>
			</form>
		</article>
	</section>

	<!--Para o Hexaedro -->
	<section id="company5" class="content">
		<article class="box">
			<h2>Hexaedro</h2>	 
			<form class="needs-validation" action="calculo.php" method="post">
				<div class="row">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="HD">Enviar</button>
			</form>
		</article>
	</section>

	<section id="company6" class="content">
		<article class="box">
			<h2>Octaedro</h2>	 
			<!-- Fromulário para OD -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

					<div class="col-md-2 mb-3">
						<label for="r">Aresta</label>
						<input type="number" name="a" id="a"class="form-control" placeholder="Digite em cm">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="OD">Enviar</button>
			</form>
		</article>
	</section>

	<section id="company7" class="content">
		<article class="box">
			<h2>Dodecaedro</h2>	 
			<!-- Fromulário para DD -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

					<div class="col-md-2 mb-3">
						<label for="r">Lado</label>
						<input type="number" name="l" id="l"class="form-control" placeholder="Digite em cm">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="DD">Enviar</button>
			</form>
		</article>
	</section>

	<!-- Para Icosaedro  -->
	<section id="company8" class="content">
		<article class="box">
			<h2>Icosaedro</h2>	 
			<form class="needs-validation" action="calculo.php" method="post">
				<div class="row">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="ID">Enviar</button>
			</form>
		</article>
	</section>  

	<!-- Para Poliedro L  -->
	<section id="company9" class="content">
		<article class="box">
			<h2>Poliedro L</h2>	 
			<form class="needs-validation" action="calculo.php" method="post">
				<div class="row">
					<div class="col-md-2 mb-3">
						<label for="lc">Lado do Cubo</label>
						<input type="number" min="0" name="lc" id="lc" placeholder="Digite em cm" class="form-control">
						<div class="invalid-feedback">Obrigatório</div>
					</div>

					<div class="col-md-2 mb-3">
						<label for="lr">Lado do Retângulo</label>
						<input type="number" min="0" name="lr" id="lr" placeholder="Digite em cm" class="form-control">
						<div class="invalid-feedback">Obrigatório</div>
					</div>

					<div class="col-md-2 mb-3">
						<label for="h">Altura do Retângulo</label>
						<input type="number" min="0" name="h" id="h" placeholder="Digite em cm" class="form-control">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="PL">Enviar</button>
			</form>
		</article>
	</section>  

	<!--Para o  Poliedro Mais-->
	<section id="company10" class="content">
		<article class="box">
			<h2>Poliedro Mais</h2>	 
			<form class="needs-validation" action="calculo.php" method="post">
				<div class="row">
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
				<button class="btn btn-primary btn-lg" type="submit" name="bot" value="PM">Enviar</button>
			</form>
		</article>
	</section>


	<section id="service" class="content">
		<article class="box">
			<h2>Serviços</h2>	 
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo massa,
				vestibulum id pulvinar quis, pharetra vestibulum quam. Sed ornare malesuada arcu id pulvinar.
				Ut vulputate est sed nisl mattis lacinia. Aliquam mollis mauris id dictum tempus. Donec a
				imperdiet purus, sed iaculis lectus. Nunc ligula enim, feugiat in vulputate vitae,
				viverra sit amet nibh. Pellentesque sit amet nulla vel dolor dapibus cursus.
			</p>
		</article>
	</section>

	<section id="contact" class="content">
		<article class="box">
			<h2>Contato</h2>	 
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo massa,
				vestibulum id pulvinar quis, pharetra vestibulum quam. Sed ornare malesuada arcu id pulvinar.
				Ut vulputate est sed nisl mattis lacinia. Aliquam mollis mauris id dictum tempus. Donec a
				imperdiet purus, sed iaculis lectus. Nunc ligula enim, feugiat in vulputate vitae,
				viverra sit amet nibh. Pellentesque sit amet nulla vel dolor dapibus cursus.
			</p>
		</article>
	</section> 

	<header>
		<h1>Formas Geométricas</h1>
		<nav>
			<ul>
				<li id="link-home"><a href="#home">&nbsp;Home</a></li>
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
				<li id="link-service"><a href="#service">&nbsp;Serviços</a></li>
				<li id="link-contact"><a href="#contact">&nbsp;Contato</a></li>
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

			setTimeout(function(){
				$("#bla").hide();
				$("#esc1").fadeIn(1000);
			},1000);

			setTimeout(function () {
				$("#esc1").hide();
				$("#esc2").fadeIn(1000);
			},2000);

			setTimeout(function() {
				$("#esc2").hide();
				$("#esc3").fadeIn(1000);
				
			},3000);

			setTimeout(function() {
				$("#esc3").hide();
				$("#esc4").fadeIn(1000);
				
			},4000);

			setTimeout(function () {
				$("#esc4").hide();
				$("#esc5").fadeIn(1000);
				
			},5000);

			setTimeout(function () {
				$("#esc5").hide();
				$("#esc6").fadeIn(1000);
				
			},6000);

			setTimeout(function () {
				$("#esc6").hide();
				$("#esc7").fadeIn(1000);
				
			},7000);

			setTimeout(function () {
				$("#esc7").hide();
				$("#esc8").fadeIn(1000);
				
			},8000);

			setTimeout(function () {
				$("#esc8").hide();
				$("#esc9").fadeIn(1000);
				
			},9000);

			setTimeout(function () {
				$("#esc9").hide();
				$("#esc10").fadeIn(1000);
				
			},10000);

			setTimeout(function () {
				$("#esc10").hide();
				$("#bla").fadeIn(1000);

			},11000);

		}
	</script>

</body>
</html>
