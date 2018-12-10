<div id="wrapper-esp-all">
			        
              	
              <form method="POST" action="?c=atra&a=Guardar" id="form" enctype="multipart/form-data">
		<input type="hidden" name="id"/>
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Ingrese el Nombre" required/>
		<select  name="id_esp"/>
		<option value ="">Selecione</option>
		<?php
		foreach($this->aux->listAll() as $item){
		echo "<option value = '".$item['id']."'>".$item['nombre']."</option>";}
		?>
		</select>
		<label>Logo:</label><br>
		<input type="file" name="img"/><br>
		<label>Descripcion:</label><br>
		<textarea rows="10" cols="150" name="descripcion" form="form"></textarea>
		<input class="button edit" type="submit" value="Registrar"/>
		</form></div>