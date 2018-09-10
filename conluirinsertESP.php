<?php

include_once ("Clases/Espectaculos.class.php");
   
   $nombre = $_POST["nombre"];
   $artista = $_POST["artista"];
   $descripcion = $_POST["descripcion"];
 
   if($_FILES["img"]){
	   $direccion ="";
	   $nanmeimage = $_FILES["img"]["name"];
	   $nombreTemp = $_FILES["img"]["tmp_name"];
	   move_uploaded_file($nombreTemp,$direccion.$nombre);
   }
   $img = $nanmeimage;
   $id = null;
   $insert = Espectaculos::save($nombre, $artista, $descripcion, $img, $id);
	if($insert)
		echo "Sussesfull";
	else
		echo "Error";

?>   