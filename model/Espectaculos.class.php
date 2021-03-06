<?php

 class Espectaculos {
   private $id;
   private $nombre;
   private $descripcion;
   private $artista;
   private $img;
   private $banner;
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
   public function getBanner(){
     return $this->banner;
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
   public function setBanner($banner){
      $this->banner =$banner;
   }
   
   public function save($nombre, $artista, $descripcion, $img, $banner, $id){
      $conexion = new Conexion();
      if($id) { //Modifica toda una linea, mediante el id.

         $sql = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre, descripcion = :descripcion, artista = :artista WHERE id = :id');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':artista', $artista, PDO::PARAM_STR);
         $sql->bindParam(':id', $id);
         $sql->execute();
      }else {  //Inserta un nuevo espectaculo.
         $sql = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, descripcion, artista, img, banner) VALUES(:nombre, :descripcion, :artista, :img, :banner)');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':artista', $artista, PDO::PARAM_STR);
         $sql->bindParam(':banner', $banner, PDO::PARAM_STR);
         $sql->bindParam(':img', $img, PDO::PARAM_STR);
         $id = $conexion->lastInsertId();
         $sql->execute();
      }
      return $sql;
   }

   
   public static function listOne($id){//Retorna nombre, descri.. por el id.
       $conexion = new Conexion();
       $sql = $conexion->prepare('SELECT nombre, descripcion, artista, img, banner FROM ' . self::TABLA . ' WHERE id = :id');
       $sql->bindParam(':id', $id);
       $sql->execute();
       $reg = $sql->fetch(); //Devuelve una única linea (array con cada campo) de la TABLA(id seleccionado).
       return $reg;
       
    }
    public static function listAll(){
       $conexion = new Conexion();
       $sql = $conexion->prepare ('SELECT id, nombre, descripcion, artista, img, banner FROM ' . self::TABLA . ' ORDER BY nombre');
       $sql->execute();
       $reg = $sql->fetchAll();
       return $reg;
    }
    //Edita solamente la imagen "miniatura" del listado de espectaculos.
    public static function editImg($id, $img, $banner){
      $conexion = new Conexion();
      $sql = $conexion->prepare('UPDATE '. self::TABLA .' SET img = :img, banner = :banner WHERE id = :id');
      $sql->bindParam(':id', $id);
      $sql->bindParam(':img', $img);
      $sql->bindParam(':banner', $banner);
      $sql->execute();
      return $sql;
    }
    //Elimina toda una linea de la tabla.
    public static function delete($id){
      $conexion = new Conexion();
      $sql = $conexion->prepare('DELETE FROM '. self::TABLA .' WHERE id = :id');
      $sql->bindValue(':id', $id);
      $sql->execute();
      return $sql;
        
}

 }

?>