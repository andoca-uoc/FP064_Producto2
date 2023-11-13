<?php
require_once __DIR__ . "/db.php";

class tipoActo
{
	private $conn;
	private $table = 'Tipo_acto';

	public $Id_tipo_acto;
	public $Descripcion;

	public function __construct() {
		$this->conn = db_connect();
	}

	public function leer() {
		return db_query_fetchall('SELECT * FROM ' . $this->table);
	}

	

	public function crear() {
		$query = 'INSERT INTO ' . $this->table . ' (Id_tipo_acto, Descripcion) VALUES (:Id_tipo_acto, :Descripcion)';
		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);
		$stmt->bindParam(":Descripcion", $this->Descripcion);

		if ($stmt->execute())
		{
			return true;
		}
		return false;
	}

	public function actualizar() {
		$query = 'UPDATE ' . $this->table . ' SET Descripcion=:Descripcion WHERE Id_tipo_acto=:Id_tipo_acto';
		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);
		$stmt->bindParam(":Descripcion", $this->Descripcion);

		if ($stmt->execute()) {
			return true;
		}
		return false;
	}

	public function borrar() {
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_tipo_acto = :Id_tipo_acto';
		return db_query_execute($query, [':Id_tipo_acto' => $Id_tipo_acto]);
	}
}
