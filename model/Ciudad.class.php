 <?php class Ciudad {
   private $id;
   private $nombre;
   const TABLA = 'ciudad';


   public function getId() {
      return $this->id;
   }
   public function getNombre() {
      return $this->nombre;
   }

   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }

   public function save($nombre, $id){
   		$conexion = new Conexion();

   		if($id) { //Modifica toda una linea, mediante el id.

         $sql = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre WHERE id = :id');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
		 $sql->bindParam(':id', $id);
		 $sql->execute();
		}else {  
         $sql = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre) VALUES(:nombre');
		$sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
		$id = $conexion->lastInsertId();
        $sql->execute();
      }
      return $sql;
   }

    public static function listOne($id){//Retorna nombre, descri.. por el id.
    
       $conexion = new Conexion();
       $sql = $conexion->prepare('SELECT nombre FROM ' . self::TABLA . ' WHERE id = :id');
	   $sql->bindParam(':id', $id);
       $sql->execute();
       $reg = $sql->fetch(); //Devuelve una única linea (array con cada campo) de la TABLA(id seleccionado).
       return $reg;
       
    }

    public static function listAll(){
       $conexion = new Conexion();
       $sql = $conexion->prepare ('SELECT id, nombre FROM ' . self::TABLA . ' ORDER BY nombre');
	   $sql->execute();
       $reg = $sql->fetchAll();
       return $reg;
    }
		public static function delete($id){
      		$conexion = new Conexion();
      		$sql = $conexion->prepare('DELETE FROM'. self::TABLA .' WHERE id = :id');
      		$sql->bindValue(':id', $id);
      		$sql->execute();
      		return $sql;    
}


   }


   ?>