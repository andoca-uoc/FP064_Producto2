<?php

class Dbmysql{

    //Parámetros base de datos
    private $host = 'localhost';
    private $db_name = 'eventos';
    private $username = 'root';
    private $password = '';
    private $db;

    //Conexión a la BD
    public function connect(){
        $this->db = null;

        try {
            $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' .$this->db_name, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOxception $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }

        return $this->db;
    }

}