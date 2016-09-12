<?php
class UsuariosModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="usuario";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnUsuario(){
		$query="SELECT * FROM usuario WHERE email='victor@victor.com'";
		$usuario=$this->ejecutarSql($query);
		return $usuario;
	}
}
?>