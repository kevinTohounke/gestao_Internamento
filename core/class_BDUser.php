<?php
require_once $_SERVER['DOCUMENT_ROOT']."/gestao_internamento/core/class_BD.php";

class BDUser extends BD

{

	private static $mysqli= null;

	public static function conectar(){

		if(static::$mysqli==null):
			try{

				static::$mysqli = new mysqli("localhost","root","","gestao");
				static::$mysqli->set_charset("utf8");

			}
			catch(Exception  $e)
		{  
			echo "Execption: ".$e->getMessage();
		}
		endif;
		

		return static::$mysqli;


	}
}

?>