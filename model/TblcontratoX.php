<?php
class Tblcontrato extends EntidadBase{
    private $sectipo_contrato;
    private $codtipo_contrato;
    private $destipo_contrato;
    
    
    
    public function __construct() {
        $table="Tblcontrato";
        parent::__construct($table);
    }
    
   //--------
    public function getSectipo_Contrato() {
        return $this->sectipo_contrato;
    }

    public function setSectipo_Contrato($sectipo_contrato) {
        $this->sectipo_contrato = $sectipo_contrato;
    }
    //--------
    
    public function getCodtipo_Contrato() {
        return $this->codtipo_contrato;
    }

    public function setCodtipo_Contrato($codtipo_contrato) {
        $this->codtipo_contrato = $codtipo_contrato;
    }
    //--------

    public function getDestipo_Contrato() {
        return $this->destipo_contrato;
    }

    public function setDestipo_Contrato($destipo_contrato) {
        $this->destipo_contrato = $destipo_contrato;
    }
    //--------

    public function save(){
        $query="INSERT INTO tblcontrato (sectipo_contrato,codtipo_contrato,
            destipo_contrato)
                VALUES(NULL,
                       '".$this->codtipo_contrato."',
                       '".$this->destipo_contrato."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>