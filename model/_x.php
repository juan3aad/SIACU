<?php
class Tblcargo extends EntidadBase{
    private $seccargo;
    private $codcargo;
    private $descargo;
    private $estado;
    
    
    public function __construct() {
        $table="tblcargo";
        parent::__construct($table);
    }
    
   //--------
    public function getSecCargo() {
        return $this->seccargo;
    }

    public function setSecCargo($seccargo) {
        $this->seccargo = $seccargo;
    }
    //--------
    
    public function getCodCargo() {
        return $this->codcargo;
    }

    public function setCodCargo($codcargo) {
        $this->codcargo = $codcargo;
    }
    //--------

    public function getDesCargo() {
        return $this->descargo;
    }

    public function setDesCargo($descargo) {
        $this->descargo = $descargo;
    }
    //--------

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    //-------

   
    //------

    public function save(){
        $query="INSERT INTO tblcargo (seccargo,codcargo,
            descargo,estado)
                VALUES(NULL,
                       '".$this->codcargo."',
                       '".$this->descargo."',
                       '".$this->estado."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>