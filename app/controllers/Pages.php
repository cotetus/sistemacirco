<?php
  class Pages extends Controller{
      private $include;
      private $model;

  	public function __contructor(){
      $this->include = $this->model(Espectaculos);
      $this->model = Espectaculos;

  	}
   


  	public function index(){
  		
      $espectaculos = $this->model->selectEsp();
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
        redirection('/pages');
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