<?php
  class Pages extends Controller{

  	public function __contructor(){
      $this->espModel = $this->model(Espectaculos);

  	}

  	public function index(){
  		
      $espectaculos = $this->espModel->selectEsp();
  		$datos = [
  			'espectaculos' => $espectaculos
  		];

  		$this->view('pages/inicio', $datos);
  	}

      public function agregar(){

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $datos = [
              'nombre' => trim($_POST['nombre']),
              'artista' => trim($_POST['artista']),
              'descripcion' => trim($_POST['descripcion'])
        ];
      }

      if ($this->espModel->insertEsp($datos)) {
        redirection('/pages')
      }else{
        $datos = [
          'nombre' => '',
          'artista' => '',
          'descripcion' => '',
          'img' => '',
          'banner' => '',
        ];

        $this->view('pages/insertesp', $datos);
      }
    }
 	
 }

?>