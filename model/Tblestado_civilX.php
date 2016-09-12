<?php
class Tblestado_civil extends EntidadBase{
    private $secestado_civil;
    private $codestado_civil;
    private $desestado_civil;
    
    
    
    public function __construct() {
        $table="tblestado_civil";
        parent::__construct($table);
    }
    
   //--------
    public function getSecEstado_Civil() {
        return $this->secestado_civil;
    }

    public function setSecEstado_Civil($secestado_civil) {
        $this->secestado_civil = $secestado_civil;
    }
    //--------
    
    public function getCodEstado_Civil() {
        return $this->codestado_civil;
    }

    public function setCodEstado_Civil($codestado_civil) {
        $this->codestado_civil = $codestado_civil;
    }
    //--------

    public function getDesEstado_Civil() {
        return $this->desestado_civil;
    }

    public function setDesEstado_Civil($desestado_civil) {
        $this->desestado_civil = $desestado_civil;
    }
    //--------



    public function save(){

        $query="INSERT INTO tblestado_civil (secestado_civil,codestado_civil,
            desestado_civil)
                VALUES(NULL,
                      '".$this->codestado_civil."',
                       '".$this->desestado_civil."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>