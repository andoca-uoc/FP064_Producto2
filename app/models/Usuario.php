<?php

class Usuario {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM Usuarios WHERE Username = :username");
        $stmt->bindValue(':username', $username);
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

<<<<<<< HEAD
                if (!$idPersona || $idPersona >= 0) {
=======
                if (!$idPersona || $idPersona <= 0) {
>>>>>>> develop
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
}
?>
