<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro Usuarios</title>
</head>
<body>
<form action="/view/event/event" method="post">
    <?php if(isset($event)):?>
    <input type="hidden" name="data[Acto] [Id_acto]"
     value="<?=$event->getId_acto()?>">
    <?php endif;?>
    <div class="container mt-4">
        <div class="row>">
            <div class="col">
                <h2><?=(isset($event))?'Modificar':'Nuevo'?>Acto</h2>
            </div>
            <div class="col text-end">
                <a href="/view/event" role="button"
                    class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">
                    <?=(isset($event))?'Modificar':'Crear'?>
                </button>
            </div>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                id="floatingInput" placeholder="Id_acto"
                name="data [Actos] [Id_acto]"
                value="<?=(isset($event))?$event->getId_acto() : ''?>">
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
            <input type="text" class="form-control"
                id="floatingInput" placeholder="Hora"
                name="data [Actos] [Hora] "
                value="<?=(isset($event))?$event->getHora() : ''?>">
            <label for="floatingInput">Hora</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                id="floatingInput" placeholder="Titulo"
                name="data [Actos] [Titulo] "
                value="<?=(isset($event))?$event->getTitulo() : ''?>">
            <label for="floatingInput">FTitulo</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                id="floatingInput" placeholder="Descripcion_corta"
                name="data [Actos] [Descripcion_corta] "
                value="<?=(isset($event))?$event->getDescripcion_corta() : ''?>">
            <label for="floatingInput">Descripcion_corta</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                id="floatingInput" placeholder="Descripcion_larga"
                name="data [Actos] [Descripcion_larga] "
                value="<?=(isset($event))?$event->getDescripcion_larga() : ''?>">
            <label for="floatingInput">Descripcion_corta</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" 
                id="floatingInput" placeholder="Num_asistentes"
                name="data [Actos] [Num_asistentes] "
                value="<?=(isset($event))?$event->getNum_asistentesa() : ''?>">
            <label for="floatingInput">Número de asistentes</label>
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