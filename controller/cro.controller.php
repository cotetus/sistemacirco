<?php
require_once 'model/indexClass.php';

class croController{
    
    private $model;
    private $espectaculo;
    private $ciudad;
    
    
    public function __CONSTRUCT(){
        $this->model = new Cronograma();
        $this->espectaculo = new Espectaculos();
        $this->ciudad = new Ciudad();
    }
    
    public function Index(){
        $esp = $this->espectaculo->listAll();
        $ciu = $this->ciudad->listAll();
        require_once 'view/admin/header.php';
        require_once 'view/admin/cro/listCro.php';
        require_once 'view/admin/footer.php';
    }

    public function agregar(){
        require_once 'view/admin/header.php';
        require_once 'view/admin/cro/insert.php';
        require_once 'view/admin/footer.php';
    }
    
    public function Crud(){
        if(isset($_REQUEST['id_ciu'])){
            $cro = Cronograma::listOne($_REQUEST['id_ciu']);
            $id = $cro['id_esp'];
            $esp = Espectaculos::listOne($id);
            $id = $cro['id_ciu'];
            $ciu = Ciudad::listOne($id);
        }

        require_once 'view/admin/header.php';
        require_once 'view/admin/cro/cro-editar.php';
        require_once 'view/admin/footer.php';
     
    }

    
    public function Guardar(){
        
        $idE = $_REQUEST['id_esp'];
        $idC = $_REQUEST['id_ciu'];
        $date1 = $_REQUEST['date_in'];
        $date2 = $_REQUEST['date_end'];
        $insert = Cronograma::save($idE, $idC, $date1, $date2);
        
        if (isset($insert)) {
        header('Location: index.php?c=cro&a=Index');
        }

        
    }
    
    public function Eliminar(){
        $id = $_REQUEST["id"];
        $delete = Cronograma::delete($id);
        if (isset($delete)) {
            header('Location: index.php?c=cro&a=Index');
        }else{
            echo "error";

        }
        
        
        
      
    }
}