<?php
class TblausentismoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblausentismo";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnAusentismo(){
		$query="SELECT * FROM tblausentismo WHERE email='victor@victor.com'";
		$tblausentismo=$this->ejecutarSql($query);
		return $tblausentismo;
	}
}
?>