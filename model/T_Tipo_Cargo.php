<?php
class T_Tipo_Cargo extends EntidadBase{
    private $id_tipo_cargo;
    private $cod_tipo_cargo;
    private $des_tipo_cargo;
    
    public function __construct() {
        $table="t_tipo_cargo";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Tipo_Cargo() {
        return $this->id_tipo_cargo;
    }

    public function setId_Tipo_Cargo($id_tipo_cargo) {
        $this->id_tipo_cargo = $id_tipo_cargo;
    }
    //--------
    
    public function getCod_Tipo_Cargo() {
        return $this->cod_tipo_cargo;
    }

    public function setCod_Tipo_Cargo($cod_tipo_cargo) {
        $this->cod_tipo_cargo = $cod_tipo_cargo;
    }
    //--------

    public function getDes_Tipo_Cargo() {
        return $this->des_tipo_cargo;
    }

    public function setDes_Tipo_Cargo($des_tipo_cargo) {
        $this->des_tipo_cargo = $des_tipo_cargo;
    }
    //--------
   
    public function save(){

        $query="INSERT INTO t_tipo_cargo (id_tipo_cargo,cod_tipo_cargo,des_tipo_cargo)
                VALUES(NULL,
                      '".$this->cod_tipo_cargo."',  
                      '".$this->des_tipo_cargo."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>