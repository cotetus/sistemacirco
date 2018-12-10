   <?php $id = $_GET["id"];  ?>   
      <!-- Fotos  -->
        <div class="images">
        	<div class="banner">
                <!-- Banner -->
                <form  method="POST" action="?c=esp&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <tr><td><img id="esp-banner" <?php echo "src = 'assets/image/banner/".$esp['banner']."'";?> style="width:100%"></td></tr>
                <tr><td><input type="file" name="img" value="<?php echo $esp['banner']; ?>" /></td></tr>
              <tr><td><input type="submit" value="Editar"></td></tr>
                </form>
      		<!-- Banner -->	

          <!-- Img --> 
                <div class="img">
                  <form  method="POST" action="?c=esp&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <tr><td><img id="esp-img" <?php echo "src = 'assets/image/".$esp['img']."'";?>></td></tr>
                <tr><td><input type="file" name="img" value="<?php echo $esp['img']; ?>" /></td></tr>
              <tr><td><input type="submit" value="Editar"></td></tr>
                </form>
                </div>
         <!-- Img --> 

        	</div>

        </div>
        <!-- Fotos -->   
	<table align= 'center'>
		<form  method="POST" action="?c=esp&a=Guardar"  enctype="multipart/form-data">
		
		<td><input type="hidden" name="id" value="<?php echo $id; ?>"/></td>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre" value="<?php echo $esp['nombre']; ?>"  required/></td></tr>
		<tr><td><label>Titulo:</label></td>
		<td><input type= "text" name="artista" value="<?php echo $esp['artista']; ?>" required/></td></tr>
		<tr><td><label>Descripcion:</label></td>
		<td><textarea rows="10" cols="50" name="descripcion" form="form"><?php echo $esp['descripcion']; ?></textarea></td></tr>
		<tr><td><label></label></td><td align="right"><input class="button edit" type="submit" value="Editar"/></td>
		</tr>
		</form></table>

