<?php
include '../lib/routes.php';
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

    <!-- MODALES -->

    <!-- Modal de creacion Acto -->
    <div class="modal fade" id="crearActoModal" tabindex="-1" aria-labelledby="crearActoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Acto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controllers/actos/crear.php" method="POST">
                        <div class="container mt-4">

                            <div class="form-floating mb-3">
                                <input type="hidden" id="floatingInput" name="Id_acto">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Titulo" placeholder="Titulo" required>
                                <label for="floatingInput">Titulo</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="Fecha" placeholder="Fecha" aria-describedby="fechaHelpBlock" required>
                                <label for="floatingInput">Fecha</label>
                                <div class="form-text">
                                    Fecha con formato año-mes-día YYYY-MM-DD
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="floatingInput" name="Hora" placeholder="Hora" required>
                                <label for="floatingInput">Hora</label>
                                <div class="form-text">
                                    Hora con formato hora:minutos:segundos hh:mm:ss
                                </div>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Descripcion_corta" placeholder="Descripcion_corta" required>
                                <label for="floatingInput">Descripción corta</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Descripcion_larga" placeholder="Descripcion_larga" required>
                                <label for="floatingInput">Descripción larga</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" name="Num_asistentes" placeholder="Num_asistentes" required>
                                <label for="floatingInput">Número de asistentes</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" id="floatingInput" name="Id_tipo_acto" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="crearActo">Crear</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal de actualizar Acto -->
    <div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalActualizarLabel">Modificar Acto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formActualizarActo" method="POST" action="/controllers/actos/actualizar.php">
                        <input required type="hidden" id="update_id" name="id">
                        <div class="mb-3">
                            <label for="update_fecha" class="form-label">Fecha</label>
                            <input required type="date" class="form-control" id="update_fecha" name="fecha">
                        </div>
                        <div class="mb-3">
                            <label for="update_hora" class="form-label">Hora</label>
                            <input required type="time" class="form-control" id="update_hora" name="hora">
                        </div>
                        <div class="mb-3">
                            <label for="update_titulo" class="form-label">Título</label>
                            <input required type="text" class="form-control" id="update_titulo" name="titulo">
                        </div>
                        <div class="mb-3">
                            <label for="update_descripcion_corta" class="form-label">Descripción Corta</label>
                            <textarea class="form-control" id="update_descripcion_corta" name="descripcion_corta" rows="1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="update_descripcion_larga" class="form-label">Descripción Larga</label>
                            <textarea class="form-control" id="update_descripcion_larga" name="descripcion_larga" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="update_num_asistentes" class="form-label">Número de Asistentes</label>
                            <input required type="number" class="form-control" id="update_num_asistentes" name="num_asistentes">
                        </div>
                        <div class="mb-3">
                            <label for="update_id_tipo_acto" class="form-label">ID Tipo de Acto</label>
                            <input required type="text" class="form-control" id="update_id_tipo_acto" name="id_tipo_acto">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- Modal de Confirmación de Eliminación Actpo -->
    <div class="modal fade" id="confirmarEliminacionModal" tabindex="-1" aria-labelledby="confirmarEliminacionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarEliminacionModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que quieres eliminar este acto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="#" class="btn btn-danger" id="btnEliminar">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Crear Tipo de Acto -->
    <div class="modal fade" id="modalCrearTipoActo" tabindex="-1" aria-labelledby="modalCrearTipoActoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCrearTipoActoLabel">Nuevo Tipo de Acto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../controllers/tipo_actos/crear.php" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" id="floatingInputCrear" name="Id_tipo_acto">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputCrear" name="Descripcion" placeholder="Descripcion">
                            <label for="floatingInputCrear">Descripcion</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="crearActo">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Actualizar Tipo de Acto -->
    <div class="modal fade" id="modalActualizarTipoActo" tabindex="-1" aria-labelledby="modalActualizarTipoActoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalActualizarTipoActoLabel">Actualizar Tipo de Acto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../controllers/tipo_actos/actualizar.php" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" id="floatingInputActualizar" name="id_tipo_acto">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInputActualizar" name="descripcion" placeholder="Descripcion">
                            <label for="floatingInputActualizar">Descripcion</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="actualizarActo">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //Modal ACtualizad Acto
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