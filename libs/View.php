<?php 

class View {

	public function render($folder, $view){
		$file = 'Views/'.$folder.'/'.$view.'.php';
		if(file_exists($file)){
			include($file);
		} else {
			echo 'Vista no encontrada '.$file.' <br>';
		}
	}

}

?>