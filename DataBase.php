<?php
class Database {
    private $user = "admin";
    private $pass = "";
    private $host = "localhost";
    private $db = "sistemacirco";
    
    protected $conexion;
    
    function __construct() {
        $this->conexion = new PDO(
                "mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
    }
}
