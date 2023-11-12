<?php include '../includes/header.php'; ?>

<div class="row">
    <div class="col-sm-12">
        <?php if(isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>



    <form action="acto_editar.php" method="POST">
        <div class="container mt-4">
            <div class="row>">
                <div class="col">
                    <h2>Modificar acto</h2>
                </div>
                <div class="col text-end">
                    <a href="" role="button"
                       class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="hidden" id="floatingInput" name="Id acto" value="<?php echo $resultado->Id_acto; ?>">
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Titulo" placeholder="Titulo" value="<?php echo $resultado->Titulo; ?>">
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Fecha" placeholder="Fecha"  aria-describedby="fechaHelpBlock" value="<?php echo $resultado->Fecha; ?>">
                <label for="floatingInput">Fecha</label>
                <div class="form-text">
                    Fecha con formato año-mes-día YYYY-MM-DD
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Hora" placeholder="Hora" value="<?php echo $resultado->Hora; ?>">
                <label for="floatingInput">Hora</label>
                <div class="form-text">
                    Hora con formato hora:minutos:segundos hh:mm:ss
                </div>
            </div>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Descripcion_corta" placeholder="Descripcion_corta" value="<?php echo $resultado->Descripcion_corta; ?>">
                <label for="floatingInput">Descripción corta</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Descripcion_larga" placeholder="Descripcion_larga" value="<?php echo $resultado->Descripcion_larga; ?>">
                <label for="floatingInput">Descripción larga</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput"
                       name="Num_asistentes" placeholder="Num_asistentes" value="<?php echo $resultado->Num_asistentes; ?>">
                <label for="floatingInput">Número de asistentes</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" id="floatingInput"
                       name="Id_tipo_acto" value="<?php echo $resultado->Id_tipo_acto; ?>">
            </div>
        </div>
    </form>
    </body>
    </html>


