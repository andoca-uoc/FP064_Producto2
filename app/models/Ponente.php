<?php
require_once __DIR__ . "/db.php";

class Ponente {
	private $db;
	public $Id_usuario;
	public $Username;
	public $Password;
	public $Id_tipo_usuario;
	public $Nombre;
	public $Apellido1;
	public $Apellido2;
	public $Id_persona;

	public function __construct($db) {
		$this->db = $db;
	}

	public function findByUsername($username) {
		$stmt = $this->db->prepare("SELECT * FROM Usuarios WHERE Username = :username");
		$stmt->bindValue(':username', $username);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function leer() {
		return db_query_fetchall('SELECT * FROM Usuarios u  
    							INNER JOIN Personas p ON p.Id_persona = u.Id_persona
								WHERE u.Id_tipo_usuario = 3');
	}

	public function crear($username, $password, $nombre, $apellido1, $apellido2) {
		$this->db->beginTransaction();

		try {
			if ($this->findByUsername($username)) {
				return false;
			}
			$sqlPersona = "INSERT INTO Personas (Nombre, Apellido1, Apellido2) VALUES (:nombre, :apellido1, :apellido2)";
			$stmtPersona = $this->db->prepare($sqlPersona);
			$stmtPersona->bindValue(':nombre', $nombre);
			$stmtPersona->bindValue(':apellido1', $apellido1);
			$stmtPersona->bindValue(':apellido2', $apellido2);
			$stmtPersona->execute();
			$idPersona = $this->db->lastInsertId();

			if (!$idPersona || $idPersona <= 0) {
				throw new Exception("Error al insertar en la tabla Personas.");
			}

			$sqlUsuario = "INSERT INTO Usuarios (Username, Password, Id_Persona, Id_tipo_usuario) VALUES (:username, :password, :idPersona, 3)";
			$stmtUsuario = $this->db->prepare($sqlUsuario);
			$stmtUsuario->bindValue(':username', $username);
			$stmtUsuario->bindValue(':password', $password);
			$stmtUsuario->bindValue(':idPersona', $idPersona, PDO::PARAM_INT);
			$stmtUsuario->execute();

			$this->db->commit();

			return $username;
		} catch (Exception $e) {
			$this->db->rollBack();
			error_log('Error en addUser: ' . $e->getMessage());
			return null;
		}
	}

	public function actualizar() {
		$query = 'UPDATE Usuarios, Personas SET Id_persona=:Id_persona, Nombre=:Nombre, Apellido1=:Apellido1, Apellido2=:Apellido2, Username=:Username, Password=:Password, Id_tipo_usuario=:id_tipo_usuario WHERE Id_usuario=:Id_usuario';
		$stmt = $this->conn->prepare($query);


		$stmt->bindParam(":Id_usuario", $this->Id_usuario);
		$stmt->bindParam(":Id_persona", $this->Id_persona);
		$stmt->bindParam(":Nombre", $this->Nombre);
		$stmt->bindParam(":Apellido1", $this->Apellido1);
		$stmt->bindParam(":Apellido2", $this->Apellido2);
		$stmt->bindParam(":Username", $this->Username);
		$stmt->bindParam(":Password", $this->Password);
		$stmt->bindParam(":Id_tipo_usuario", $this->Id_tipo_usuario);

		if ($stmt->execute()) {
			return true;
		}
		return false;
	}

	public function borrar($Id_usuario) {
		$query = 'DELETE FROM Usuarios WHERE Id_usuario = :Id_usuario';
		return db_query_execute($query, [':ponente_lista' => $Id_usuario]);
	}
}
