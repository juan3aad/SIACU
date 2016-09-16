<?php
class T_DepartamentoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_departamento";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnDepartamento(){
		$query="SELECT * FROM t_departamento WHERE id_departamento='1'";
		$tbldepartamento=$this->ejecutarSql($query);
		return $tbldepartamento;
	}
}
?>