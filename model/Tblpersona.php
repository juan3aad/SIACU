<?php
class Tblpersona extends EntidadBase{
    private $id_persona;
    private $id_estado_civil;
    private $id_sexo;
    private $id_municipio;
    private $direccion;
    private $fecha_nacimiento;
    private $ruta_fotografica;
    private $tipo_identificacion;
    private $numero_identificacion;
    private $primer_nombre;
    private $segundo_nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $telefono;
    private $celular;
    private $email;
    
    

    public function __construct() {
        $table="tblpersona";
        parent::__construct($table);
    }
    
   //--------
    public function getId_Persona() {
        return $this->id_persona;
    }

    public function setId_Persona($id_persona) {
        $this->id_persona = $id_persona;
    }
    //--------
    
    public function getId_Estado_Civil() {
        return $this->id_estado_civil;
    }

    public function setId_Estado_Civil($id_estado_civil) {
        $this->id_estado_civil = $id_estado_civil;
    }
    //--------

    public function getId_Sexo() {
        return $this->id_sexo;
    }

    public function setId_Sexo($id_sexo) {
        $this->id_sexo = $id_sexo;
    }
    //--------

    public function getId_Municipio() {
        return $this->id_municipio;
    }

    public function setId_Municipio($id_municipio) {
        $this->id_municipio = $id_municipio;
    }
    //-------

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    //------

    public function getFecha_Nacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setFecha_Nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    //------

    public function getRuta_Fotografia() {
        return $this->ruta_fotografica;
    }

    public function setRuta_Fotografia($ruta_fotografia) {
        $this->ruta_fotografica = $ruta_fotografia;
    }
    //------
    public function getTipo_Identificacion() {
        return $this->tipo_identificacion;
    }

    public function setTipo_Identificacion($tipo_identificacion) {
        $this->tipo_identificacion = $tipo_identificacion;
    }
    //---
    
    public function getNumero_Identificacion(){
        return $this->numero_identificacion;
    }
    
    public function setNumero_Identificacion($numero_identificacion) {
        $this->numero_identificacion = $numero_identificacion;
    }
    //----
    public function getPrimer_Nombre(){
        return $this->primer_nombre;
    }
    public function setPrimer_Nombre($primer_nombre) {
        $this->primer_nombre = $primer_nombre;
    }
    //-----
    public function getSegundo_Nombre(){
        return $this->segundo_nombre;
    }
    
    public function setSegundo_Nombre($segundo_nombre){
         $this->segundo_nombre = $segundo_nombre;
    }
    
    
    //-----------
    public function getPrimer_Apellido() {
        return $this->primer_apellido;
    }

    public function setPrimer_Apellido($primer_apellido) {
        $this->primer_apellido = $primer_apellido;
    }
    //------
    
    public function getSegundo_Apellido() {
        return $this->segundo_apellido;
    }

    public function setSegundo_Apellido($segundo_apellido) {
        $this->segundo_apellido = $segundo_apellido;
    }
    //------


    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    //-----
    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    //------
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    //________

    public function save(){
        $query="INSERT INTO tblpersona (id_persona,id_estado_civil,
            id_sexo,id_municipio,direccion,fecha_nacimiento,ruta_fotografia,
            tipo_identificacion, numero_identificacion,primer_apellido,segundo_apellido,
            telefono,celular,email)
                VALUES(NULL,
                       '".$this->id_estado_civil."',
                       '".$this->id_sexo."',
                       '".$this->id_municipio."',
                       '".$this->direccion."',
                       '".$this->fecha_nacimiento."',
                       '".$this->ruta_fotografica."',
                       '".$this->tipo_identificacion."',
                       '".$this->numero_identificacion."',
                       '".$this->primer_nombre."',
                       '".$this->segundo_nombre."',
                       '".$this->primer_apellido."',
                       '".$this->segundo_apellido."',
                       '".$this->telefono."',
                       '".$this->celular."',
                       '".$this->email."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>