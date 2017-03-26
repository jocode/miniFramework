<?php 
require_once('config.php');
#Validamos que esté la variable url definida, si no le asignamos un controlador por defecto
$ruta = isset($_GET['url']) ? $_GET['url'] : 'index/inicio';

# Tomamos la url y la separamos por posiciones en una arreglo
$ruta = explode('/', $ruta);

if(isset($ruta[0])){
	$controller = $ruta[0];
}
if(isset($ruta[1])){
	$method = $ruta[1];
}
if(isset($ruta[2])){
	$params = $ruta[2];
} else {
	$params = '';
}

$load = new Autoload();
$load->load($controller, $method, $params);

?>