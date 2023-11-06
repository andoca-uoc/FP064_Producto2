<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro Usuarios</title>
</head>
<body>
<form method="post">
    <div class="container mt-4">
        <div class="row>">
            <div class="col">
                <h2>Nuevo acto</h2>
            </div>
            <div class="col text-end">
                <a href="/view/event" role="button"
                    class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Id_acto] "
            class="form-control"
                id="floatingInput" placeholder="Id_acto">
            <label for="floatingInput">Id_acto</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Fecha] "
            class="form-control"
                id="floatingInput" placeholder="Fecha"
                aria-describedby="fechaHelpBlock">
            <label for="floatingInput">Fecha</label>
            <div id="fechaHelpBlock" class="form-text">
            Fecha con formato YYY-MM-DD    
            </div>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Hora "
            class="form-control"
                id="floatingInput" placeholder="Hora">
            <label for="floatingInput">Hora</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Titulo] "
            class="form-control"
                id="floatingInput" placeholder="Titulo">
            <label for="floatingInput">FTitulo</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Descripcion_corta] "
            class="form-control"
                id="floatingInput" placeholder="Descripcion_corta">
            <label for="floatingInput">Descripcion_corta</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Descripcion_larga] "
            class="form-control"
                id="floatingInput" placeholder="Descripcion_larga">
            <label for="floatingInput">Descripcion_larga</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Num_asistentes] "
            class="form-control"
                id="floatingInput" placeholder="Num_asistentes">
            <label for="floatingInput">Num_asistentes</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="data [Actos] [Id_tipo_acto] "
            class="form-control"
                id="floatingInput" placeholder="Id_tipo_acto">
            <label for="floatingInput">Id_tipo_acto</label>
        </div>
    </div>
</form>
</body>
</html>