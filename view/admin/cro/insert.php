<div id="wrapper-esp-all">
			        
               	
         <form method="POST" action="?c=cro&a=Guardar"  enctype="multipart/form-data">
		
		<label>Ciudad:</label>
		<select  name="id_ciu"/>
		<option value ="">Ciudad...</option>
		<?php
		foreach($this->ciudad->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<select  name="id_esp"/>
		<option value ="">Espectaculo...</option>
		<?php
		foreach($this->espectaculo->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<label>Fecha/inicio</label>
		<input type="date" name="date_in">
		<label>Fecha/cierre</label>
		<input type="date" name="date_end">

		<input class="button edit" type="submit" value="Registrar"/>
		</form>

</div>