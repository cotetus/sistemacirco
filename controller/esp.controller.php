<?php
require_once 'model/Espectaculos.class.php';

class espController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Espectaculos();
    }
    
    public function Index(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/esp/menu.php';
        require_once 'view/admin/esp/listEsp.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Crud(){
        if(isset($_REQUEST['id'])){
            $esp = Espectaculos::listOne($_REQUEST['id']);
        }
        require_once 'view/admin/header.php';
        require_once 'view/admin/esp/menu.php';
        require_once 'view/admin/esp/esp-editar.php';
        require_once 'view/admin/footer.php';
     
    }

    public function Img() {
        if (isset($_REQUEST['id'])) {
            $img = Espectaculos::listOne($_REQUEST['id']);
        }
        require_once 'view/admin/header.php';
        require_once 'view/admin/esp/menu.php';
        require_once 'view/admin/esp/img-editar.php';
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
       $insert = Espectaculos::editImg($id, $img);
        if (isset($insert)) {
        header('Location: index.php');
        }
      }
    }
    
    public function Guardar(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $artista = $_REQUEST['artista'];
        $descripcion = $_REQUEST['descripcion'];

        if($_FILES["img"]){
       $direccion ="assets/image/";
       $nanmeimage = $_FILES["img"]["name"];
       $nombreTemp = $_FILES["img"]["tmp_name"];
       move_uploaded_file($nombreTemp,$direccion.$nanmeimage);
   }
       $img = $nanmeimage;
       if($_FILES["banner"]){
       $direction ="assets/image/banner";
       $namebanner = $_FILES["img"]["name"];
       $nameTemp = $_FILES["img"]["tmp_name"];
       move_uploaded_file($nameTemp,$direction.$namebanner);
   }
       $banner = $namebanner;   
       
        $insert = Espectaculos::save($nombre, $artista, $descripcion, $img, $banner, $id);
        if (isset($insert)) {
        header('Location: index.php');
        }
    }
    
    public function Eliminar(){
        $delete = Espectaculos::delete($_REQUEST['id']);
        header('Location: index.php');
    }
}