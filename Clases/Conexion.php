<?php 
 class Conexion extends PDO { 
   
   private $tipo_dbase = 'mysql';
   private $host = 'localhost';
   private $name_dbase = 'sistemacirco';
   private $user = 'root';
   private $pass = ''; 
   
   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct($this->tipo_dbase.':host='.$this->host.';dbname='.$this->name_dbase, $this->user, $this->pass);
      }catch(PDOException $e){ //Levanto una excepción, capturando el error.
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   } 
 } 
?>