<?php
	date_default_timezone_set('America/Bogota');

	class NivelAcademico{
		
		private $calnaci;

 		public function nivel($calna){
 			if($calna<=35){
 			$ni="Profesional";
 		}else if($calna>= 35 && $calna<=45){
 			$ni="Tecnologo";
 		}else if($calna>45 && $calna<=55){
 			$ni="Tecnico";
 		}else{
 			$ni="Complemetario";
 		}
 		return $ni;
 		}
		}
?>