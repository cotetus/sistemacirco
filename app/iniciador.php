<?php

	//Cargar Librerias
	require_once 'config/Config.php';



	spl_autoload_register(function($nameClass){

		require_once 'libreries/'.$nameClass.'.php';


	});