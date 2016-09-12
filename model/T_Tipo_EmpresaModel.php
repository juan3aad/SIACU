<?php
class T_Tipo_EmpresaModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_tipo_empresa";
		parent::__construct($this->table);
	}

	
}
?>