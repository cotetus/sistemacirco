  		<h1>
    	<?php echo $esp['id'] != null ? $esp['nombre'] : 'Nuevo Registro'; ?>
		</h1>    
		<form method="POST" action="?c=esp&a=Guardar" enctype="multipart/form-data">
		<table align= 'center'>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre"placeholder="Ingrese el Nombre" required/></td></tr>
		<tr><td><label>Slogan:</label></td>
		<td><input type= "text" name="artista"placeholder="Ingrese EL Slogan" required/></td></tr>
		<tr><td><label>Logo:</label></td>
		<td><input type="file" name="img"/></td></tr>
		<tr><td><label>Banner:</label></td>
		<td><input type="file" name="banner"/></td></tr>
		<tr><td><label>Descripcion:</label></td>
		<td><input type= "text" name="descripcion" placeholder="Ingrese una Descripcion" required/></td></tr>
		<tr><td><label></label></td><td align="right"><input type="submit" value="Registrar"/></td>
		</tr>
		</table>
		</form>
		<div id="esp-list"></div>
