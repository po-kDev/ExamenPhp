<?php
  date_default_timezone_set('America/Bogota');
	class Aspirante{
	private $nombre;
	private $id;
	private $curso;
	private $naci;
	
	public function __constructor(){

	}
	public function setNombre($nom){
		$this->nombre=$nom;
	}
 
 	public function getNombre(){
 		return $this->nombre;
 	}

 	public function setId($ident){
		$this->id=$ident;
	}
 
 	public function getId(){
 		return $this->id;
 	}

	public function setCurso($cur){
		$this->curso=$cur;
	} 	

	public function getCurso(){
	$this->curso;
	}

	public function setNacimiento($nacimi){
		$this->naci=$nacimi;
	}

	public function getNacimiento(){
		$this->naci;
	}
	}
	?>
