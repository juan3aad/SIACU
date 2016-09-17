<?php
class Tbldepartamento extends EntidadBase{
    private $id_departamento;
    private $cod_departamento;
    private $des_departamento;
    private $id_pais;
    
    
    
    public function __construct() {
        $table="tbldepartamento";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Departamento() {
        return $this->id_departamento;
    }

    public function setId_Departamento($id_departamento) {
        $this->id_departamento = $id_departamento;
    }
    //--------
    
    public function getCod_Departamento() {
        return $this->cod_departamento;
    }

    public function setCod_Departamento($cod_departamento) {
        $this->cod_departamento = $cod_departamento;
    }
    //--------

    public function getDes_Departamento() {
        return $this->des_departamento;
    }

    public function setDes_Departamento($des_departamento) {
        $this->des_departamento = $des_departamento;
    }
    //--------

    public function getId_Pais() {
        return $this->id_pais;
    }

    public function setId_Pais($id_pais) {
        $this->id_pais = $id_pais;
    }




    public function save(){

        $query="INSERT INTO tbldepartamento (id_departamento,cod_departamento,des_departamento,id_pais)
                VALUES(NULL,
                      '".$this->cod_departamento."',
                      '".$this->des_departamento."',
                       '".$this->id_pais."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>