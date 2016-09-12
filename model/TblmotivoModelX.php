<?php
class TblmotivoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblmotivo";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnMotivo(){
		$query="SELECT * FROM tblmotivo WHERE email='victor@victor.com'";
		$tblmotivo=$this->ejecutarSql($query);
		return $tblmotivo;
	}
}
?>