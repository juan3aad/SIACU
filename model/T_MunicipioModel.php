<?php
class T_MunicipioModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_municipio";
		parent::__construct($this->table);
	}

	//Metodos de consulta
	public function getUnMunicipio(){
		$query="SELECT * FROM t_municipio WHERE email='victor@victor.com'";
		$tblmunicipio=$this->ejecutarSql($query);
		return $tblmunicipio;
	}
}
?>