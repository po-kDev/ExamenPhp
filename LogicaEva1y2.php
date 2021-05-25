<?php
date_default_timezone_set('America/Bogota');
require'Evaluacion.php';
include('ConfiCone.php');

	
	$eva=$_GET['evalu'];
	$punta=0;
	$sql="";

	if($eva == "eva1"){
		$den=$_GET["id"];
		$pu=$_GET["uno"];
		$pd=$_GET["dos"];
		$pt=$_GET["tres"];
		$pc=$_GET["cuatro"];
		$pcin=$_GET["semana"];
		$raiz=19.4;

		$prue= new Evaluacion();
		$punta=$prue->Puntaje($pu,$pd,$pt,$pc,$pcin,$raiz);

		if($punta>=3 && $punta<=5){

			$sql="UPDATE aspirantes SET puntaje_eva_1=".$punta." WHERE identificacion=".$den;

			header("Location:http://localhost/php_Aspirante/FormEva2.php?doc=".$den);
		}else{

			$sql="UPDATE aspirantes SET puntaje_eva_1=".$punta." WHERE identificacion=".$den;
			header("Location:http:PerVal1.php");
		}

	}


	$eva=$_GET['evalu'];
	$punta=0;

	if($eva=="eva2"){
     	$den=$_GET["id"];
    	$pu=$_GET["uno"];
		$pd=$_GET["dos"];
		$pt=$_GET["tres"];
		$pc=$_GET["cuatro"];
		$pcin=$_GET["cinco"];

		$prue= new Evaluacion();

		$punta=$prue->Puntaje2($pu,$pd,$pt,$pc,$pcin);
				

		 if($punta>=4){
		 	$sql="UPDATE aspirantes SET puntaje_eva_2=".$punta."  WHERE identificacion=".$den;
			header("Location:http://localhost/php_Aspirante/Result.php");
		
		}else{
			$sql="UPDATE aspirantes SET puntaje_eva_2=".$punta."  WHERE identificacion=".$den;
			header("Location:http://localhost/php_Aspirante/PerVal1.php");
		
		}

		

	}
	
	if($cone->query($sql)){
		echo "<br/>Cambio exitoso";
	}else{
		echo "<br/>no se a podido registrar: ERROR: ".$cone->error;
		exit();
	}

?>