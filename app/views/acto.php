<?php
if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
}
if (isset($_SESSION['user_type']) && strtolower($_SESSION['user_type']) != 'admin') {
    header('Location: /views/user_dashboard.php');
    exit;
}
include '../controllers/actos/leer.php'; 
include '../controllers/actos/borrar.php'; 
include '../controllers/actos/actualizar.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <title>Panel Admin</title>
</head>

<body>
    <div class="container-fluid mt-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <h1>Gestión de Actos</h1>
                </div>
            </nav>
        <div class="row">
            <div class="col text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearActoModal">
                    Nuevo acto
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-light table-striped table-hover w-100 h-100">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripción Corta</th>
                                <th scope="col">Descripcion Larga</th>
                                <th scope="col">Numero de Asistentes</th>
                                <th scope="col">Id tipo de acto</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($actos as $acto) : ?>
                                <tr id="acto-<?php echo $acto['id']; ?>">
                                    <td><?php echo $acto['id']; ?></td>
                                    <td><?php echo $acto['date']; ?></td>
                                    <td><?php echo $acto['time']; ?></td>
                                    <td><?php echo $acto['title']; ?></td>
                                    <td><?php echo $acto['description1']; ?></td>
                                    <td><?php echo $acto['description2']; ?></td>
                                    <td><?php echo $acto['audience']; ?></td>
                                    <td><?php echo $acto['id_type']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button   button onclick="abrirModalActualizar(<?php echo htmlspecialchars(json_encode($acto)); ?>)" class="btn btn-sm btn-outline-secondary">Modificar</button>
                                        </div>

                                        <div class="btn-group" role="group">
                                        <a role="button" class="btn btn-sm btn-outline-danger" href="#" onclick="confirmarEliminacion('../controllers/actos/borrar.php?id=<?php echo $acto['id']; ?>')">Borrar</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>