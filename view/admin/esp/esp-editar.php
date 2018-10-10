
        <?php $id = $_GET["id"]; 

        if (isset($id)) {
        	$nombre = $esp['nombre'];
        	$titulo = $esp['artista'];
        	$descrip =  $esp['descripcion'];
        	$img = $esp['img'];
        	$banner = $esp['artista'];
        }else{
        	$nombre = "Nombre";
        	$titulo = "Titulo";
        	$descrip =  "Descripcion";
        	$img = NULL;
        	$banner = NULL;	
        }?>
        
        <!-- Fotos portada -->
        <div class="images">
        	<div class="banner">
      			<div class="img"></div>
        	</div>
        </div>
        <!-- Fotos portada -->   
		
		<form method="POST" action="?c=esp&a=Guardar"  enctype="multipart/form-data">
		<table align= 'center'>
		<td><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre" value="<?php echo $nombre; ?>"  required/></td></tr>
		<tr><td><label>Slogan:</label></td>
		<td><input type= "text" name="artista" value="<?php echo $titulo; ?>" required/></td></tr>
		<tr><td><label>Descripcion:</label></td>
		<td><textarea rows="10" cols="50" name="descripcion" form="form"><?php echo $descrip; ?></textarea></td></tr>
		<tr><td><label></label></td><td align="right"><input class="button edit" type="submit" value="Registrar"/></td>
		</tr>
		</form></table>

