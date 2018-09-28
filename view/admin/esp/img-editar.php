  <h1><?php $id = $_GET["id"]; echo "Editar el logo del evento : ".$img["nombre"]; ?></h1>
  <form method="post" action="?c=esp&a=imgSave" enctype="multipart/form-data">
  	<table>
  	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
  	<tr><td><img id="esp-img" <?php echo "src = 'assets/image/".$img['img']."'";?>></td></tr>
  	<tr><td><input type="file" name="img"/></td></tr>
  	<tr><td><input type="submit" value="Editar Imagen"/></td></tr>
	</table>  
  </form>