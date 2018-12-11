 <?php class Admin {
   private $id;
   private $nombre;
   private $email;
   private $pass;
   private $rango;
   const TABLA = 'admin';


   public function getId() {
      return $this->id;
   }
   public function getNombre() {
      return $this->nombre;
   }

   public function getEmail() {
      return $this->email;
   }

   public function getPass() {
      return $this->pass;
   }

   public function getRango() {
      return $this->rango;
   }

   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }

   public function login($user, $pass){
      $conexion = new Conexion();
       $sql = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE email = :email and pass = :pass');
     $sql->bindParam(':email', $user);
     $sql->bindParam(':pass', $pass);
       $sql->execute();
       return $sql;
   }

   /*public function save($nombre, $id){
   		$conexion = new Conexion();

   		if($id) { //Modifica toda una linea, mediante el id.

         $sql = $conexion->prepare('UPDATE ' . self::TABLA .' SET nombre = :nombre WHERE id = :id');
         $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
		 $sql->bindParam(':id', $id);
		 $sql->execute();
		}else {  
         $sql = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre) VALUES (:nombre');
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

*/
   }


   ?>