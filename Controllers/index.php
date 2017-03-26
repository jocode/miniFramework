<?php 

class index extends Controller {

	public function inicio(){
		// Creamos una variable llamada datos que toma los valores devueltos en el método hola del modelo actual
		$datos = $this->model->hola();
		// Creamos una variable datos para la vista y le psasamos los datos que vienen del model
		$this->view->datos = $datos;
		// Renderizamos la vista
		$this->view->render($this->getClass(), $this->getView());
	}

}

?>