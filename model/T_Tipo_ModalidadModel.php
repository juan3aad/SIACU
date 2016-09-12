<?php
class T_Tipo_ModalidadModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_tipo_modalidad";
		parent::__construct($this->table);
	}

	
}
?>