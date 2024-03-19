<?php

require_once "controllers/controller.php";
require_once "models/enlaces.php";
require_once "models/crud.php";

$mvc = new MvcController();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Technological Waste</title>
	<script type="text/javascript" src="funciones.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<style>
		body{
				background-image: url('imagenes/gris.jpg');
			}
	</style>
	<!--Menú-->
	<nav class="menu">
		<div class="hamburguesa" onclick="mostrar()">
			<span></span><span></span><span></span>
		</div>
		<label class="logo">Technological Waste</label>
		<ul id="menu-desplegable">
			<li><span class="cerrar" onclick="ocultar()">X</span></li>
                        <li><a href="PagPrincipal.php">Volver Inicio</a></li>
			<li><a href="index.php">Registrar</a></li>
			<li><a href="ingresar">Ingresar</a></li>
			<li><a href="usuarios">Información usuario</a></li>
			<li><a href="salir">Salir de la sesion</a></li>
		</ul>
	</nav>

	<main>
		<section class="nosotros">
			<center><h1 class="titulo">Productos de puntos de canjeo</h1>
			<div class="linea"></div>
			<p class="contenido">
				<p class="table">
				<table border="3">


					<style>
	.table{
		background-color: forestgreen;
				padding: 15px;
				width: 14%;

	}

</style>


				    	<thead>			    		
				    		<tr>
				    			<th>Productos</th>
				    			<th>Puntos</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		<th>Papel</th>
				    		<th>1 puntos</th>
				    	</tbody>
				    	<tbody>
				    		<th>Plastico</th>
				    		<th>3 puntos</th>
				    	</tbody>
				    	<tbody>
				    		<th>Carton</th>
				    		<th>5 puntos</th>
				    	</tbody>
				    	<tbody>
				    		<th>Aluminio</th>
				    		<th>8 puntos</th>
				    	</tbody>
				    	<tbody>
				    		<th>Vidrio</th>
				    		<th>10 puntos</th>
				    	</tbody>				    	
				    </table>

			</p>
			<a href="PagPrincipal.php" class="boton">Regresar al inicio</a>
		</section>

		<footer class="redes">
        		<h3>Síguenos en:</h3>
        		<i href="Contactenos.html" class='bx bxl-facebook-circle bx-sm bx-tada-hover espacio' button onclick="location.href=''" style='color:#ffffff'  ></i>

        		<i class='bx bxl-instagram-alt bx-sm bx-tada-hover espacio' button onclick="location.href='https://www.instagram.com/technological_waste_reciclaje/'" style='color:#ffffff' ></i>

        		<i  class='bx bxl-twitter bx-sm bx-tada-hover espacio' button onclick="location.href='https://twitter.com/TechnologicalWa'" style='color:#ffffff' ></i>
        	</footer>
        </main>	
	</body>
</html>