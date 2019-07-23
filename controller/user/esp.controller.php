<?php
 require_once 'model/indexClass.php';

class espController{
    private $atra;
    private $model;
    private $ciudad;
    
    
    public function __CONSTRUCT(){
        $this->model = new Espectaculos();
        $this->atra = new Atracciones();
        $this->ciudad = new Ciudad();
    }
    
    public function Index(){
        $esp = Espectaculos::listOne(28);
        //$espAll = Espectaculos::listAll();
        require_once 'view/user/head.php';
        require_once 'view/user/esp/home.php';
        require_once 'view/user/footer.php';
    }
public function One(){
        if(isset($_REQUEST['id'])){
            $esp = Espectaculos::listOne($_REQUEST['id']);

        }

        require_once 'view/user/head.php';
        require_once 'view/user/esp/esp-perfil.php';
        require_once 'view/user/footer.php';
        }     
    }
    ?>