<?php
class EntidadBase{
    private $table;
    private $db;
    private $conectar;


    public function __construct($table) {
        $this->table=(string) $table;
        
        require_once 'conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
    }
    
    public function getConetar(){
        return $this->conectar;
    }
    
    public function db(){
        return $this->db;
    }
    


    //-------------------
        
    public function getByEsp($column,$value,$column1,$value1){
         
             
        //-----------
        $resultSet = array(); 
        
        //$query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value' and $column1='$value1'");
        $query=$this->db->query("select persona.id_persona,persona.id_estado_civil, sexo.cod_sexo, persona.id_municipio,persona.direccion,persona.fecha_nacimiento,persona.ruta_fotografia,persona.tipo_identificacion, persona.numero_identificacion, persona.primer_nombre,persona.segundo_nombre,persona.primer_apellido,persona.segundo_apellido, persona.telefono,persona.celular,persona.email 
                from tblsexo sexo INNER JOIN $this->table persona on sexo.id_sexo=persona.id_sexo WHERE $column='$value' and $column1='$value1'");
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        

        
        
        
        
        return $resultSet;
       
    }
    
    
    //-------------------
    

    public function getAllEsp($column1,$tabla2,$column2){
        $query=$this->db->query("SELECT $this->table.*, $tabla2.$column2 FROM $this->table inner join $tabla2 on 
          $this->table.$column1= $tabla2.$column1  

         ORDER BY $this->table.$column1 DESC");
        
        if(!$query)
        die($this->db->error);

         $resultSet = array(); 

        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }


    //_____________________________
    public function getAll($column){
        $query=$this->db->query("SELECT * FROM $this->table ORDER BY $column DESC");
        
        if(!$query)
  		die($this->db->error);

		 $resultSet = array(); 

        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }

    //----------------------

    
    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");

        if($row = $query->fetch_object()) {
           $resultSet=$row;
        }
        
        return $resultSet;
    }
    
    public function getBy($column,$value){
        $resultSet = array(); 
        
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
    }
    
    public function getByDual($column1,$value1,$column2,$value2){ 
        
        $resultSet = array(); 
        
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column1='$value1' and $column2='$value2'");
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        
        return $resultSet;
        
    }
        
    
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
        return $query;
    }
    
    public function deleteByIdEsp($columna1,$id){
        $query=$this->db->query("DELETE FROM $this->table WHERE $columna1=$id"); 
        return $query;
    }
    
    public function deleteBy($column,$value){
    
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }
    

    /*
     * Aquí podemos montarnos un montón de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
    
}
?>