<?php
class Tblmotivo extends EntidadBase{
    private $secmotivo;
    private $desmotivo;
    private $estado;
    
    
    
    public function __construct() {
        $table="tblmotivo";
        parent::__construct($table);
    }
    
   //--------
    public function getSecMotivo() {
        return $this->secmotivo;
    }

    public function setSecMotivo($secmotivo) {
        $this->secmotivo = $secmotivo;
    }
    //--------
    
    public function getDesMotivo() {
        return $this->desmotivo;
    }

    public function setDesMotivo($desmotivo) {
        $this->desmotivo = $desmotivo;
    }
    //--------

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    //--------



    public function save(){

        $query="INSERT INTO tblmotivo (secmotivo,desmotivo,estado)
                VALUES(NULL,
                      '".$this->desmotivo."',
                       '".$this->estado."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>