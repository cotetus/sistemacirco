<?php
require_once 'model/indexClass.php';

class ciuController{
    
    private $model;
    
    
    public function __CONSTRUCT(){
        $this->model = new Ciudad();
    }
    
    public function Index(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/ciu/listCiu.php';
        require_once 'view/admin/footer.php';
    }

    public function agregar(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/ciu/insert.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Crud(){
        if(isset($_REQUEST['id'])){
            $ciu = Ciudad::listOne($_REQUEST['id']);
        }

        require_once 'view/admin/header.php';
        require_once 'view/admin/ciu/ciu-editar.php';
        require_once 'view/admin/footer.php';
     
    }

    
    public function Guardar(){
        
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];

        $insert = Ciudad::save($nombre, $id);
        
        if (isset($insert)) {
        header('Location: index.php?c=ciu&a=Index');
        }

        
    }
    
    public function Eliminar(){
        $id = $_REQUEST["id"];
        $delete = Ciudad::delete($id);
        if (isset($delete)) {
            header('Location: index.php');
        }else{
            echo "error";

        }
        
        
        
      
    }
}