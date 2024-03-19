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
			<li><span class="cerrar" onclick="ocultar()">x</span></li>
                        <li><a href="triptico.html">Triptico</a></li>
			<li><a href="index.php">Registrar</a></li>
			<li><a href="ingresar">Ingresar</a></li>
			<li><a href="usuarios">Información usuario</a></li>
			<li><a href="salir">Salir de la sesion</a></li>
		</ul>
	</nav>


	<!--Banner-->
	<header>
		<div class="banner">
			<div class="texto_banner">
				<h1>SERVICIOS GENERALES</h1>
				<p>
					Ofrecemos un medio por el cual el reciclaje pueda ser mas facil y gratificante, teniendo multiples puntos de acceso y paginas para un soporte adecuado al cliente.
				</p>
			</div>
		</div>
	</header>
	<main>
		<section class="nosotros">
			<h1 class="titulo">¿Quienes somos?</h1>
			<div class="linea"></div>
			<p class="contenido">
				
			</p>
			<a href="QuienesSomos.php" class="boton">Ver más</a>
		</section>
		<section class="servicios">
        		<h1 class="titulo">Nuestros Servicios</h1>
        		<div class="linea"></div>
        		<div class="contenido">

        	        <div class="imagen">
        			<div> <img src="imagenes/servicio1.jpeg"></div>
        			<p>Tiendas de canjeo</p>
        			<a href="TiendaPuntos.php" class="boton2">Ver más</a>
        		</div>

        		<div class="imagen">
        			<div> <img src="imagenes/servicio2.jfif"></div>
        			<p>Puntos de productos</p>
        			<a href="PuntosProductos.php" class="boton2">Ver más</a>
        		</div>

      		
        		
        	</div>
        	</section>
        	<footer class="redes">
        		<h3>Síguenos en:</h3>
        		<i class='bx bxl-facebook-circle bx-sm bx-tada-hover espacio' button onclick="location.href=''" style='color:#ffffff'  ></i>

        		<i class='bx bxl-instagram-alt bx-sm bx-tada-hover espacio' button onclick="location.href='https://www.instagram.com/technological_waste_reciclaje/'" style='color:#ffffff' ></i>

        		<i  class='bx bxl-twitter bx-sm bx-tada-hover espacio' button onclick="location.href='https://twitter.com/TechnologicalWa'" style='color:#ffffff' ></i>

        	</footer>
        </main>	
	</body>
</html>