<?php
    class acto{
        private $conn;
        private $table = 'actos';


        /* Propiedades */
        public int $Id_acto;
        public string $Fecha;
        public string $Hora;
        public string $Titulo;
        public string $Descripcion_corta;
        public string $Descripcion_larga;
        public int $Num_asistentes;
        public int $Id_tipo_acto;


        //Constructor conexion a la BD
        public function __construct($db){
            $this->conn = $db;
        }


        //Obtener eventos (todos)
        public function leer(){
            //Crear query       
            $query = 'SELECT Id_acto, Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto FROM ' . $this->table;

            //Preparar la sentencia
            $stmt = $this->conn->prepare($query);

            //Ejecutar query
            $stmt->execute();
            $actos = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $actos;
        }

        //Obtener evento (uno solo)
        public function leer_individual(){
            //Crear query
            $query = 'SELECT Id_acto, Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto FROM ' . $this->table ;

            //Preparar la sentencia
            $stmt = $this->conn->prepare($query);

            //Vincular parámetro
            $stmt->bindParam(1, $this->Id_acto);

            //Ejecutar query
            $stmt->execute();
            $actos = $stmt->fetch(PDO::FETCH_OBJ);
            return $actos;


    /*        $this->Id_acto = $row['Id_acto'];
            $this->Fecha = $row['Fecha'];
            $this->Hora = $row['Hora'];
            $this->Titulo = $row['Titulo'];
            $this->Descripcion_corta = $row['Descripcion_corta'];
            $this->Descripcion_larga = $row['Descripcion_larga'];
            $this->Num_asistentes = $row['Num_asistentes'];
            $this->Id_tipo_acto = $row['Id_tipo_acto']; */
        }

        //Crear nuevo evento
        public function crear($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto)
        {
            //Crear query
            $query = 'INSERT INTO ' . $this->table . '(Id_acto, Fecha, Hora, Titulo, Desceripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto)VALUES(:Id_acto, :Fecha, :Hora, :Titulo, :Desceripcion_corta, :Descripcion_larga, :Num_asistentes, :Id_tipo_acto)';

            //Preparar la sentencia
            $stmt = $this->conn->prepare($query);

            //Vincular parámetro
            $stmt->bindParam(":Id_acto", $Id_acto, PDO::PARAM_INT);
            $stmt->bindParam(":Fecha", $Fecha, PDO::PARAM_STR);
            $stmt->bindParam(":Hora", $Hora, PDO::PARAM_STR);
            $stmt->bindParam(":Titulo", $Titulo, PDO::PARAM_STR);
            $stmt->bindParam(":Descripcion_corta", $Descripcion_corta, PDO::PARAM_STR);
            $stmt->bindParam(":Descripcion_larga", $Descripcion_larga, PDO::PARAM_STR);
            $stmt->bindParam(":Num_asistentes", $Num_asistentes, PDO::PARAM_INT);
            $stmt->bindParam(":Id_tipo_acto", $Id_tipo_acto, PDO::PARAM_INT);

            //Ejecutar query
            if($stmt->execute()){
                return true;
            }

      /*      //Si hay error
            printf("Error $s.\n", $stmt->error);
                return false;
      */
      }


        //Actualizar un evento
        public function actualizar($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto){
            //Crear query
            $query = 'UPDATE ' . $this->table . ' SET Titulo = :Titulo WHERE Id_acto = :Id_acto';

            //Preparar la sentencia
            $stmt = $this->conn->prepare($query);

            //Vincular parámetros
            $stmt->bindParam(":Id_acto", $Id_acto, PDO::PARAM_INT);
            $stmt->bindParam(":Fecha", $Fecha, PDO::PARAM_STR);
            $stmt->bindParam(":Hora", $Hora, PDO::PARAM_STR);
            $stmt->bindParam(":Titulo", $Titulo, PDO::PARAM_STR);
            $stmt->bindParam(":Descripcion_corta", $Descripcion_corta, PDO::PARAM_STR);
            $stmt->bindParam(":Descripcion_larga", $Descripcion_larga, PDO::PARAM_STR);
            $stmt->bindParam(":Num_asistentes", $Num_asistentes, PDO::PARAM_INT);
            $stmt->bindParam(":Id_tipo_acto", $Id_tipo_acto, PDO::PARAM_INT);

            //Ejecutar query
            if($stmt->execute()){
                return true;
            }

  /*          //Si hay error
            printf("Error $s.\n", $stmt->error); 
            return false;          
    */    }


        //Borrar un evento
        public function borrar($Id_acto)
        {
            //Crear query
            $query = 'DELETE FROM ' . $this->table . ' WHERE Id_acto = :Id_acto';

            //Preparar la sentencia
            $stmt = $this->conn->prepare($query);

            //Vincular parámetro
        
            $stmt->bindParam(":Id_acto", $Id_acto, PDO::PARAM_INT);

            //Ejecutar query
            if($stmt->execute()){
                return true;
            }

            //Si hay error
       /*     printf("Error $s.\n", $stmt->error);
        */    return false;
        }



        
        


    }