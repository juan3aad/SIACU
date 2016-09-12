<?php
class TblcargoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblcargo";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnCargo(){
		$query="SELECT * FROM tblcargo WHERE email='victor@victor.com'";
		$tblpersona=$this->ejecutarSql($query);
		return $tblpersona;
	}
}
?>