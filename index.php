<?php
define ('path',$_SERVER['DOCUMENT_ROOT']);


require_once path."/gestao_internamento/controllers/controllerHome.php";
require_once path."/gestao_internamento/controllers/controllerPaciente.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if($uri == '/gestao_internamento/index.php' || $uri == '/gestao_internamento/' ){

	$control = new ControllerHome();
	$control->index_action();

} elseif ( $uri == '/gestao_internamento/index.php/cadastroCliente'){
$control = new ControllerPaciente();
$control->inserir_action();

} elseif( $uri =='/gestao_internamento/index.php/listarPaciente'){

	$control = new ControllerPaciente();
	$control->listar_action();
}



?>