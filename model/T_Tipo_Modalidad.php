<?php
class T_Tipo_Modalidad extends EntidadBase{
    private $id_tipo_modalidad;
    private $des_tipo_modalidad;
    private $id_tipo_educacion;
    
    public function __construct() {
        $table="t_tipo_modalidad";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Tipo_Modalidad() {
        return $this->id_tipo_modalidad;
    }

    public function setId_Tipo_Modalidad($id_tipo_modalidad) {
        $this->id_tipo_modalidad = $id_tipo_modalidad;
    }
    //--------
    
    public function getDes_Tipo_Modalidad() {
        return $this->des_tipo_modalidad;
    }

    public function setDes_Tipo_Modalidad($des_tipo_modalidad) {
        $this->des_tipo_modalidad = $des_tipo_modalidad;
    }
    //--------

    public function getId_Tipo_Educacion() {
        return $this->id_tipo_educacion;
    }

    public function setId_Tipo_Educacion($id_tipo_educacion) {
        $this->id_tipo_educacion = $id_tipo_educacion;
    }
    //--------
   
    public function save(){

        $query="INSERT INTO t_tipo_modalidad (id_tipo_modalidad,des_tipo_modalidad,id_tipo_educacion)
                VALUES(NULL,
                      '".$this->des_tipo_modalidad."',  
                      '".$this->id_tipo_educacion."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>