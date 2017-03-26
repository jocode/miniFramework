<?php 

class Controller {

	private $_model;
	private $_view;

	public function __construct($_model, $_view){
		$this->_model = $_model;
		$this->_view = $_view;
		$this->view = new View();
		# Cargar Modelo
		$this->loadModel();
	}

	public function loadModel(){
		$model = $this->_model.'Model';
		$file = 'Models/'.$model.'Model.php';
		if (file_exists($file)){
			require_once($file);
			if (class_exists($model)){
				$this->_model = new $model();
			}
		} else {echo 'No existe el modelo '.$model.'<br/>'; }
	}

	public function getClass(){
		return $this->_model;
	}

	public function getView(){
		return $this->_view;
	}

}

?>