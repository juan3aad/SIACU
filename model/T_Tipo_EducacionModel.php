<?php
class T_Tipo_EducacionModel extends ModeloBase{
	private $table;

	public function __construct(){
		$this->table="t_tipo_educacion";
		parent::__construct($this->table);
	}

	
}
?>