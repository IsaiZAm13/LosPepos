<?php

session_start();

if(!$_SESSION["validar"]){

	echo '<script>window.location="ingresar"</script>';

	exit();

}

  ?>


<br><br><h1>INFORMACIÓN DE SU PERFIL</h1>

    <table border="1">

    	<thead>
    		
    		<tr>
    			<th>Usuario</th>
    			<th>Nombres</th>
    			<th>Apellido Paterno</th>
    			<th>Apellido Materno</th>
    			<th>Contraseña</th>
    			<th>Email</th>
    			<th>Editar</th>
    			<th>Borrar</th>

    		</tr>

    	</thead>

    	<tbody>
    		
    		<?php
    		$vistaUsuario = new MvcController();
    		$vistaUsuario -> vistaUsuarioController();
    		$vistaUsuario -> borrarUsuarioController();
    		?>

    	</tbody>


    	
    </table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambio"){

		echo "Cambio Exitoso";

	}
}

  ?>