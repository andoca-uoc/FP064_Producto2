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
                <input type="hidden" id="floatingInput" name="Id tipo acto" value="<?php echo $resultado->Id_yipo_acto; ?>">
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Descripcion" placeholder="Descripción" value="<?php echo $resultado->Descripcion; ?>">
                <label for="floatingInput">Titulo</label>
            </div>

        </div>
    </form>
    </body>
    </html>


