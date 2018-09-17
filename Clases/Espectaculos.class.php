<?php
 require_once('Conexion.php');

 class Espectaculos {
   private $id;
   private $nombre;
   private $descripcion;
   private $artista;
   private $img;
   const TABLA = 'espectaculos';
   
   public function getId() {
      return $this->id;
   }
   public function getNombre() {
      return $this->nombre;
   }
   public function getDescripcion() {
      return $this->descripcion;
   }
   public function getArtista() {
      return $this->artista;
   }
   public function getImg() {
      return $this->img;
   }
   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }
   public function setDescripcion($descripcion) {
      $this->descripcion = $descripcion;
   }
   public function setArtista($nombre) {
      $this->artista = $artista;
   }
   public function setImg($img){
      $this->img = $img;
   }
   public function __construct($nombre, $artista, $descripcion, $img, $id=null) {
      $this->nombre = $nombre;
      $this->artista = $artista;
      $this->descripcion = $descripcion;
      $this->img = $img;
      $this->id = $id;

   }
   public function save($nombre, $artista, $descripcion, $img, $id){
      $conexion = new Conexion();
      if($id) { //Modifica.
         $sql = $conexion->prepare(UPDATE_ESP);
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':artista', $artista, PDO::PARAM_STR);
         $sql->bindParam(':img', $img, PDO::PARAM_STR);
         $sql->bindParam(':id', $id);
         $sql->execute();
      }else {  //Inserta.
         $sql = $conexion->prepare(self::INSERT_ESP);
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':artista', $artista, PDO::PARAM_STR);
         $sql->bindParam(':img', $img, PDO::PARAM_STR);
         $id = $conexion->lastInsertId();
         $sql->execute();
         
      }
      $conexion = null;
   }
   public static function listOne($id){//Retorna nombre, descrip, artist por el id.
       $conexion = new Conexion();
       $sql = $conexion->prepare(self::SELECTON_ESP);
       $sql->bindParam(':id', $id);
       $sql->execute();
       $reg = $sql->fetch(); //Devuelve una única linea de la TABLA(id seleccionado).
       if($reg){
          return new self($reg['nombre'], $reg['descripcion'], $reg['artista'], $reg['img'], $id);
       }else{
          return false;
       }
    }
    public static function listAll(){
       $conexion = new Conexion();
       $sql = $conexion->prepare (self::SELECT_ESP);
       $sql->execute();
       $reg = $sql->fetchAll();
       return $reg;
    }

   /* public static function editImg($id){
      $conexion = new Conexion();
      $sql = $conexion->prepare('UPDATE '. self::TABLA .' SET img = :img WHERE id = :id';);
      $sql->bindParam(':id', $id);
      $sql->execute();

    }

    public static function delete($id){
      $conexion = new Conexion();
      $sql = $conexion->prepare('DELETE FROM'. self::TABLA .' WHERE id = :id;';);
      $sql->execute();*/
    

//CONSTANTES Sqls.
    //Espectaculos.
    const UPDATE_ESP = 'UPDATE ' . self::TABLA .' SET nombre = :nombre, descripcion = :descripcion, artista = :artista, img = :img WHERE id = :id';
    const INSERT_ESP = 'INSERT INTO ' . self::TABLA .' (nombre, descripcion, artista, img) VALUES(:nombre, :descripcion, :artista, :img)';
    const SELECTON_ESP = 'SELECT nombre, descripcion, artista, img FROM ' . self::TABLA . ' WHERE id = :id';
    const SELECT_ESP = 'SELECT id, nombre, descripcion, artista, img FROM ' . self::TABLA . ' ORDER BY nombre';
   
    
    


 }

?>