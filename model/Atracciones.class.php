<?php

 class Atracciones {
   private $id;
   private $nombre;
   private $descripcion;
   private $id_esp;
   private $img;
   const TABLA = 'atracciones';
   
   public function getId() {
      return $this->id;
   }
   public function getNombre() {
      return $this->nombre;
   }
   public function getDescripcion() {
      return $this->descripcion;
   }
   public function getId_esp() {
      return $this->id_esp;
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
   public function setId_esp($id_esp) {
      $this->artista = $id_esp;
   }
   public function setImg($img){
      $this->img = $img;
   }
   
   public function save($nombre, $id_esp, $descripcion, $img, $id){
      $conexion = new Conexion();
      if($id) { //Modifica toda una linea, mediante el id.

         $sql = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre, descripcion = :descripcion, id_esp = :id_esp WHERE id = :id');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':id_esp', $id_esp);
         $sql->bindParam(':id', $id);
         $sql->execute();
      }else {  //Inserta un nuevo espectaculo.
         $sql = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, descripcion, id_esp, img) VALUES(:nombre, :descripcion, :id_esp, :img)');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
         $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
         $sql->bindParam(':id_esp', $id_esp);
         $sql->bindParam(':img', $img, PDO::PARAM_STR);
         $id = $conexion->lastInsertId();
         $sql->execute();
      }
      return $sql;
   }
   public static function listOne($id){//Retorna nombre, descri.. por el id.
    
       $conexion = new Conexion();
       $sql = $conexion->prepare('SELECT nombre, descripcion, id_esp, img FROM ' . self::TABLA . ' WHERE id = :id');
       $sql->bindParam(':id', $id);
       $sql->execute();
       $reg = $sql->fetch(); //Devuelve una única linea (array con cada campo) de la TABLA(id seleccionado).
       return $reg;
       
    }
    public static function listAll(){
       $conexion = new Conexion();
       $sql = $conexion->prepare ('SELECT id, nombre, descripcion, id_esp, img FROM ' . self::TABLA . ' ORDER BY nombre');
       $sql->execute();
       $reg = $sql->fetchAll();
       return $reg;
    }
    //Edita solamente la imagen "miniatura" del listado de espectaculos.
    public static function editImg($id, $img){
      $conexion = new Conexion();
      $sql = $conexion->prepare('UPDATE '. self::TABLA .' SET img = :img WHERE id = :id');
      $sql->bindParam(':id', $id);
      $sql->bindParam(':img', $img);
      $sql->execute();
      return $sql;
    }
    //Elimina toda una linea de la tabla.
    public static function delete($id){
      $conexion = new Conexion();
      $sql = $conexion->prepare('DELETE FROM'. self::TABLA .' WHERE id = :id');
      $sql->bindValue(':id', $id);
      $sql->execute();
      return $sql;    
}

 }

?>