<?php
require_once __DIR__ . "/db.php";

class Persona
{
	private $conn;
	private $table = 'Personas';

	public $Id_persona;
	public $Nombre_apellidos;

	public function __construct() {
		$this->conn = db_connect();
	}

	public function leer() {
		return db_query_fetchall("SELECT Id_persona, CONCAT(Nombre, ' ', Apellido1, ' ', Apellido2) AS Nombre_apellidos FROM Personas");
	}

	public function crear() {
		$query = 'INSERT INTO ' . $this->table . ' (Id_persona, Nombre, Apellido1, Apellido2) VALUES (:Id_persona, :Nombre, :Apellido1, :Apellido2)';
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":Id_persona", $this->Id_persona);
		$stmt->bindParam(":Nombre", $this->Nombre);
		$stmt->bindParam(":Apellido1", $this->Apellido1);
		$stmt->bindParam(":Apellido2", $this->Apellido2);

		if ($stmt->execute())
		{
			return true;
		}
		return false;
	}

	/*public function actualizar() {
		$query = 'UPDATE ' . $this->table . ' SET Id_persona=:Id_persona WHERE Id_inscripcion=:Id_inscripcion';
		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(":Id_inscripcion", $this->Id_inscripcion);
		$stmt->bindParam(":Id_persona", $this->Id_persona);

		if ($stmt->execute()) {
			return true;
		}
		return false;
	}*/


	/* public function borrar($id) {
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_inscripcion = :Id_inscripcion';
		return db_query_execute($query, [':Id_inscripcion'  => $id]);
	} */
	
}
