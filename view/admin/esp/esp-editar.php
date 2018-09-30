        <h1>
    	<?php $id = $_GET["id"]; echo $id != null ? "Editar el evento: ".$esp['nombre'] : 'Nuevo Registro'; ?>
		</h1>    
		<form method="POST" action="?c=esp&a=Guardar"  enctype="multipart/form-data">
		<table align= 'center'>
		<td><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre" value="<?php echo $esp['nombre']; ?>"  required/></td></tr>
		<tr><td><label>Slogan:</label></td>
		<td><input type= "text" name="artista" value="<?php echo $esp['artista']; ?>" required/></td></tr>
		<tr><td><label>Descripcion:</label></td>
		<td><textarea rows="10" cols="50" name="descripcion" form="form"><?php echo $esp['descripcion']; ?></textarea></td></tr>
		<tr><td><label></label></td><td align="right"><input class="button edit" type="submit" value="Registrar"/></td>
		</tr>
		</form></table>

