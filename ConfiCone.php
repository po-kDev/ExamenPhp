<?php

 $serve="localhost";
 $user="root";
 $pass="";
 $db="pruebas";

$cone=new mysqli($serve,$user,$pass,$db);

if ($cone){
	echo "coneccion exitosa";
}else{
	echo "no se hubo coneccion";
}
?>