<?php

session_start();

session_destroy();


if(!$_SESSION ){

echo '<h1>OHno, no tienes una sesion iniciada</h1>';

exit();

} 
  
?>

<br><br><h1>¡Haz salido de la aplicación!</h1>