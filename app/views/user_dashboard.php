<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
}

include '../lib/routes.php';
include './modales.php'; 
?>

<!DOCTYPE html>
<html>
<script>
        console.log(<?php echo json_encode($tipo_acto); ?>);
</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin + Sidebar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="/assets/css/general.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Panel de Usuario</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="user_dashboard.php?page=calendario">Calendario</a>
                </li>
                
            <li>
                    <a href="user_dashboard.php?page=inscripciones-usuario">Inscripciones</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li class="list-group-item list-group-item-info">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modificarPerfil"
                     onclick="abrirModalPerfil()" class="btn btn-sm btn-outline-secondary">Perfil</button>
                 </li>
            </ul>




                                            
            <ul class="list-unstyled CTAs">
                <li><a href="/../controllers/loginController.php?action=logout" class="article">Desconectarse</a></li>
            </ul>
        </nav>

        <div id="content">
            <?php
            $page = $_GET['page'] ?? 'calendario';
            handleRoute($page);
            ?>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>

</html>