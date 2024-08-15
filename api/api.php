<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


require_once 'db.php';


class UsuarioModel {
    public static function vistaUsuarioModel($tabla) {
        // Preparar la consulta SQL
        $stmt = Conexion::conectar()->prepare("SELECT id, usuario, nombres, apellidoPaterno, apellidoMaterno, password, email FROM $tabla");
        // Ejecutar la consulta
        $stmt->execute();
     
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    if (isset($_GET['tabla'])) {
      
        $tabla = $_GET['tabla'];
        
        $result = UsuarioModel::vistaUsuarioModel($tabla);
        
        echo json_encode($result);
    } else {
        
        echo json_encode(["error" => "Falta el parámetro 'tabla'"]);
    }
} else {
  
    echo json_encode(["error" => "Método no permitido"]);
}
?>
