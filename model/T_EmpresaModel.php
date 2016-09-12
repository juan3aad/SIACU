<?php
class T_EmpresaModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_empresa";
		parent::__construct($this->table);
	}

	
}
?>