<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Template</title>

	<style>
		
		

		section{
			position: relative;
			margin: auto;
			width: 400px;
		}

		section h1{
			position: relative;
			margin: auto;
			padding: 10px;
			text-align: center;
		}

		section form{
			position: relative;
			margin: auto;
			width: 400px;
		}

		section form input{
			display: inline-block;
			padding: 10px;
			width: 95%;
			margin: 5px;
		}

		section form input[type="submit"]{
			position: relative;
			margin: 20px auto;
			left: 4.5%;
		}

		table{
			position: relative;
			margin: auto;
			width: 50%;
			left: -50%;
		}

		table thead tr th{
			padding: 10px;
		}

		table tbody tr td{
			padding: 10px;
		}
	</style>
</head>
<body>

	<header>
		<h1></h1>
	</header>
	<?php
	    include "modules/navegacion.php";
	?>
<section>

<?php 

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

?>

</section>

<script src="views/js/validarRegistro.js"></script>
<script src="views/js/validarIngreso.js"></script>
<script src="views/js/validarCambio.js"></script>

</body>
</html>