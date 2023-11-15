<?php 
include '../controllers/tipo_actos/leer.php';
include '../controllers/usuarios/leer.php';

?>

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
                                <input type="hidden" id="floatingInput" name="Id_perfi">
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

                            <div class="mb-3">
                            <label for="update_id_tipo_acto" class="form-label">Tipo de Acto</label>
                            <select required class="form-control" id="update_id_tipo_acto" name="id_tipo_acto">
                                <?php foreach ($tipo_actos as $tipo_acto) : ?>
                                    <option value="<?php echo $tipo_acto['id_tipo_acto']; ?>">
                                        <?php echo $tipo_acto['descripcion']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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
                            <label for="update_id_tipo_acto" class="form-label">Tipo de Acto</label>
                            <select required class="form-control" id="update_id_tipo_acto" name="id_tipo_acto">
                                <?php foreach ($tipo_actos as $tipo_acto) : ?>
                                    <option value="<?php echo $tipo_acto['id_tipo_acto']; ?>">
                                        <?php echo $tipo_acto['descripcion']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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
      <!-- Modal de modificación Perfil -->
      <div class="modal fade" id="modificarPerfil" tabindex="-1" aria-labelledby="crearActoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Perfil Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controllers/actos/crear.php" method="POST">
                        <div class="container mt-4">

                            <div class="form-floating mb-3">
                                <input type="hidden" id="floatingInput" name="Id_usuario">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Titulo" placeholder="Titulo" required>
                                <label for="floatingInput">Nombre: </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Titulo" placeholder="Titulo" required>
                                <label for="floatingInput">Contraseña: </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="Titulo" placeholder="Titulo" required>
                                <label for="floatingInput">Email: </label>
                            </div>

                            <div class="mb-3">
                            <label for="inscribirse_acto" class="form-label">Inscribirse a acto</label>
                            <select required class="form-control" id="inscribirse_acto" name="id_acto">
                                <?php foreach ($tipo_actos as $tipo_acto) : ?>
                                    <option value="<?php echo $tipo_acto['id_tipo_acto']; ?>">
                                        <?php echo $tipo_acto['descripcion']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            </div>

                            
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="crearActo">Modificar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
