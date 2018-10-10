  <h1><?php $id = $_GET["id"]; echo "Editar las imagenes de:".$img["nombre"]; ?></h1>
  <form method="post" action="?c=esp&a=imgSave" enctype="multipart/form-data">
  	<table>
  	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
  	<tr><td><img id="esp-img" <?php echo "src = 'assets/image/".$img['img']."'";?>></td></tr>
  	<tr><td><input type="file" name="img" value="<?php echo $img['img']; ?>" /></td></tr>
  	<?php if (isset($img['banner'])) {
  		echo "<tr><td><img id='esp-img' src = 'assets/image/banner/".$img['banner']."'></td></tr>";
  	}else{
  		echo "<tr><td><h2>Este Espectaculo no tiene foto de portada.</h2></td></tr>";
  	}
  	?>
  	<tr><td><input type="file" name="banner"/></td></tr>
  	<tr><td><input class="button edit" type="submit" value="Editar"/></td></tr>
	</table>  
  </form>