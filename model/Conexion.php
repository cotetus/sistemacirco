<?php 
 class Conexion extends PDO { 
   private $dsn = 'mysql:dbname=testdb;host=localhost';
   private $name_dbase = 'sistemacirco';
   private $user = 'root';
   private $pass = ''; 
   
   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         parent::__construct($this->dsn.';dbname='.$this->name_dbase, $this->user, $this->pass);
      }catch(PDOException $e){ //Levanto una excepción, capturando el error.
         echo 'No se ha podido conectar a la base de datos. Detalle: ' . $e->getMessage();
         
      }
   } 
 } 
?>