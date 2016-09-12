<?php
class T_PaisModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_pais";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnPais(){
		$query="SELECT * FROM t_pais WHERE id_pais='1'";
		$t_pais=$this->ejecutarSql($query);
		return $t_pais;
	}
}
?>