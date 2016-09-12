<?php
class T_Pais extends EntidadBase{
    private $id_pais;
    private $cod_pais;
    private $des_pais;
    
    
    
    public function __construct() {
        $table="t_pais";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Pais() {
        return $this->id_pais;
    }

    public function setId_Pais($id_pais) {
        $this->id_pais = $id_pais;
    }
    //--------
    
    public function getCod_Pais() {
        return $this->cod_pais;
    }

    public function setCod_Pais($cod_pais) {
        $this->cod_pais = $cod_pais;
    }
    //--------

    public function getDes_Pais() {
        return $this->des_pais;
    }

    public function setDes_Pais($des_pais) {
        $this->des_pais = $des_pais;
    }
    //--------



    public function save(){

        $query="INSERT INTO t_pais (id_pais,cod_pais,des_pais)
                VALUES(NULL,
                      '".$this->cod_pais."',
                       '".$this->des_pais."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>