<?php

/* Mapear la url ingresada en el navegador */

 class Core {
 	procteted $controller = 'pages';
 	procteted $metod = 'index';
 	procteted $param = [];

 	public function __construct(){
 		$url = $this->getUrl();

 		if (file_exists('../app/controllers/'.ucwords($url[0]).'php')) {
 			$this->controller = ucwords($url[0]);
 			unset($url[0]);
 		}

 		required_once '../app/controllers/'.$this->controller.'php';
 		$this->controller = new $this->controller;

 		if (isset($url[1])) {
 			
 			if (method_exists($this->controller, $url[1])) {
 			$this->metod = $url[1];
 			unset($url[1]);
 		   }
 		
 		}
 		$this->param = $url ? array_values($url) : [];
 		call_user_func_array([$this->controller, $this->metod], $this->param)

 	}

 	public function getUrl(){
 		echo $_GET['url'];
 		if (isset($_GET['url'])) {
 			$url = rtrim($_GET['url'],'/');
 			$url = filter_var($url, FILTER_SANITIZE_URL);
 			$url = explode('/', $url);
 		}
 	}
 }