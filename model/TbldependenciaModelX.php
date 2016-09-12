<?php
class TbldependenciaModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tbldependencia";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnDependencia(){
		$query="SELECT * FROM tbldependencia WHERE email='victor@victor.com'";
		$tbldependencia=$this->ejecutarSql($query);
		return $tbldependencia;
	}
}
?>