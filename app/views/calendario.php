<?php 
if (!isset($_SESSION['user']) || !isset($_SESSION['user_type'])) {
    header('Location: /views/login.php');
    exit;
} ?>

<?php
include ('../controllers/actos/leer.php'); 
include ('../controllers/inscripciones/leer.php'); 
include ('../controllers/calendar.php'); 

$dateInput = $_POST['dateInput'] ?? null;
$calendar = new Calendar($dateInput ? date($dateInput) : null);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="../assets/css/calendar.css">
    <title>Panel Usuario</title>
</head>

<body>
<nav class="navtop">
	    	<div>
	    		<h1 style="color: white;">Calendario de Eventos</h1>
	    	</div>
	    </nav>

        <h2 style="color: white;">Selecciona una fecha:</h2>
        <form method="post" action="">
            <input type="date" id="dateInput" name="dateInput" value="<?php echo $_POST['dateInput'] ?? date('Y-m-d'); ?>">
            <input type="submit" value="Cambiar Fecha">
        </form>

        <?php 
            $dateInput = @$_POST["dateInput"];
            $calendar = new Calendar(date($dateInput));
        ?>

        <?php foreach ($actos as $acto) : ?>
            <tr>
                <td>
                    <?php  
                        $color = in_array($acto['id'], array_column($inscripcionesUser, 'Id_acto')) ? 'darkgreen' : 'red';
                        $calendar->add_event($acto['title'] . "<br>" . $acto['description1'] . "<br>" . $acto['description2'] . "<br> Id acto: " . $acto['id'], $acto['date'], 1, $color);
                    ?>
                </td>
            </tr>
        <?php endforeach ?>

        <div class="content home">
			<?=$calendar?>
		</div>
</body>

</html>