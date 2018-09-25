<?php
require_once 'model/Espectaculos.class.php';

class espController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Espectaculos();
    }
    
    public function Index(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/esp/listEsp.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Crud(){
        $esp = new Espectaculos();
        
        if(isset($_REQUEST['id'])){
            $esp = $this->model->listOne($_REQUEST['id']);
        }
        
        require_once 'view/admin/header.php';
        require_once 'view/admin/esp/esp-editar.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Guardar(){
        
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
       
        $insert = Espectaculos::save($nombre, $artista, $descripcion, $img, $id);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->delete($_REQUEST['id']);
        header('Location: index.php');
    }
}