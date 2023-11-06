<?php
   
   class Event {
       public function _construct (
    private string $Id_acto;
    private string $Fecha;
    private string $Hora;
    private string $Titulo;
    private string $Descripcion_corta;
    private string $Descripcion_larga;
    private string $Num_asistentes;
    private string $Id_tipo_acto;
    ) {}

public function getId_acto() : int{
    return $this->Id_acto;
}

public function setId_acto(int $Id_acto) : (int $Id_acto) {
    $this->id = $id;
}

public function getFecha() : string{
    return $this->Fecha;
}

public function setFecha(string $Fecha) : (int $Fecha) {
    $this->Fecha = $Fecha;
}

public function getHora() : string{
    return $this->Hora;
}

public function setHora(string $Hora) : (int $Hora) {
    $this->Hora = $Hora;
}

public function getDescripcion_corta() : string{
    return $this->Descripcion_corta;
}

public function setDescripcion_corta(string $Descripcion_corta) : (int $Descripcion_corta) {
    $this->Descripcion_corta = $Descripcion_corta;
}

public function getDescripcion_larga(string $Descripcion_larga) : string{
    $this->Descripcion_larga = $Descripcion_larga;
}

public function setDescripcion_larga(string $Descripcion_larga) : (int $Descripcion_larga) {
    $this->Descripcion_larga = $Descripcion_larga;
}

public function getNum_asistentes(string $num_asistentes) : int{
    $this->Num_asistentes = $num_asistentes;
}

public function setNum_asistentes(string $num_asistentes) : (int $num_asistentes) {
    $this->Num_asistentes = $num_asistentes;
}

public function getId_tipo_acto() : int{
    return $this->Id_tipo_acto;
}

public static function fromArray(array $event) : Event {
    return new Event(
        $event["Id_acta"];
        $event["Fecha"];
        $event["Hora"],
        $event["Titulo"],
        $event["Descripcion_corta"],
        $event["Descripcion_larga"],
        $event["Num_asistentes"],
        $event["Id_tipo_acto"],
    );
}
}
?>