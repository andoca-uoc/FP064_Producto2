<?php


function handleRoute($page) {
    switch ($page) {
        case 'acto':
            include 'acto.php';
            break;
        case 'tipo_acto':
            include 'tipo_acto_panel.php';
            break;
        case 'ponente':
            include 'ponente.php';
            break;
        case 'calendario': 
            include 'calendario.php';
            break;
        case 'inscripciones': 
            include 'inscripciones.php';
            break;
        default:
            include 'acto.php';
    }
}

                          


?>