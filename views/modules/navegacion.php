<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estiloNavegacion.css">
	<title>Technological Waste</title>
	<script type="text/javascript" src="funciones.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<style>
		body{
				background-image: url('imagenes/verde.jpg');
			}
	</style>
	<!--Menú-->
	<nav class="menu">
		<div class="hamburguesa" onclick="mostrar()">
			<span></span><span></span><span></span>
		</div>
		<label class="logo">Technological Waste</label>
		<ul id="menu-desplegable">
			<li><a href="PagPrincipal.php">Volver Inicio</a></li>
			<li><span class="cerrar" onclick="ocultar()">X</span></li>
			<li><a href="index.php">Registrese</a></li>
			<li><a href="ingresar">Ingresar</a></li>
			<li><a href="usuarios">Información usuario</a></li>
			<li><a href="salir">Salir de la sesion</a></li>
		</ul>
	</nav>
</body>
</html>