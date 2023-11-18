<?php 
if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/css/calendar.css">
    <title>Panel Usuario</title>
</head>

<body>
<nav class="navtop">
	    	<div>
	    		<h1 style="color: white;">Calendario de Eventos</h1>
	    	</div>
	    </nav>

        <h2 style="color: white;">Selecciona una fecha:</h2>
        <form method="post" action="./calendario.php">
            <input type="date" id="dateInput" name="dateInput">
            <input type="submit" value="Enviar">
        </form>

        <?php include ('../controllers/calendar.php'); 
            setlocale(LC_TIME,"es_ES");
            $dateInput = @$_POST["dateInput"];
            $calendar = new Calendar(date($dateInput));
            $calendar->add_event('Evento', '2023-11-03', 1, 'green');
            $calendar->add_event('Seminario', '2023-11-04', 1, 'red');
            $calendar->add_event('Talleres', '2023-11-16', 7);
        ?>

        <div class="content home">
			<?=$calendar?>
		</div>
</body>

</html>