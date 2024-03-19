<?php

if( empty(session_id()) && !headers_sent()){
	session_start();
}


if(!$_SESSION["validar"]){

	echo '<script>window.location:index.php?action=ingresar"</script>';

	exit();

}

  ?>
  
<br><br><h1>EDITAR INFORMACIÓN DE PERFIL</h1>

<form method="post">

<?php

$editarUsuario = new MvcController(); 
$editarUsuario -> editarUsuarioController();
$editarUsuario -> actualizarUsuarioController();

  ?>	
	
</form>

