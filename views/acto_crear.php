<?php
//Instancionamos la base de datos y conexión
$baseDatos = new Basemysql();
$db = $baseDatos->connect();

//Instanciamos el acto
$actos = new acto($db);
$resultado = $actos->leer();

?>
<?php include('../controllers/actos/crear.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Panel Admin</title>
</head>
<body>
    <form action="" method="POST">
        <div class="container mt-4">
            <div class="row>">
                <div class="col">
                    <h2>Nuevo acto</h2>
                </div>
                <div class="col text-end">
                    <a href="../views/acto.php" role="button"
                    class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="hidden" id="floatingInput" name="Id acto">
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Titulo" placeholder="Titulo">
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Fecha" placeholder="Fecha"  aria-describedby="fechaHelpBlock">
                <label for="floatingInput">Fecha</label>
                <div class="form-text">
                    Fecha con formato año-mes-día YYYY-MM-DD
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Hora" placeholder="Hora">
                <label for="floatingInput">Hora</label>
                <div class="form-text">
                    Hora con formato hora:minutos:segundos hh:mm:ss
                </div>
            </div>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Descripcion_corta" placeholder="Descripcion_corta">
            <label for="floatingInput">Descripción corta</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                       name="Descripcion_larga" placeholder="Descripcion_larga">
                <label for="floatingInput">Descripción larga</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput"
                       name="Num_asistentes" placeholder="Num_asistentes">
                <label for="floatingInput">Número de asistentes</label>
            </div>

            <div class="form-floating mb-3">
                <input type="checkbox" id="floatingInput"
                   name="Id_tipo_acto">
            </div>
        </div>
    </form>
</body>
</html>

