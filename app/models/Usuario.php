<?php

class Usuario {
    private $table = 'Usuarios';
    private $db; 
    public $Id_usuario;
    public $Username;
    public $Password;
    public $Id_tipo_usuario;
    public $Id_Persona;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM Usuarios WHERE Username = :username");
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT Username FROM Usuarios WHERE Id_usuario = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyPassword($username, $password) {
        $user = $this->findByUsername($username);
        if ($user && $password === $user['Password']) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserType($username) {
        $user = $this->findByUsername($username);
        if ($user) {
            $stmt = $this->db->prepare("SELECT Descripcion FROM Tipos_usuarios WHERE Id_tipo_usuario = :tipo_usuario_id");
            $stmt->bindValue(':tipo_usuario_id', $user['Id_tipo_usuario']);
            $stmt->execute();
            $tipo_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tipo_usuario['Descripcion'];
        } else {
            return null;
        }
    }

    public function getUserPersonaId($username) {
        $user = $this->findByUsername($username);
        if ($user) {
            return $user['Id_Persona'];
        } else {
            return null;
        }
    }

    public function addUser($username, $password, $nombre, $apellido1, $apellido2) {
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
    
            if ($idPersona <= 0) {
                throw new Exception("Error al insertar en la tabla Personas.");
            }
    
            $sqlUsuario = "INSERT INTO Usuarios (Username, Password, Id_Persona, Id_tipo_usuario) VALUES (:username, :password, :idPersona, 2)";
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
            $query = 'UPDATE ' . $this->table . ' SET Username=:Username, Password=:Password, Id_tipo_usuario=:Id_tipo_usuario, Id_Persona=:Id_Persona WHERE Id_usuario=:Id_usuario';

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":Id_usuario", $this->Id_usuario);
            $stmt->bindParam(":Username", $this->Username);
            $stmt->bindParam(":Password", $this->Password);
            $stmt->bindParam(":Id_tipo_usuario", $this->Id_tipo_usuario); 
            $stmt->bindParam(":Id_Persona", $this->Id_Persona); 

            if ($stmt->execute()) {
                return true;
            }
            return false;
        } 
}
?>
