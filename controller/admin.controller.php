<?php
require_once 'model/indexClass.php';

class adminController{
    
    private $model;
    private $suss;
    
    public function __CONSTRUCT(){
        $this->model = new Admin();
        
    }

    public function Index(){
        require_once 'view/admin/adm/login.html';
    }
    
    public function captcha(){
$r_c = $_POST['g-recaptcha-response'];
 if (isset($r_c) && $r_c){
     $secr = "6LdmUIAUAAAAADSroAyHRD9kumZE7nPshLXHqXd9";
     $ip = $_SERVER['REMOTE_ADDR'];
     $valid = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secr&response=$r_c&remoteip=$ip");
     header ("Location: index.php?c=esp&a=Index");
 }else{
    header ("Location: view/user/index.php?c=esp&a=Index");
 }

    }
    public function loguear(){
        
        $user = $_POST['email'];
        $pass = $_POST['pass'];
        $suss = Admin::login($user, $pass);
        
        if (isset($suss)) {
            
            session_start();
            $_SESSION["nombre"] = $_POST['id'];
            $_SESSION["rango"] = 'adm';
            header ("Location: index.php?c=esp&a=Index");

        }else{
            header ("Location: view/user/index.php?c=esp&a=Index");
        }
    }
}