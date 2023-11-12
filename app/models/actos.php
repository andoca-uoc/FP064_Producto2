<?php

namespace app\models;
class Acto
{
    private $db;
    private $table = 'actos';

    /* Propiedades */
    public $Id_acto;
    public $Fecha;
    public $Hora;
    public $Titulo;
    public $Descripcion_corta;
    public $Descripcion_larga;
    public $Num_asistentes;
    public $Id_tipo_acto;


    //Constructor conexion a la BD
    public function __construct($db)
    {
        $this->db = $db;
    }

    //Obtener eventos
    public function leer()
    {
        //Crear query
        $query = 'SELECT Id_acto, Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto FROM ' . $this->table;

        //Preparar la sentencia
        $stmt = $this->db->prepare($query);

        //Ejecutar query
        $stmt->execute();
        return $stmt;
    }

    //Obtener evento (uno solo)
    public function leer_individual($Id_acto)
    {
        //Crear query
        $query = 'SELECT Id_acto, Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto FROM' . $this->table . 'WHERE Id_acto = ? LIMIT 0,1';

        //Preparar la sentencia
        $stmt = $this->db->prepare($query);

        //Vincular parámetro
        $stmt->bindParam(1, $this->Id_acto);

        //Ejecutar query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //Configurar las propiedades
        $this->Fecha = $row['Fecha'];
        $this->Hora = $row['Hora'];
        $this->Titulo = $row['Titulo'];
        $this->Descripcion_corta = $row['Descripcion_corta'];
        $this->Descripcion_larga = $row['Descripcion_larga'];
        $this->Num_asistentes = $row['Num_asistentes'];
        $this->Id_tipo_acto = $row['Id_tipo_Acto'];


    }

    //Crear nuevo evento
    public function crear($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto)
    {
        //Crear query
        $query = 'INSERT INTO ' . $this->table . '(Fecha, Hora, Titulo, Desceripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto)VALUES(:Fecha, :Hora, :Titulo, :Desceripcion_corta, :Descripcion_larga, :Num_asistentes, :Id_tipo_acto)';

        //Preparar la sentencia
        $stmt = $this->db->prepare($query);

        //Vincular parámetro
        $stmt->bindParam(":Fecha", $this->Fecha);
        $stmt->bindParam(":Hora", $this->Hora);
        $stmt->bindParam(":Titulo", $this->Titulo);
        $stmt->bindParam(":Descripcion_corta", $this->Descripcion_corta);
        $stmt->bindParam(":Descripcion_larga", $this->Descripcion_larga);
        $stmt->bindParam(":Num_asistentes", $this->Num_asistentes);
        $stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);

        //Ejecutar query
        if ($stmt->execute()) {
            return true;
        }

        /*Si hay error
        printf("Error $s.\n", $stmt->error);
        return false;*/
    }


    //Actualizar un evento
    public function actualizar()
    {
        //Crear query
        $query = 'UPDATE ' . $this->table . ' SET Fecha = :Fecha, Hora = :Hora, Titulo = :Titulo, Descripcion_corta = :Descripcion_corta, Descripcion_larga = :Descripcion_larga, Num_asistentes = :Num_asistentes, Id_tipo_acto = :Id_tipo_acto WHERE Id_acto = :Id_acto';

        //Preparar la sentencia
        $stmt = $this->db->prepare($query);

        //Limpiar datos
        $this->Fecha = htmlspecialchars(strip_tags($this->Fecha));
        $this->Hora = htmlspecialchars(strip_tags($this->Hora));
        $this->Titulo = htmlspecialchars(strip_tags($this->Titulo));
        $this->Descripcion_corta = htmlspecialchars(strip_tags($this->Descripcion_corta));
        $this->Descripcion_larga = htmlspecialchars(strip_tags($this->Descripcion_larga));
        $this->Num_asistentes = htmlspecialchars(strip_tags($this->Num_asistentes));
        $this->Id_tipo_acto = htmlspecialchars(strip_tags($this->Id_tipo_acto));
        $this->Id_acto = htmlspecialchars(strip_tags($this->Id_acto));
        //Vincular parámetros

        $stmt->bindParam(":Fecha", $this->Fecha);
        $stmt->bindParam(":Hora", $this->Hora);
        $stmt->bindParam(":Titulo", $this->Titulo);
        $stmt->bindParam(":Descripcion_corta", $this->Descripcion_corta);
        $stmt->bindParam(":Descripcion_larga", $this->Descripcion_larga);
        $stmt->bindParam(":Num_asistentes", $this->Num_asistentes);
        $stmt->bindParam(":Id_tipo_acto", $this->Id_tipo_acto);

        //Ejecutar query
        if ($stmt->execute()) {
            return true;
        }

        /*Si hay error
        printf("Error $s.\n", $stmt->error);
        return false;*/

    }


    //Borrar un evento
    public function borrar()
    {
        //Crear query
        $query = 'DELETE FROM ' . $this->table . ' WHERE Id_acto = :Id_acto';

        //Preparar la sentencia
        $stmt = $this->db->prepare($query);

        //Limpiar datos
        $this->id = htmlspecialchars(strip_tags($this->id));

        //Vincular parámetro
        $stmt->bindParam(":Id_acto", $this->Id_acto);

        //Ejecutar query
        if ($stmt->execute()) {
            return true;
        }

        /*Si hay error
        printf("Error $s.\n", $stmt->error);
        return false;*/
    }

}
