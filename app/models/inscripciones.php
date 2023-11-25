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
	public $Nombre;
	public $Apellido1;
	public $Acto_Titulo;
	 
	public function __construct() {
		$this->conn = db_connect();
	}

	public function leer() {
		return db_query_fetchall('SELECT
		i.Id_inscripcion,
		i.Id_persona,
		p.Nombre,
		p.Apellido1,
		i.id_acto AS Id_acto,
		a.Titulo AS Acto_Titulo,
		i.Fecha_inscripcion
	FROM
		Inscritos AS i
	JOIN
		Personas AS p ON i.Id_persona = p.Id_persona
	JOIN
		Actos AS a ON i.id_acto = a.Id_acto');
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


	public function borrar($id) {
		$query = 'DELETE FROM ' . $this->table . ' WHERE Id_inscripcion = :Id_inscripcion';
		return db_query_execute($query, [':Id_inscripcion'  => $id]);
	}

	public function findBySession($session) {
        $stmt = $this->conn->prepare("SELECT Id_acto FROM Inscritos WHERE Id_persona = :session");
        $stmt->bindValue(':session', $session);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
	
}
