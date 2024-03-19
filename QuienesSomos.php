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
			<h1 class="titulo">¿Quienes somos?</h1>
			<div class="linea"></div>
			<p class="contenido">
				Somos una empresa en desarrollo que busca ofrecer un medio en el cual poder reciclar será mas fácil y gratificante, nuestra misión es incentivar al cliente  a usar nuestro contenedor puesto que es un basurero inteligente que ayudara y mejorara el reciclaje y al medio ambiente.<br><br>

                Nuestra función es ofrecer un contenedor que al utilizarlo y depositar el material de reciclaje la maquina detectara el ingreso de la basura y este identificara el material de este y al detectar que material es mandara un aviso al cliente que lo este usando sobre cuantos puntos ha ganado por el reciclaje realizado.<br><br>

                Finalmente cuando el contenido haya sido ingresado el cliente obtendrá sus puntos de forma exitosa, ya el cliente podrá obstar por seguir juntando puntos o canjearlos en una sucursal especifica.<br><br>
			</p>
			<a href="PagPrincipal.php" class="boton">Regresar a Inicio</a>
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