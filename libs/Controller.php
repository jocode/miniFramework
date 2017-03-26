<?php 

class Controller {

	private $class;
	private $vista;

	public function __construct($_model, $_view){
		$this->class = $_model;
		$this->vista = $_view;
		$this->view = new View();
		# Cargar Modelo
		$this->loadModel();
	}

	public function getClass(){
		return $this->class;
	}

	public function getView(){
		return $this->vista;
	}

	private function loadModel(){
		$model = $this->class.'Model';
		$file = 'Models/'.$model.'.php';
		if (file_exists($file)){
			require_once($file);
			if (class_exists($model)){
				$this->model = new $model();
			}
		}
	}

}

?>