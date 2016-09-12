<?php
class Tbldependencia extends EntidadBase{
    private $secdependencia;
    private $numdependencia;
    private $desdependencia;
    private $estado;
    
    
    public function __construct() {
        $table="Tbldependencia";
        parent::__construct($table);
    }
    
   //--------
    public function getSecDependencia() {
        return $this->secdependencia;
    }

    public function setSecDependencia($secdependencia) {
        $this->secdependencia = $secdependencia;
    }
    //--------
    
    public function getNumDependencia() {
        return $this->numdependencia;
    }

    public function setNumDependencia($numdependencia) {
        $this->numdependencia = $numdependencia;
    }
    //--------

    public function getDesDependencia() {
        return $this->desdependencia;
    }

    public function setDesDependencia($desdependencia) {
        $this->desdependencia = $desdependencia;
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
        $query="INSERT INTO tbldependencia (secdependencia,numdependencia,
            desdependencia,estado)
                VALUES(NULL,
                       '".$this->numdependencia."',
                       '".$this->desdependencia."',
                       '".$this->estado."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}

?>