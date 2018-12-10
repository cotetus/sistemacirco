<?php $id = $_GET["id"];  ?>   
	
		<form align ="center" method="POST" action="?c=ciu&a=Guardar"  enctype="multipart/form-data">
		<table align= 'center'>
		<td><input type="hidden" name="id" value="<?php echo $id; ?>" required/></td>
		<tr><td><label>Nombre:</label></td>
		<td><input type="text" name="nombre" value="<?php echo $ciu['nombre']; ?>"  required/></td></tr>
		<tr><td><label></label></td><td align="right"><input class="button edit" type="submit" value="Editar"/></td>
		</tr>
		</form></table>