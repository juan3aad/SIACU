<?php
class T_Tipo_Empresa extends EntidadBase{
    private $id_tipo_empresa;
    private $des_tipo_empresa;
    
    public function __construct() {
        $table="t_tipo_empresa";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Tipo_Empresa() {
        return $this->id_tipo_empresa;
    }

    public function setId_Tipo_Empresa($id_tipo_empresa) {
        $this->id_tipo_empresa = $id_tipo_empresa;
    }
    //--------
    
    public function getDes_Tipo_Empresa() {
        return $this->des_tipo_empresa;
    }

    public function setDes_Tipo_Empresa($des_tipo_empresa) {
        $this->des_tipo_empresa = $des_tipo_empresa;
    }
    //--------

   
    public function save(){

        $query="INSERT INTO t_tipo_empresa (id_tipo_empresa,des_tipo_empresa)
                VALUES(NULL,
                      '".$this->des_tipo_empresa."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>