<?php
 class Database{
 	private $host = DB_HOST;
 	private $user = DB_USER;
 	private $pass = DB_PASSW;
 	private $db_name = DB_NAME;

 	private $conection;
 	private $stmt;
 	private $error;

 	public function __construct(){

 		$dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name=;
 		$opciones = array(
 				PDO::ATTR_PERSISTENT => true,
 				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

 		try {
 			$this->conection = new PDO($dsn, $this->user, $this->pass, $opciones);
 			$this->conection->exec('set names utf8');
 		} catch (PDOExeption $e) {
 			$this->error $e->getMessage();
 			echo $this->error;
 		}
 	}
 	//Preparamos la consulta.
 	public function query($sql){
 		$this->stmt =$this->conection->prepare($sql);
 	}
    //Vinculamos la consulta.
 	public function bind($parametro, $value, $tipo= null){
 		if (is_null($tipo)) {
 			switch (true) {
 				case is_int($value):
 					$tipo = PDO::PARAM_INT;
 					break;
 				case is_bool($value):
 					$tipo = PDO::PARAM_BOOL;
 					break;
 				case is_null($value):
 					$tipo = PDO::PARAM_NULL;
 					break;
 				
 				default:
 					$tipo = PDO::PARAM_STR;
 					break;
 			}
 		}

 		$this->stmt->bindValue($parametro, $value, $tipo);

 	}
 	//Ejecuta la consulta.
 	public function execute(){
 		return $this->stmt->execute();
 	}

 	public function selectAll(){
 		$this->execute();
 		return $this->stmt->fetchAll(PDO::FETCH_OBJ);

 	}

 	public function selectOne(){
 		$this->execute();
 		return $this->stmt->fetch(PDO::FETCH_OBJ);
 	}

 	public function rowCount(){
 		$this->execute();
 		return $this->stmt->rowCont();
 	}


}