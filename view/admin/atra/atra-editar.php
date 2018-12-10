   <?php $id = $_GET["id"];  ?>   
          <!-- Img --> 
                <div class="img">
                  <form method="POST" action="?c=atra&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <tr><td><img class="container" <?php echo "src = 'assets/image/".$atra['img']."'";?>></td></tr>
                <tr><td><input type="file" name="img" value="<?php echo $atra['img']; ?>" /></td></tr>
              <tr><td><input class="btn" type="submit" value="Guardar"></td></tr>
                </form>
                </div>
         <!-- Img --> 
	
		<form align ="center" method="POST" action="?c=atra&a=Guardar"  enctype="multipart/form-data">
		<table align= 'center'>
		<td><input type="hidden" name="id" value="<?php echo $id; ?>" required/></td>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre" value="<?php echo $atra['nombre']; ?>"  required/></td></tr>
		<tr><td><label>Espectaculo:</label></td>
		<td><input type= "text" name="id_esp" value="<?php echo $atra['id_esp']; ?>" required/></td></tr>
		<tr><td><label>Descripcion:</label></td>
		<td><textarea rows="10" cols="50" name="descripcion" ><?php echo $atra['descripcion']; ?></textarea></td></tr>
		<tr><td><label></label></td><td align="right"><input class="button edit" type="submit" value="Editar"/></td>
		</tr>
		</form></table>

