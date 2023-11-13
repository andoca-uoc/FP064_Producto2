<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin + Sidebar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/admin.css">

</head>
<body>
<div class="wrapper">
    <!--Sidebar Izq-->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Panel de Administración</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="/views/admin_panel.php">Actos</a>
            </li>
            <li>
                <a href="/views/ponente_panel.php">Ponentes</a>
            </li>
            <li>
                <a href="/views/tipo_acto_panel">Tipos de actos</a>
            </li>
            <li>
                <a href="#">Inscritos</a>
            </li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li  <li class="list-group-item list-group-item-info">
                <a href="#">Perfil</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li><a href="#" class="article">Desconectarse</a></li>
        </ul>
    </nav>

