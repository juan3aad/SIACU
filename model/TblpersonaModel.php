<?php
class TblpersonaModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblpersona";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnPersona(){
		$query="SELECT * FROM t_persona WHERE email='victor@victor.com'";
		$tblpersona=$this->ejecutarSql($query);
		return $tblpersona;
	}
}
?>