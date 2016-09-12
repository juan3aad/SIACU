<?php
class Usuario extends EntidadBase{
    private $id_usuario;
    private $id_persona;
    private $login;
    private $password;
    private $activo;
    private $id_rol;
    
    public function __construct() {
        $table="usuario";
        parent::__construct($table);
    }
    //----
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    //----
    public function getId_persona() {
        return $this->id_persona;
    }

    public function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }
    //----
    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }
    //----
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    //-----
    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }
    //------------
    public function getId_rol() {
        return $this->id_rol;
    }

    public function setId_rol($id_rol) {
        $this->id_rol = $id_rol;
    }
    //----------------

    public function save(){
        $query="INSERT INTO usuario (id_usuario,id_persona,login,password,activo,id_rol)
                VALUES(NULL,
                       '".$this->id_persona."',
                       '".$this->login."',
                       '".$this->password."',
                       '".$this->activo."', 
                       '".$this->id_rol."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>