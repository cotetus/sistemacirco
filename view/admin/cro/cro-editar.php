   
	 <div >
		<form align ="center" method="POST" action="?c=cro&a=Guardar"  enctype="multipart/form-data">
		<label>Ciudad</label>
		<select  name="id_ciu"/>
		<option value =""><?php echo $ciu['nombre']; ?></option>
		<?php
		foreach($this->ciudad->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<label>Espectaculo:</label></td>
		<select  name="id_esp"/>
		<option value =""><?php echo $esp['nombre']; ?></option>
		<?php
		foreach($this->espectaculo->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<label>Fecha de inicio</label>
		<input type="date" name="date_in" value="<?php echo $cro['date_in']; ?>"  required/>
		<label>Fecha de cierre</label>
		<input type="date" name="date_in" value="<?php echo $cro['date_end']; ?>"  required/>
		<input class="button edit" type="submit" value="Editar"/>
		</form></div>