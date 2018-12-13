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
       var_dump($sql);die;
   }

   }


   ?>