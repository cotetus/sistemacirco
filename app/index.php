<?php

	//Cargar Librerias
	required_once 'config/Config.php';


	spl_autoload_register(function($nameClass){

		required_once 'libreries'.$nameClass.'php';


	})