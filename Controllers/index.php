<?php 

class index extends Controller {

	public function inicio(){
		$this->view->render($this->getClass(), $this->getView());
	}

}

?>