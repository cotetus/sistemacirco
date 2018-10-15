<?php 

  class Controller {

  	public function model($model){
  		required_once '../app/models/'.$model.'php';
  		return new $model();
  	}

  	public function view($view, $datos =[]){

  		if (file_exists('../app/views/'.$view.'php')) {
  			required_once '../app/views/'.$view.'php';
  		}else {
  			die('La pagina no existe!');
  		}	
  	}
  }


?>