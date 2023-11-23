<?php
include '../controllers/tipo_actos/leer.php';
include '../controllers/actos/leer.php';
include '../controllers/personas/leer.php';
include '../controllers/usuarios/actualizar.php';

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

						<div class="mb-3">
							<label for="update_id_tipo_acto" class="form-label">Tipo de Acto</label>
							<select required class="form-control" id="update_id_tipo_acto" name="Id_tipo_acto">
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
<!-- Modal de Confirmacion de Eliminación Actpo -->
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
						<input required type="hidden" class="form-control" id="floatingInputCrear" name="Id_tipo_acto">
					</div>
					<div class="form-floating mb-3">
						<input required type="text" class="form-control" id="floatingInputCrear" name="Descripcion" placeholder="Descripcion">
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
						<input type="text" class="form-control" id="Descripcion" name="descripcion" placeholder="Descripcion">
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
<!-- MODALES INSCRIPCIONES  -->

<!-- Modal Crear Inscripcion -->
<div class="modal fade" id="modalCrearInscripcion" tabindex="-1" aria-labelledby="modalCrearInscripcionLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCrearInscripcionLabel">Nueva Inscripción</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="../controllers/inscripciones/crear.php" method="POST">
				<div class="modal-body">
					<div class="form-floating mb-3">
						<input required type="hidden" class="form-control" id="floatingInputCrear" name="Id_inscripcion">
					</div>
					<label for="titulo_acto" class="form-label">Titulo Acto</label>
					<select required class="form-control" id="Id_acto" name="Id_acto">
						<?php foreach ($actos as $acto) : ?>
							<option value="<?php echo $acto['id']; ?>">
								<?php echo $acto['title']; ?>
							</option>
						<?php endforeach; ?>
					</select>

					<!-- Se muestran todos los usuarios is es admin -->
					<?php if(strtolower($_SESSION['user_type']) === 'admin') : ?> 
					<label for="usuario" class="form-label">Usuario</label>
						<select required class="form-control" id="id_persona" name="Id_persona">
							<?php foreach ($personas as $persona) : ?>


								<option value="<?php echo $persona['Id_persona']; ?>">
									<?php echo $persona['Nombre_apellidos']; ?>
								</option>
								
							<?php endforeach; ?>
						</select>

						<?php endif; ?>

					<!-- Se muestra solo el usuario de la sesión si no es admin -->
					<?php if(strtolower($_SESSION['user_type']) != 'admin') : ?> 
					<label for="usuario" class="form-label">Usuario</label>
						<select required class="form-control" id="id_persona" name="Id_persona">
							<?php foreach ($personas as $persona) : ?>

								<?php if($persona['Id_persona'] == $_SESSION['user_persona_id']) : ?> 

									<option value="<?php echo $persona['Id_persona']; ?>">
										<?php echo $persona['Nombre_apellidos']; ?>
									</option>
								<?php endif; ?>
							<?php endforeach; ?>
						</select>

						<?php endif; ?>
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" name="crearInscripcion">Crear</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal de crear Ponente -->
<div class="modal fade" id="modalCrearPonente" tabindex="-1" aria-labelledby="modalCrearPonenteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCrearPonenteLabel">Nuevo Ponente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controllers/ponentes/crear.php" method="POST">
                    <div class="mb-3">
                        <label for="Username" class="form-label">Nombre de Usuario Ponente</label>
                        <input class="form-control" id="Username" type="text" name="Username" placeholder="Introduce tu nombre de usuario" required>
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input class="form-control" id="Password" type="password" name="Password" placeholder="Introduce tu contraseña" required>
                    </div>

                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input class="form-control" id="Nombre" type="text" name="Nombre" placeholder="Introduce tu nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="Apellido1" class="form-label">Apellido1</label>
                        <input class="form-control" id="Apellido1" type="text" name="Apellido1" placeholder="Introduce tu primer apellido" required>
                    </div>

                    <div class="mb-3">
                        <label for="Apellido2" class="form-label">Apellido2</label>
                        <input class="form-control" id="Apellido2" type="text" name="Apellido2" placeholder="Introduce tu segundo apellido" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="crearPonente">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Modal de actualizar Ponente -->

<div class="modal fade" id="modalActualizarPonente" tabindex="-1" aria-labelledby="modalActualizarPonente" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalActualizarPonenteLabel">Actualizar Ponente</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="formActualizarPonente" method="POST" action="/controllers/ponentes/actualizar.php">
				<input required type="hidden" id="update_Id_usuario" name="Id_usuario">
				<div class="modal-body">
					<div class="mb-3">
						<label for="update_Username" class="form-label">Username</label>
						<input required type="text" class="form-control" id="update_Username" name="Username">
					</div>
					<div class="mb-3">
						<label for="update_Password" class="form-label">Password</label>
						<input required type="text" class="form-control" id="update_Password" name="Password">
					</div>
					<div class="mb-3">
						<label for="update_Nombre" class="form-label">Nombre</label>
						<input required type="text" class="form-control" id="update_Nombre" name="Nombre">
					</div>
					<div class="mb-3">
						<label for="update_Apellido1" class="form-label">Apellido 1</label>
						<input required type="text" class="form-control" id="update_Apellido1" name="Apellido1">
					</div>
					<div class="mb-3">
						<label for="update_Apellido2" class="form-label">Apellido 2</label>
						<input required type="text" class="form-control" id="update_Apellido2" name="Apellido2">
					</div>
					<input required type="hidden" id="update_id_persona" name="id_persona">
					<input required type="hidden" id="update_id_tipo_usuario" name="id_tipo_usuario">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" name="actualizarPonente">Actualizar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal de Confirmacion de Eliminación Ponente -->
<div class="modal fade" id="confirmarEliminacionPonenteModal" tabindex="-1" aria-labelledby="confirmarEliminacionModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="confirmarEliminacionPonenteModalLabel">Confirmar Eliminación</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				¿Estás seguro de que quieres eliminar este ponente?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
				<a href="#" class="btn btn-danger" id="btnEliminar">Eliminar</a>
			</div>
		</div>
	</div>
</div>

 <!-- Modal de modificación Perfil -->
 <div class="modal fade" id="modificarPerfil" tabindex="-1" aria-labelledby="modificarPerfilModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Perfil Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/../controllers/leerUsuarioController.php" method="post">
                        <div class="container mt-4">

                            <div class="form-floating mb-3">
                                <input type="hidden" id="update_id" name="Id_usuario">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="update_usuario" name="usuario" placeholder="Usuario" required>
                                <label for="floatingInput">Usuario: </label>
                                <p>holaaa<?php echo htmlspecialchars($_SESSION['user_type']); ?></p>

                            </div>

                           <!--  <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="update_contrasena" name="password" placeholder="password" required>
                                <label for="floatingInput">Contraseña: </label>
                            </div> -->
<!-- 
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="update_email" name="email" placeholder="Email" required>
                                <label for="floatingInput">Email: </label>
                            </div> -->


                           <!--  <div class="mb-3">
                            <label for="inscribirse_acto" class="form-label">Inscribirse a acto</label>
                            <select required class="form-control" id="inscribirse_acto" name="id_acto">
                                <?php foreach ($tipo_actos as $tipo_acto) : ?>
                                    <option value="<?php echo $tipo_acto['id_tipo_acto']; ?>">
                                        <?php echo $tipo_acto['descripcion']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            </div>
 -->
                            
                            
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

 
</div>
