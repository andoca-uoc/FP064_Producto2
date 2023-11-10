<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
    <img src="../assets/logo.png" alt="LOGO" class="logo img-fluid mb-4 mb-md-0">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <h1 class="text-center text-light">Panel de registro</h1>

            <form class="w-100" role="form" id="myform" action="/controllers/registerController.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nombre de Usuario</label>
                    <input class="form-control" type="text" name="Username" placeholder="Introduce tu nombre de usuario" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="Password" placeholder="Introduce tu contraseña" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="Nombre" placeholder="Introduce tu nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido1</label>
                    <input class="form-control" type="text" name="Apellido1" placeholder="Introduce tu primer apellido">
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido2</label>
                    <input class="form-control" type="text" name="Apellido2" placeholder="Introduce tu segundo apellido">
                </div>

                <button class="btn btn-primary" type="submit" value="Registrarse"> Registrarse </button>
                <a href="../index.php" class="btn btn-link">Ya tengo cuenta</a>
            </form>
            <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger" role="alert">
                                Error al registrarse. Por favor, intente nuevamente.
                            </div>
                        <?php endif; ?>
        </div>
    </div>
</body>
</html>
