<?php

date_default_timezone_set('America/Bogota');

include('ConfiCone.php');	
require'Aspirante.php';
    
	$nom=$_GET["nombre"];
	$docu=$_GET["documento"];
	$cur=$_GET["curso"];
	$naci=$_GET["nacimiento"];

	$persona=new Aspirante();

	$persona->setNombre($nom);
	$persona->setId($docu);
	$persona->setCurso($cur);
	$persona->setNacimiento($naci);
	

	$pid=$persona->getId();
	$pnom=$persona->getNombre();
	$persona->getCurso();
	$persona->getNacimiento();

	$sql="INSERT INTO aspirantes(identificacion,nombre_aprendiz,fecha_nacimiento,curso_a_ingresar)VALUES($pid,'$pnom','$naci','$cur')";


	if($cone->query($sql)){
		// echo "registro exitoso";
		
	}else{
		echo "<br/>no se a podido registrar: ERROR: ".$cone->error;
		exit();
	}

	$cone->close();	
	header("Location://localhost/php_Aspirante/FormEva1.php?doc=".$pid);
?>