<?php
require_once 'model/indexClass.php';

class atraController{
    
    private $model;
    private $aux;
    
    
    public function __CONSTRUCT(){
        $this->model = new Atracciones();
        $this->aux = new Espectaculos();
    }
    
    public function Index(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/atra/listAtra.php';
        require_once 'view/admin/footer.php';
    }

    public function agregar(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/atra/insert.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Crud(){
        if(isset($_REQUEST['id'])){
            $atra = Atracciones::listOne($_REQUEST['id']);
            $id = $atra['id_esp'];
            $esp = Espectaculos::listOne($id);
        }

        require_once 'view/admin/header.php';
        require_once 'view/admin/atra/atra-editar.php';
        require_once 'view/admin/footer.php';
     
    }

    public function imgSave(){
        $id = $_REQUEST['id'];
        if($_FILES["img"]){
       $direccion ="assets/image/";
       $nanmeimage = $_FILES["img"]["name"];
       $nombreTemp = $_FILES["img"]["tmp_name"];
       move_uploaded_file($nombreTemp,$direccion.$nanmeimage);
   }
       $img = $nanmeimage;
       if (!$img) {
           header('Location: index.php');
       }else {
       $insert = Atracciones::editImg($id, $img);
        if (isset($insert)) {
        header('Location: index.php');
        }
      }
    }
    
    public function Guardar(){
        
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $id_esp = $_REQUEST['id_esp'];
        $descripcion = $_REQUEST['descripcion'];

        if(isset($_FILES["img"])){
       $direccion ="assets/image/";
       $nanmeimage = $_FILES["img"]["name"];
       $nombreTemp = $_FILES["img"]["tmp_name"];
       move_uploaded_file($nombreTemp,$direccion.$nanmeimage);
   }
      if (isset($nanmeimage)) {
        $img = $nanmeimage;
      }else{
        $img = NULL;
      }
         //var_dump($id); die;
        $insert = Atracciones::save($nombre, $id_esp, $descripcion, $img, $id);
        
        if (isset($insert)) {
        header('Location: index.php?c=atra&a=Index');
        }

        
    }
    
    public function Eliminar(){
        $id = $_REQUEST["id"];
        $delete = Atracciones::delete($id);
        if (isset($delete)) {
            header('Location: index.php?c=atra&a=Index');
        }else{
            echo "error";

        }
        
        
        
      
    }
}