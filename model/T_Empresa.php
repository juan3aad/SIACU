<?php
class T_Empresa extends EntidadBase{
    private $id_empresa;
    private $nit_empresa;
    private $nom_empresa;
    private $id_tipo_empresa;
    private $email_empresa;
    private $telefono_empresa;

       
    
    public function __construct() {
        $table="t_empresa";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Empresa() {
        return $this->id_empresa;
    }

    public function setId_Empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }
    //--------
    
    public function getNit_Empresa() {
        return $this->nit_empresa;
    }

    public function setNit_Empresa($nit_empresa) {
        $this->nit_empresa = $nit_empresa;
    }
    //--------

    public function getNom_Empresa() {
        return $this->nom_empresa;
    }

    public function setNom_Empresa($nom_empresa) {
        $this->nom_empresa = $nom_empresa;
    }
    //--------
    public function getId_Tipo_Empresa() {
        return $this->id_tipo_empresa;
    }

    public function setId_Tipo_Empresa($id_tipo_empresa) {
        $this->id_tipo_empresa = $id_tipo_empresa;
    }
    //--------
    public function getEmail_Empresa() {
        return $this->email_empresa;
    }

    public function setEmail_Empresa($email_empresa) {
        $this->email_empresa = $email_empresa;
    }
    //--------
    public function getTelefono_Empresa() {
        return $this->telefono_empresa;
    }

    public function setTelefono_Empresa($telefono_empresa) {
        $this->telefono_empresa = $telefono_empresa;
    }




    public function save(){

        $query="INSERT INTO t_empresa (id_empresa,nit_empresa,nom_empresa,id_tipo_empresa,email_empresa,telefono_empresa)
                VALUES(NULL,
                      '".$this->nit_empresa."',
                      '".$this->nom_empresa."',
                      '".$this->id_tipo_empresa."',
                      '".$this->email_empresa."',
                      '".$this->telefono_empresa."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>