<?php
 require_once dirname(__FILE__).'/config/config.php';
class ActosModel {
    private $config;
    private $actos;
    public function __construct(){
        $this->actos = array();
    }
    public function get_actos($Id_acto){
        $conexion = new conexion();

        //consulta a realizar en la BBDD
        $sql = "SELECT * FROM 'Actos' WHERE 'Actos'.'Id_acto' =:Id_acto";
        //preparamos la consulta
        $query = $conexion -> prepare($sql);
        //Vinculamos los parámetros de la consulta
        $query -> bindparam(':Id_acto',$Id_acto,PDO::PARAM_INT );
        //Ejecutamos la consulta
        $query -> execute();
        //Asignamos los resultados y devolvemos todas las filas
        $results = $query -> fetch(PDO::FETCH_ASSOC);
        return $results;
    }
   public function delete_actos($Id_acto) {
        $conexion = new conexion();
        if (isset($_GET['Id_acto'])) {
            $Id_acto = $_GET['Id_acto'];
            $query = "DELETE FROM ACTOS WHERE Id_acto = $Id_acto";
            $results = $query -> fetch(PDO::FETCH_ASSOC);
            return $results;
            if (!$result) {
                die("Query failed");
            }

            $_SESSION['message'] = 'Acto eliminado';

            header("Location: /view/event.php");
        }

    }
}
?>
