<?php

require_once $_SERVER['DOCUMENT_ROOT']."/gestao_internamento/core/class_BDUser.php";

class Paciente{

   private  $propriedades =array();

 function __get($propriedade)
 {
   return $this->propriedades[$propriedade];
 }

  function __set($propriedade,$valor)
 {
 $this->propriedades[$propriedade] = $valor;
 }

	function inserir(Paciente $paciente)
{  
   $bd= BDUser::conectar();

   try{
      
 $pesquisa= $bd->prepare("INSERT INTO paciente values(null,?,?,?,?,?,?)");
if(!$pesquisa) throw new Exception("Prepare failed: (".$bd->errno.") ". $bd->error."", 1);
   	  else{

   	  	$nome = $paciente->nome;
			$idade = $paciente->idade;
			$sexo = $paciente->sexo;
			$endereco=$paciente->endereco;
			$estado=$paciente->estado;
			$operado= $paciente->operado;

   	  	if(!$pesquisa->bind_param("sissss",$nome,$idade,$sexo,$endereco,$estado,$operado))
   	  		throw new Exception("Bind failed: (".$bd->errno .") ".$bd->error."", 1);
   	  	  elseif(!$pesquisa->execute())
   	  		throw new Exception("Execute failed: (".$bd->errno.") ".$bd->error."", 1);
          }   	 
   }
   catch(Exception $e)
   {
   	echo $e->getMessage();
   }
   finally{
   	
   	 $pesquisa->close();
   }
  
}

function listar()
{  
   $bd= BDUser::conectar();
   
   try{
 $pesquisa= $bd->prepare("SELECT * FROM paciente");
if(!$pesquisa) throw new Exception("Prepare failed: (".$bd->errno.") ".$bd->error."", 1);
        else{
         if(!$pesquisa->bind_result($id,$nome,$idade,$sexo,$endereco,$estado,$operado))
            throw new Exception("Execute failed: (".$bd->errno.") ".$bd->error."", 1);
         
         else
         {    if(!$pesquisa->execute())
            throw new Exception("Execute failed: (".$bd->errno.") ".$bd->error."", 1);
            else
            {
               $resultado= $pesquisa->get_result()->fetch_all(MYSQLI_ASSOC);

            }
            
         }


     }       
   }
   catch(Exception $e)
   {
      echo $e->getMessage();
   }
   finally{
      
       $pesquisa->close();
   }

   return $resultado;
  
}

}

?>