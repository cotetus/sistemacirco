   <?php $id = $_GET["id"];  ?>   
          <!-- Img --> 
                <div class="img">
                  <form method="POST" action="?c=atra&a=imgSave"  enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <img class="container" <?php echo "src = 'assets/image/".$atra['img']."'";?>>
                <input type="file" name="img" value="<?php echo $atra['img']; ?>" /></td></tr>
              <input class="btn" type="submit" value="Guardar">
                </form>
                </div>
         <!-- Img --> 
	
		<form align ="center" method="POST" action="?c=atra&a=Guardar"  enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>" required/>
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?php echo $atra['nombre']; ?>"  required/>
		<select  name="id_esp"/>
		<option value =""><?php echo $esp['nombre']; ?></option>
		<?php
		foreach($this->aux->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<label>Descripcion:</label>
		<textarea rows="10" cols="50" name="descripcion" ><?php echo $atra['descripcion']; ?></textarea>
		<input class="button edit" type="submit" value="Editar"/>
		</form>

