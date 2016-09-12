<?php
class Tblausentismo extends EntidadBase{
    private $secausentismo;
    private $secmotivo;
    private $secpersona1;
    private $fechaHoraSolicitud;
    private $fechaHoraSalida;
    private $fechaHoraLlegada;
    private $secEstadoPermiso;
    
    
    public function __construct() {
        $table="Tblausentismo";
        parent::__construct($table);
    }
    
   //--------
    public function getSecAusentismo() {
        return $this->secausentismo;
    }

    public function setSecPersona($secausentismo) {
        $this->secausentismo = $secausentismo;
    }
    //--------
    
    public function getSecMotivo() {
        return $this->secmotivo;
    }

    public function setSecMotivo($secmotivo) {
        $this->secmotivo = $secmotivo;
    }
    //--------

    public function getSecPersona1() {
        return $this->secpersona;
    }

    public function setSecPersona1($secpersona) {
        $this->secpersona = $secpersona;
    }
    //--------

    public function getFechaHoraSolicitud() {
        return $this->fechaHoraSolicitud;
    }

    public function setFechaHoraSolicitud($fechaHoraSolicitud) {
        $this->fechaHoraSolicitud = $fechaHoraSolicitud;
    }
    //-------

    public function getFechaHoraSalida() {
        return $this->fechaHoraSalida;
    }

    public function setFechaHoraSalida($fechaHoraSalida) {
        $this->fechaHoraSalida = $fechaHoraSalida;
    }
    //------

    public function getFechaHoraLlegada() {
        return $this->fechaHoraLlegada;
    }

    public function setFechaHoraLlegada($fechaHoraLlegada) {
        $this->fechaHoraLlegada = $fechaHoraLlegada;
    }
    //------

    public function getSecEstadoPermiso() {
        return $this->secEstadoPermiso;
    }

    public function setSecEstadoPermiso($secEstadoPermiso) {
        $this->secEstadoPermiso = $secEstadoPermiso;
    }
    //------
    
    //------

    public function save(){
        $query="INSERT INTO tblpersona (secpersona,secestado_civil,
            secsexo,secmunicipio,direccion,fecha_nacimiento,
            ruta_fotografia,tipo_Identificacion,numero_identificacion,primer_nombre,
            segundo_nombre,primer_apellido,segundo_apellido)
                VALUES(NULL,
                       '".$this->secestado_civil."',
                       '".$this->secsexo."',
                       '".$this->secmunicipio."',
                       '".$this->direccion."',
                       '".$this->fecha_nacimiento."',
                       '".$this->ruta_fotografia."',
                       '".$this->tipo_Identificacion."',
                       '".$this->numero_identificacion."',
                       '".$this->primer_nombre."',
                       '".$this->segundo_nombre."',
                       '".$this->primer_apellido."',
                       '".$this->segundo_apellido."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>