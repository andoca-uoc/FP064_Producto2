<?php
include '../lib/routes.php';
include '../controllers/tipo_actos/leer.php';
?>
<!DOCTYPE html>
<html>

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

            <ul class="list-unstyled CTAs">
                <li><a href="/login.php" class="article">Desconectarse</a></li>
            </ul>
        </nav>

        <div id="content">
            <?php
            $page = $_GET['page'] ?? 'default';
            handleRoute($page);
            ?>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function abrirModalActualizar(acto) {
            document.querySelector('#formActualizarActo #update_id').value = acto.id || '';
            document.querySelector('#formActualizarActo #update_fecha').value = acto.date.split('-').reverse().join('-') || '';
            document.querySelector('#formActualizarActo #update_hora').value = acto.time || '';
            document.querySelector('#formActualizarActo #update_titulo').value = acto.title || '';
            document.querySelector('#formActualizarActo #update_descripcion_corta').value = acto.description1 || '';
            document.querySelector('#formActualizarActo #update_descripcion_larga').value = acto.description2 || '';
            document.querySelector('#formActualizarActo #update_num_asistentes').value = acto.audience || '';
            document.querySelector('#formActualizarActo #update_id_tipo_acto').value = acto.id_type || '';

            var modal = new bootstrap.Modal(document.getElementById('modalActualizar'));
            modal.show();
        }

        //Modal Acto Eliminar:
        function confirmarEliminacion(url) {
            document.getElementById('btnEliminar').onclick = function() {
                window.location.href = url;
            };
            var modal = new bootstrap.Modal(document.getElementById('confirmarEliminacionModal'));
            modal.show();
        }



        // Modal Modicifcat tipo acto 
        function abrirModalActualizarTipo(tipoActo) {
            document.querySelector('#modalActualizarTipoActo #Id_tipo_acto').value = tipoActo.id_tipo_acto;
            document.querySelector('#modalActualizarTipoActo #Descripcion').value = tipoActo.descripcion;

            var modal = new bootstrap.Modal(document.getElementById('modalActualizarTipoActo'));
            modal.show();
        }
    </script>
</body>

</html>