<?php include("../includes/header.php") ?>
    <form action="" method="POST">
        <div class="container mt-4">
            <div class="row>">
                <div class="col">
                    <h2>Nuevo acto</h2>
                </div>
                <div class="col text-end">
                    <a href="" role="button"
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
                <select class="form-select form-select" name="Id_tipo_acto" aria-label="Default select example">
                    <option selected>Tipo de evento</option>
                    <option value="1">Curso</option>
                    <option value="2">Taller</option>
                    <option value="3">Seminario</option>
                    <option value="4">Conferencia</option>
                    <option value="5">Congreso</option>
                    <option value="6">Ciclo</option>
                </select>
            </div>
        </div>
    </form>
</body>
</html>

