<?php $id = $_GET["id"];  ?>   
	 <div >
		<form align ="center" method="POST" action="?c=ciu&a=Guardar"  enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $id; ?>" required/>
		<label>Nombre:</label></td>
		<input type="text" name="nombre" value="<?php echo $ciu['nombre']; ?>"  required/>
		<input class="button edit" type="submit" value="Editar"/>
		</form></div>