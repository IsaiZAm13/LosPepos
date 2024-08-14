<?php
class Conexion {
    public static function conectar() {
        $host = 'localhost';
        $db = 'tecni';
        $user = 'root';
        $password = '';
        
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
?>


