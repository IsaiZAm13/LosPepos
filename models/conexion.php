<?php 

class Conexion{

	public static function conectar(){

	    $link = new PDO("mysql:host=db;dbname=mariadb", "mariadb", "mariadb");
	    return $link;

    }

}

?>