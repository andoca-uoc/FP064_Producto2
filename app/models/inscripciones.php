<?php
require_once __DIR__ . "/db.php";

class Inscripcion
{
	private $conn;
	private $table = 'Inscritos';

	public $Id_inscripcion;
	public $Id_persona;
	public $Id_acto;
	public $Fecha_inscripcion;

	public function __construct() {
		$this->conn = db_connect();
	}

	public function leer() {
		return db_query_fetchall('SELECT * FROM ' . $this->table);
	}

	public function crear() {
		$query = 'INSERT INTO ' . $this->table . ' (Id_inscripcion, Id_persona, Id_acto, Fecha_inscripcion) VALUES (:Id_inscripcion, :Id_persona, :Id_acto, :Fecha_inscripcion)';
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":Id_inscripcion", $this->Id_inscripcion);
		$stmt->bindParam(":Id_persona", $this->Id_persona);
		$stmt->bindParam(":Id_acto", $this->Id_acto);
		$stmt->bindParam(":Fecha_inscripcion", $this->Fecha_inscripcion);

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

	public function borrar() {
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_inscripcion = :Id_inscripcion';
		return db_query_execute($query, [':Id_inscripcion' => $this->Id_inscripcion]);
	}
	
}
