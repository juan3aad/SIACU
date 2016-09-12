<?php
class T_CargoModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_cargo";
		parent::__construct($this->table);
	}

	
}
?>