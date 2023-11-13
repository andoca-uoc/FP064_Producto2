<?php
require_once __DIR__ . "/db.php";

class Acto {
    private $conn;
    private $table = 'Actos';

    public $Id_acto;
    public $Fecha;
    public $Hora;
    public $Titulo;
    public $Descripcion_corta;
    public $Descripcion_larga;
    public $Num_asistentes;
    public $Id_tipo_acto;



    public function __construct() {
        $this->conn = db_connect();
    }

    public function leer() {
    	return db_query_fetchall('SELECT * FROM ' . $this->table);
    }

    public function leer_individual() {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE Id_acto = ? LIMIT 0,1';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->Id_acto);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->Fecha = $row['Fecha'];
        $this->Hora = $row['Hora'];
        $this->Titulo = $row['Titulo'];
        $this->Descripcion_corta = $row['Descripcion_corta'];
        $this->Descripcion_larga = $row['Descripcion_larga'];
        $this->Num_asistentes = $row['Num_asistentes'];
        $this->Id_tipo_acto = $row['Id_tipo_acto'];
    }

    public function crear() {
        $query = 'INSERT INTO ' . $this->table . ' SET Fecha=:Fecha, Hora=:Hora, Titulo=:Titulo, Descripcion_corta=:Descripcion_corta, Descripcion_larga=:Descripcion_larga, Num_asistentes=:Num_asistentes, Id_tipo_acto=:Id_tipo_acto';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":Fecha", $this->Fecha);
        $stmt->bindParam(":Hora", $this->Hora);
        $stmt->bindParam(":Titulo", $this->Titulo);
        $stmt->bindParam(":Descripcion_corta", $this->Descripcion_corta);
        $stmt->bindParam(":Descripcion_larga", $this->Descripcion_larga);
        $stmt->bindParam(":Num_asistentes", $this->Num_asistentes);
        $stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function actualizar() {
        $query = 'UPDATE ' . $this->table . ' SET Fecha=:Fecha, Hora=:Hora, Titulo=:Titulo, Descripcion_corta=:Descripcion_corta, Descripcion_larga=:Descripcion_larga, Num_asistentes=:Num_asistentes, Id_tipo_acto=:Id_tipo_acto WHERE Id_acto=:Id_acto';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":Id_acto", $this->Id_acto);
        $stmt->bindParam(":Fecha", $this->Fecha);
        $stmt->bindParam(":Hora", $this->Hora);
        $stmt->bindParam(":Titulo", $this->Titulo);
        $stmt->bindParam(":Descripcion_corta", $this->Descripcion_corta);
        $stmt->bindParam(":Descripcion_larga", $this->Descripcion_larga);
        $stmt->bindParam(":Num_asistentes", $this->Num_asistentes);
        $stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function borrar($id) {
        $query = 'DELETE FROM ' . $this->table . ' WHERE Id_acto = :Id_acto';
        return db_query_execute($query, [':Id_acto' => $id]);
    }
    
}
?>
