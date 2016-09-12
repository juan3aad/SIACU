<?php
class T_Municipio extends EntidadBase{
    private $id_municipio;
    private $cod_municipio;
    private $des_municipio;
    private $id_departamento;
    
    
    
    public function __construct() {
        $table="t_municipio";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Municipio() {
        return $this->id_municipio;
    }

    public function setId_Municipio($id_municipio) {
        $this->id_municipio = $id_municipio;
    }
    //--------
    
    public function getCod_Municipio() {
        return $this->cod_municipio;
    }

    public function setCod_Municipio($cod_municipio) {
        $this->cod_municipio = $cod_municipio;
    }
    //--------

    public function getDes_Municipio() {
        return $this->des_municipio;
    }

    public function setDes_Municipio($des_municipio) {
        $this->des_municipio = $des_municipio;
    }
    //--------
    public function getId_Departamento() {
        return $this->id_departamento;
    }

    public function setId_Departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }
    //--------




    public function save(){

        $query="INSERT INTO t_municipio (id_municipio,cod_municipio,des_municipio,id_departamento)
                VALUES(NULL,
                      '".$this->cod_municipio."',
                      '".$this->des_municipio."',
                      '".$this->id_departamento."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>