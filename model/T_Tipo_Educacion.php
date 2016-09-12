<?php
class T_Tipo_Educacion extends EntidadBase{
    private $id_tipo_educacion;
    private $cod_tipo_educacion;
    private $des_tipo_educacion;
    
    public function __construct() {
        $table="t_tipo_educacion";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Tipo_Educacion() {
        return $this->id_tipo_educacion;
    }

    public function setId_Tipo_Educacion($id_tipo_educacion) {
        $this->id_tipo_educacion = $id_tipo_educacion;
    }
    //--------
    
    public function getCod_Tipo_Educacion() {
        return $this->cod_tipo_educacion;
    }

    public function setCod_Tipo_Educacion($cod_tipo_educacion) {
        $this->cod_tipo_educacion = $cod_tipo_educacion;
    }
    //--------

    public function getDes_Tipo_Educacion() {
        return $this->des_tipo_educacion;
    }

    public function setDes_Tipo_Educacion($des_tipo_educacion) {
        $this->des_tipo_educacion = $des_tipo_educacion;
    }
    //--------
   
    public function save(){

        $query="INSERT INTO t_tipo_educacion (id_tipo_educacion,cod_tipo_educacion,des_tipo_educacion)
                VALUES(NULL,
                      '".$this->cod_tipo_educacion."',  
                      '".$this->des_tipo_educacion."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>