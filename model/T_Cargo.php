<?php
class T_Cargo extends EntidadBase{
    private $id_cargo;
    private $cod_cargo;
    private $des_cargo;
    private $id_tipo_cargo;
       
    
    public function __construct() {
        $table="t_cargo";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Cargo() {
        return $this->id_cargo;
    }

    public function setId_Cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }
    //--------
    
    public function getCod_Cargo() {
        return $this->cod_cargo;
    }

    public function setCod_cargo($cod_cargo) {
        $this->cod_cargo = $cod_cargo;
    }
    //--------

    public function getDes_Cargo() {
        return $this->des_cargo;
    }

    public function setDes_Cargo($des_cargo) {
        $this->des_cargo = $des_cargo;
    }
    //--------
    public function getId_Tipo_Cargo() {
        return $this->id_tipo_cargo;
    }

    public function setId_Tipo_Cargo($id_tipo_cargo) {
        $this->id_tipo_cargo = $id_tipo_cargo;
    }
    //--------
    
    public function save(){

        $query="INSERT INTO t_cargo (id_cargo,cod_cargo,des_cargo,id_tipo_cargo)
                VALUES(NULL,
                      '".$this->cod_cargo."',
                      '".$this->des_cargo."',
                      '".$this->id_tipo_cargo."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>