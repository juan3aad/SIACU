<?php
class Tblestado_civilModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblestado_civil";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnCivil(){
		$query="SELECT * FROM tblestado_civil WHERE email='victor@victor.com'";
		$tblestado_civil=$this->ejecutarSql($query);
		return $tblestado_civil;
	}
}
?>