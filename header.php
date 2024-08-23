<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menú Desplegable</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>
		<nav>
			<ul class="menu-horizontal">
				<li><a href="index.php">Inicio</a></li>

				<li>
					<a href="practicas.php">Prácticas</a>
					<ul class="menu-vertical">
						<li>
							<a href="practicas.php#practica1">Práctica 1</a>
							<ul class="menu-sub-vertical">
								<li><a href="#">Experiencias</a></li>
								<li><a href="#">Ejercicios</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Práctica 2</a>
							<ul class="menu-sub-vertical">
								<li><a href="#">Experiencias</a></li>
								<li><a href="#">Ejercicios</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li><a href="apuntes.php">Apuntes</a></li>
			</ul>
		</nav>
	</header>
