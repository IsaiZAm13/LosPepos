<?php 

require_once "conexion.php";

class Datos extends Conexion{

	public static function registroUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, nombres, apellidoPaterno, apellidoMaterno, password, email) VALUES (:usuario,:nombres,:apellidoPaterno,:apellidoMaterno,:password,:email)");

		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidoPaterno", $datosModel["apellidoPaterno"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidoMaterno", $datosModel["apellidoMaterno"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";
		}

		$stmt->close();
	}

	public static function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario, password, intentos, ID FROM $tabla WHERE usuario = :usuario");
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();
	}
	
	

	public static function intentosUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");
		$stmt->bindParam(":intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
		$stmt->bindParam(":usuario", $datosModel["usuarioActual"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";
		}

		$stmt->close();

	}

	public static function vistaUsuarioModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, usuario, nombres, apellidoPaterno, apellidoMaterno, password, email FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();

		$stmt->close();
	}

	public static function editarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, usuario, nombres, apellidoPaterno, apellidoMaterno, password, email FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();

		$stmt->close();
	}

	public static function actualizarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, nombres = :nombres, apellidoPaterno = :apellidoPaterno, apellidoMaterno = :apellidoMaterno, password = :password, email = :email WHERE id = :id");
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $datosModel["nombres"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidoPaterno", $datosModel["apellidoPaterno"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidoMaterno", $datosModel["apellidoMaterno"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";
		}

		$stmt->close();

	}

	public static function borrarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";
		}

		$stmt->close();

	}
	
}

?>