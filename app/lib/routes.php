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
            include 'ponenteProvisional';
        default:
            include 'acto.php';
    }
}




?>