<?php
require_once '../../model/indexClass.php';

class espController{
    
    private $model;
    
    
    public function __CONSTRUCT(){
        $this->model = new Espectaculos();
    }
    
    public function Index(){
        $esp = Espectaculos::listAll();
        require_once '../../view/user/header.php';
        require_once '../../view/user/esp/esp-all.php';
        require_once '../../view/user/footer.php';
    }
public function One(){
        if(isset($_REQUEST['id'])){
            $esp = Espectaculos::listOne($_REQUEST['id']);
        }

        require_once '../../view/user/header.php';
        require_once '../../view/user/esp/esp-perfil.php';
        require_once '../../view/user/footer.php';
        }     
    }
    ?>