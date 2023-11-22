<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
}

if (isset($_SESSION['user_type']) && strtolower($_SESSION['user_type']) != 'admin') {
    header('Location: /views/user_dashboard.php');
    exit;
}

include '../lib/routes.php';
include './modales.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin + Sidebar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/../assets/css/admin.css">
    <link rel="stylesheet" href="/../assets/css/general.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel de Administración</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="admin_panel.php?page=acto">Actos</a>
                </li>
                <li>
                    <a href="admin_panel.php?page=ponente">Ponentes</a>
                </li>
                <li>
                    <a href="admin_panel.php?page=tipo_acto">Tipos de actos</a>
                </li>
                <li>
                    <a href="admin_panel.php?page=inscritos">Inscritos</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li class="list-group-item list-group-item-info">
                    <a href="#">Perfil</a>
                </li>
            </ul>

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
        </nav>

        <div id="content">
            <?php
            $page = $_GET['page'] ?? 'default';
            handleRoute($page);
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./acciones.js"></script>
</body>

</html>