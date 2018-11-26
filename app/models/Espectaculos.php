<?php 

 class Espectaqculos{
	private $db;
   

	public function __constructor(){
		$this->db new DataBase;
	}

	public function selectEsp(){
		//$sql = 
		$resutl = $this->db->query('SELECT id, nombre, descripcion, artista, img FROM espectaculos ORDER BY nombre');
		$result = $this->db->execute();
		$result = $this->db->selectAll();
		return $result;
		
	}

	public function insertEsp($datos){
		$sql ='INSERT INTO espectaculos (nombre, descripcion, artista, img, banner) VALUES(:nombre, :descripcion, :artista, :img, :banner)';
		$this->db->query($sql);
		$this->db->bind(':nombre', $datos ['nombre']);
		$this->db->bind(':artista', $datos ['artista']);
		$this->db->bind(':descripcion', $datos ['descripcion']);
		$this->db->bind(':img', $datos ['img']);
		$this->db->bind(':banner', $datos ['banner']);
	}


}