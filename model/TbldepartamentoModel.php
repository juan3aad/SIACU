<?php
class TbldepartamentoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tbldepartamento";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnDepartamento(){
		$query="SELECT * FROM tbldepartamento WHERE id_departamento='1'";
		$tbldepartamento=$this->ejecutarSql($query);
		return $tbldepartamento;
	}
}
?>