	<br><br><h1>REGISTRO DE USUARIO</h1>
<p class="REGISTRO">
					<style>
	.REGISTRO{
		background-color: forestgreen;
				padding: 15px;
				width: 390px;
	}

</style>




	<form method="post" onsubmit="return validarRegistro()">

	  <center><label for="usuarioRegistro">Escriba su nombre de usuario: </label><br>
		<input type="text" placeholder="Máximo 6 caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>

		<label for="nombresRegistro">Escriba sus nombres: </label><br>
		<input type="text" placeholder="Máximo 20 caracteres." maxlength="20" name="nombresRegistro" id="nombresRegistro" required>

		<label for="apellidoPaternoRegistro">Escriba su apellido paterno: </label><br>
		<input type="text" placeholder="Máximo 10 caracteres." maxlength="10" name="apellidoPaternoRegistro" id="apellidoPaternoRegistro" required>

		<label for="apellidoMaternoRegistro">Escriba su apellido materno: </label><br>
		<input type="text" placeholder="Máximo 10 caracteres." maxlength="10" name="apellidoMaternoRegistro" id="apellidoMaternoRegistro" required>

	  <label for="passwordRegistro">Escriba su Contraseña: </label><br>
		<input type="password" placeholder="Mínimo 6 caracteres, incluir números(s) y una mayúscula" name="passwordRegistro" id="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

	  <label for="emailRegistro">Escriba su correo electrónico: </label><br>
		<input type="email" placeholder="Escriba su correo electrónico correctamente" name="emailRegistro" id="emailRegistro" required>

		<p style="text-align: center"><input type="checkbox" id="terminos"><a href="#">Acepta términos y condiciones</a><center>
	  
		<div style="text-align: left;width:250px"><hr><input type="submit" value="Enviar"></hr>
		
	</form>
</body>
</html>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";

	}
}


  ?>