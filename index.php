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
	<section id="home" class="content">
		<article class="box">
			<h2>Home</h2>
			VAMO COLOCAR O PLUGIN DE SLIDE
		</article>
	</section>

	<section id="company" class="content">
		<article class="box">
			<h2>Pirâmide de Base Quadrada</h2>	 
			<!-- Fromulário para PQ -->
			<form class="needs-validation" method="post" action="calculo.php"> 
				<div class="row">

					<div class="col-md-2 mb-3">
						<label for="lb">Lado da Base</label>
						<input type="number" min="0" name="lb" id="lb" class="form-control" placeholder="Digite em cm">
						<div class="invalid-feedback">
							Obrigatório
						</div>
					</div>

					<div class="col-md-2 mb-3">
						<label for="lp">Lado da Pirâmide</label>
						<input type="number" name="lp" id="lp" min="0" class="form-control" placeholder="Digite em cm">
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
				<li id="link-home"><a href="#home">&nbsp;Home </a></li>
				<li id="link-company"><a href="#company">&nbsp;Pirâmide de Base Quadrada</a></li>
				<li id="link-service"><a href="#service">&nbsp;Serviços</a></li>
				<li id="link-contact"><a href="#contact">&nbsp;Contato</a></li>
			</ul>
		</nav>
	</header>	
	
</body>
</html>