<?php
 date_default_timezone_set('America/Bogota');

class Evaluacion {
	public function Puntaje($pre1,$pre2,$pre3,$pre4,$pre5,$raiz){

		$p=0;
		
		if($pre1 == "insti"){
			$p+=1;
		 }else{
		 	$pm=0;
		 }

		if($pre2 == "progr"){
			$p+=1;
		}else{
			$pm=0;
		}

		if($pre3 == $raiz){
			$p+=1;
		}else{
			$pm=0;
		}
		
		if($pre4 =="nopais"){
			$p+=1;
		}else{
			$pm=0;
		}
		
		if(date("w")==$pre5){
			$p+=1;
		}else{
			$pm=0;
		}
		return $p;
		}	
		
		public function Puntaje2($pre1,$pre2,$pre3,$pre4,$pre5){
			$p=0;

			if($pre1 == "trein5"){
				$p+=1;
			}else{
				$pm=0;
			}

			if($pre2 == "diez6"){
				$p+=1;
			}else{
				$pm=0;
			}

			if($pre3 == "clO"){
				$p+=1;
			}else{
				$pm=0;
			}

			if($pre4 == "once"){
				$p+=1;
			}else{
				$pm=0;
			}

			if($pre5 == "yV"){
				$p+=1;
			}else{
				$pm=0;
			}
			return $p;
		}
	
	}
	?>