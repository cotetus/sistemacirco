          
          <button class="button edit"><strong><a href='?c=atra&a=agregar'>Agregar nueva atraccion</a></strong>
          </button>
          <div id="row">
                <!-- Posibles cambios con JavaScript--> 
      	<?php foreach($this->model->listAll() as $item): ?>
        	<div id="esp-wrapper">
          <img class="tooltip"id="esp-img" <?php echo "src = 'assets/image/".$item['img']."'";?>/> 
        	<h3><?php echo $item['nombre'];?></h3>
        	<p><?php echo $item['id_esp'];?></p>
          <button class="button delete"><strong><a <?php echo "href='?c=atra&a=Eliminar&id= ".$item['id']."'";?>>Eliminar</a></strong></button>
          <button class="button edit"><strong><a <?php echo "href='?c=atra&a=Crud&id= ".$item['id']."'";?>>Editar</a></strong>
          </button></div>
  		<?php endforeach; ?>
       </div>

    
