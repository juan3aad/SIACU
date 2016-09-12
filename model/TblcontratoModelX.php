<?php
class TblcontratoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblcontrato";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnContrato(){
		$query="SELECT * FROM tblcontrato WHERE email='victor@victor.com'";
		$tblcontrato=$this->ejecutarSql($query);
		return $tblcontrato;
	}
}
?>