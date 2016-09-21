<?php
class TblmunicipioModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="tblmunicipio";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnMunicipio(){
		$query="SELECT * FROM tblmunicipio WHERE email='victor@victor.com'";
		$tblmunicipio=$this->ejecutarSql($query);
		return $tblmunicipio;
	}
}
?>