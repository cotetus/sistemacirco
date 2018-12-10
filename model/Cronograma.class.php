<?php

 class Cronograma {
   private $id_ciu;
   private $id_esp;
   private $date_in;
   private $date_end;

   const TABLA = 'cronograma';
   

   public function getId_ciu() {
      return $this->id_ciu;
   }
   public function getId_esp() {
      return $this->id_esp;
   }
   public function getDate_in() {
      return $this->date_in;
   }
   public function getDate_end() {
      return $this->date_end;
   }

   public function setId_ciu($id_ciu) {
      $this->nombre = $id_ciu;
   }
   public function setId_esp($id_esp) {
      $this->descripcion = $id_esp;
   }
   public function setDate_in($date_in) {
      $this->artista = $date_in;
   }
   public function setDate_end($date_end){
      $this->img = $date_end;
   }
   
   public function save($id_ciu, $id_esp, $date_in, $date_end){
      $conexion = new Conexion();
      if($id) { //Modifica toda una linea, mediante el id.

         $sql = $conexion->prepare('UPDATE ' . self::TABLA .' SET id_ciu = :id_ciu, id_esp = :id_esp, date_in = :date_in, date_end = :date_end WHERE id_ciu = :id_ciu');
         $sql->bindParam(':id_ciu', $id_ciu);
         $sql->bindParam(':id_esp', $id_esp);
         $sql->bindParam(':date_in', $date_in);
         $sql->bindParam(':date_end', $date_end);

         $sql->execute();
      }else {  //Inserta un nuevo espectaculo.
         $sql = $conexion->prepare('INSERT INTO ' . self::TABLA .' (id_ciu, id_esp, date_in, date_end) VALUES(:id_ciu, :id_esp, :date_in, :date_end)');
         $sql->bindParam(':id_ciu', $id_ciu);
         $sql->bindParam(':id_esp', $id_esp);
         $sql->bindParam(':date_in', $date_in);
         $sql->bindParam(':date_end', $date_end);
         $sql->execute();
      }
      return $sql;
   }
   public static function listOne($id_ciu){//Retorna nombre, descri.. por el id.
    
       $conexion = new Conexion();
       $sql = $conexion->prepare('SELECT id_ciu, id_esp, date_in, date_end FROM ' . self::TABLA . ' WHERE id_ciu = :id_ciu');
       $sql->bindParam(':id_ciu', $id_ciu);
       $sql->execute();
       $reg = $sql->fetch(); //Devuelve una única linea (array con cada campo) de la TABLA(id seleccionado).
       return $reg;
       
    }
    public static function listAll(){
       $conexion = new Conexion();
       $sql = $conexion->prepare ('SELECT id_ciu, id_esp, date_in, date_end FROM ' . self::TABLA);
       $sql->execute();
       $reg = $sql->fetchAll();
       return $reg;
    }
   
    //Elimina toda una linea de la tabla.
    public static function delete($id){
      $conexion = new Conexion();
      $sql = $conexion->prepare('DELETE FROM'. self::TABLA .' WHERE id_ciu = :id_ciu');
      $sql->bindValue(':id_ciu', $id_ciu);
      $sql->execute();
      return $sql;    
}

 }

?>