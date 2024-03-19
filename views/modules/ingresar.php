<br><br><h1>INGRESAR</h1>
<p class="INGRESAR">
					<style>
	.INGRESAR{
		background-color: forestgreen;
				padding: 15px;
				width: 385px;
	}

</style>


<form method="post">

	<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

	<input type="password" placeholder="Contraseña" name="passwordIngreso" required>
	<div style="text-align: -2 ;width:380px">
	<input type="submit" value="Enviar" name="ntn1">
	
</form>

<?php
function validarInput($input) {
    // Expresión regular para validar que el input no contenga caracteres especiales
    $patron = '/^[a-zA-Z0-9\s]+$/';
    // Verificar si el input coincide con el patrón
    if (preg_match($patron, $input)) {
        return true; // El input es válido
    } else {
        return false; // El input contiene caracteres especiales
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el input de usuario y contraseña
    if (validarInput($_POST["usuarioIngreso"]) && validarInput($_POST["passwordIngreso"])) {
        // Aquí continuarías con tu lógica de ingreso de usuario
        $ingreso = new MvcController();
        $ingreso->ingresoUsuarioController();
    } else {
        // Mostrar un mensaje de error si se encontraron caracteres especiales
        echo "El usuario y/o contraseña contienen caracteres especiales no permitidos.";
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "fallo") {
        echo "Fallo al ingresar";
    }
    if ($_GET["action"] == "fallo3intentos") {
        echo "Ha fallado 3 veces para ingresar, favor llenar el captcha";
    }
}
?>