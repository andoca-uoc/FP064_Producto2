<?php 
namespace Lib;
use Mysqli;

Class BaseDatos {

    private Mysqli $conexion;
    private mixed $resultado;

    function __construct(
        private string $server,
    )

}



?>
