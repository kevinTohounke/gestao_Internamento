<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gestao_internamento/models/class_Paciente.php";

class ControllerPaciente{

	function inserir_action()
	{

if(isset($_POST['guardar']))
{
	$paciente = new Paciente();
	$paciente->nome =$_POST['nome'];
	$paciente->idade=$_POST['idade'];
	$paciente->sexo =$_POST['sexo'];
	$paciente->endereco =$_POST['endereco'];
	$paciente->estado =$_POST['estado'];
	$paciente->operado=$_POST['operado'];

	$paciente->inserir($paciente);



}else
require './views/viewCadastrarPaciente.php';

	}


	function listar_action(){

	$paciente = new Paciente();
	$mostra = $paciente->listar();
	require './views/viewListarPaciente.php';

	}
}


?>