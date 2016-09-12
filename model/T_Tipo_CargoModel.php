<?php
class T_Tipo_CargoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_tipo_cargo";
		parent::__construct($this->table);
	}

	
}
?>