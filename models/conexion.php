<?php 

class Conexion{

	public static function conectar(){

	    $link = new PDO("mysql:host=localhost;dbname=tecni", "root", "");
	    return $link;

    }

}

?>