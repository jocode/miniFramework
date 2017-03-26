<?php 

class indexModel extends Model {

	public function hola(){
		$this->query = 'SELECT * FROM accion';
		$this->query();
		return $this->array->fetch_object();
	}

}

?>