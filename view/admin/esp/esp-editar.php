   <?php $id = $_GET["id"];  ?>   
      <!-- Fotos  -->
        <div class="images">
        	<div class="banner">
                <!-- Banner -->
                <form  method="POST" action="?c=esp&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <img id="esp-banner" <?php echo "src = 'assets/image/banner/".$esp['banner']."'";?> style="width:100%">
                <input type="file" name="img" value="<?php echo $esp['banner']; ?>" />
              <input type="submit" value="Editar">
                </form>
      		<!-- Banner -->	

          <!-- Img --> 
                <div class="img">
                  <form  method="POST" action="?c=esp&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <img id="esp-img" <?php echo "src = 'assets/image/".$esp['img']."'";?>>
                <input type="file" name="img" value="<?php echo $esp['img']; ?>" />
              <input type="submit" value="Editar">
                </form>
                </div>
         <!-- Img --> 

        	</div>

        </div>
        <!-- Fotos -->   
	 <div>
		<form  method="POST" action="?c=esp&a=Guardar"  enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<label for="fname">Nombre:</label>
		<input type="text" name="nombre" value="<?php echo $esp['nombre']; ?>"  required/>
		<label for="fname">Titulo:</label>
		<input type= "text" name="artista" value="<?php echo $esp['artista']; ?>" required/>
		<label for="fname">Descripcion:</label><br>
		<textarea rows="10" cols="150" name="descripcion" form="form"><?php echo $esp['descripcion']; ?></textarea>
		<input class="button edit" type="submit" value="Editar"/>
		</form></div>

