<?php 

class Autoload {

	public function __construct(){
		#Validar si existe una clase y cargarla en la aplicación
		spl_autoload_register(function($class){
			$file = 'Controllers/'.$class.'.php';
			if (file_exists($file)){
				require_once($file);
			} else if (file_exists('libs/'.$class.'.php')){
				require_once('libs/'.$class.'.php');
			} else if (file_exists('Models/'.$class.'.php')){
				require_once('Models/'.$class.'.php');
			} else {
				echo 'No existe el Controlador '.$class.'<br>';
			}
		});
	}

	public function load($_controller, $_method, $_params){
		if (class_exists($_controller)){
			$controller = new $_controller($_controller, $_method);
			if (method_exists($_controller, $_method)){
				$controller->$_method($_params);
			} else {
				echo 'No existe el método '.$_method.' de la clase '.$_controller.'<br/>';
			}
		} else {
			echo 'No existe la clase '.$_controller.'<br/>';
		}
	}

}

?>