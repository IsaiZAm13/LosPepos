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
	<title>Contenedor de Reciclaje</title>
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
			<h1 class="titulo">Ubicaciones de puntos de canjeo </h1>
			<div class="linea"></div>
			<p class="contenido">
				<p class="table">

				    <table border="2">
				   
<style>
	.table{
		background-color: forestgreen;
		padding: 18px;



	}

</style>
				    	<thead>				    		
				    		<tr>
				    			<th>Tienda</th>
				    			<th>Estado</th>
				    			<th>Municipio</th>
				    			<th>Calle</th>
				    			<th>Colonia</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		<th>Soriana</th>
				    		<th>Nuevo León</th>
				    		<th>Monterrey</th>
				    		<th>San Nicolas</th>
				    		<th>5 de Mayo</th>
				    	</tbody>
				    	<tbody>
				    		<th>Aurera</th>
				    		<th>Nuevo León</th>
				    		<th>Santa Catarina</th>
				    		<th>San Alberto</th>
				    		<th>Paseo de las Naranjas</th>
				    	</tbody>
				    	<tbody>
				    		<th>Oxxo</th>
				    		<th>Nuevo León</th>
				    		<th>Santa Catarina, Garcia y Monterrey</th>
				    		<th>En cualquier calle de los anteriores municipios mencionados.</th>
				    		<th>En cualquier Colonia de los anteriores municipios mencionados</th>
				    	</tbody>
				    	<tbody>
				    		<th>Smart</th>
				    		<th>Nuevo León</th>
				    		<th>García</th>
				    		<th>Avenida de Insurgentes</th>
				    		<th>Palanco</th>
				    	</tbody>
				    	<tbody>
				    		<th>Walmart</th>
				    		<th>Nuevo León</th>
				    		<th>Santa Catarina</th>
				    		<th>Avenida 16 de septiembre</th>
				    		<th>San Ángel</th>
				    	</tbody>
				    	<tbody>
				    		<th>Merco</th>
				    		<th>Nuevo León</th>
				    		<th>García y Monterrey</th>
				    		<th>En cualquier calle de los anteriores municipios mencionados</th>
				    		<th>En cualquier Colonia de los anteriores municipios mencionados</th>
				    	</tbody>
				    	<tbody>
				    		<th>Aurera express</th>
				    		<th>Nuevo León</th>
				    		<th>García</th>
				    		<th>Paseo de la reforma.</th>
				    		<th>Paseo de las Torres</th>
				    	</tbody>
				    	<tbody>
				    		<th>Del Sol</th>
				    		<th>Nuevo León</th>
				    		<th>Santa Catarina</th>
				    		<th>En cualquier calle de los anteriores municipios mencionados</th>
				    		<th>En cualquier Colonia de los anteriores municipios mencionados</th>
				    	</tbody>				    	
				    </table>
			</p>
			<a href="PagPrincipal.php" class="boton">Regresar al inicio</a>
		</section>
		<footer class="redes">
        		<h3>Síguenos en:</h3>
        		<i href="Contactenos.php" class='bx bxl-facebook-circle bx-sm bx-tada-hover espacio' button onclick="location.href=''" style='color:#ffffff'  ></i>

        		<i class='bx bxl-instagram-alt bx-sm bx-tada-hover espacio' button onclick="location.href='https://www.instagram.com/technological_waste_reciclaje/'" style='color:#ffffff' ></i>

        		<i  class='bx bxl-twitter bx-sm bx-tada-hover espacio' button onclick="location.href='https://twitter.com/TechnologicalWa'" style='color:#ffffff' ></i>
        	</footer>
        </main>	
	</body>
</html>